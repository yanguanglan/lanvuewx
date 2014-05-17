<?php
class AlipaywapAction extends Action{

	//在类初始化方法中，引入相关类库
	public function _initialize() {
		vendor('Alipaywap.Corefunction');
		vendor('Alipaywap.Md5function');
		vendor('Alipaywap.Notify');
		vendor('Alipaywap.Submit');
		vendor('Alipaywap.Rsa');
	}

	public function updateOrderStatus($out_trade_no){
		$product_cart_model=M('product_cart');
		$updateStatus = $product_cart_model->execute("update ai9me_product_cart set status=1 where orderid='".$out_trade_no."'");
		return $updateStatus;
	}
	public function selectTW($out_trade_no){
		$product_cart_model=M('product_cart');
		$thisOrder=$product_cart_model->where(array('orderid'=>$out_trade_no))->select();
		return $thisOrder;
	}

	//doalipay方法
	/*该方法其实就是将接口文件包下alipayapi.php的内容复制过来
	 然后进行相关处理
	 */
	public function doalipay($data){
		$alipay_config_wap=C('alipay_config_wap');

		$alipay_config_wap['partner'] = $_SESSION['payarray']['apartner'];
		$alipay_config_wap['key']     =  $_SESSION['payarray']['akey'];
		$alipay_config_wap['seller_email'] = $_SESSION['payarray']['aseller_email'];
		/**************************调用授权接口alipay.wap.trade.create.direct获取授权码token**************************/

		//返回格式
		$format = "xml";
		//必填，不需要修改

		//返回格式
		$v = "2.0";
		//必填，不需要修改

		//请求号
		$req_id = date('Ymdhis');
		//必填，须保证每次请求都是唯一

		//**req_data详细信息**

		//服务器异步通知页面路径
		$notify_url = $alipay_config_wap['notify_url'];//"http://www.xxx.com/WS_WAP_PAYWAP-PHP-UTF-8/notify_url.php";
		//需http://格式的完整路径，不允许加?id=123这类自定义参数

		//页面跳转同步通知页面路径
		$call_back_url = $alipay_config_wap['call_back_url'];//"http://127.0.0.1:8800/WS_WAP_PAYWAP-PHP-UTF-8/call_back_url.php";
		//需http://格式的完整路径，不允许加?id=123这类自定义参数

		//操作中断返回地址
		$merchant_url = $alipay_config_wap['merchant_url'];//"http://127.0.0.1:8800/WS_WAP_PAYWAP-PHP-UTF-8/xxxx.php";
		//用户付款中途退出返回商户的地址。需http://格式的完整路径，不允许加?id=123这类自定义参数

		//卖家支付宝帐户
		$seller_email = $alipay_config_wap['seller_email'];
		//必填

		//商户订单号
		$out_trade_no = $data['WIDout_trade_no'];
		//商户网站订单系统中唯一订单号，必填

		//订单名称
		$subject = $data['WIDsubject'];
		//必填

		//付款金额
		$total_fee = $data['WIDtotal_fee'];
		//必填

		//请求业务参数详细
		$req_data = '<direct_trade_create_req><notify_url>' . $notify_url . '</notify_url><call_back_url>' . $call_back_url . '</call_back_url><seller_account_name>' . $seller_email . '</seller_account_name><out_trade_no>' . $out_trade_no . '</out_trade_no><subject>' . $subject . '</subject><total_fee>' . $total_fee . '</total_fee><merchant_url>' . $merchant_url . '</merchant_url></direct_trade_create_req>';
		//必填
		/************************************************************/

		//构造要请求的参数数组，无需改动
		$para_token = array(
		"service" => "alipay.wap.trade.create.direct",
		"partner" => trim($alipay_config_wap['partner']),
		"sec_id"  => trim($alipay_config_wap['sign_type']),
		"format"	=> $format,
		"v"	=> $v,
		"req_id"	=> $req_id,
		"req_data"	=> $req_data,
		"_input_charset"	=> trim(strtolower($alipay_config_wap['input_charset']))
		);

		//建立请求
		$alipaySubmit = new AlipaySubmit($alipay_config_wap);
		$html_text = $alipaySubmit->buildRequestHttp($para_token);

		//URLDECODE返回的信息
		$html_text = urldecode($html_text);

		//解析远程模拟提交后返回的信息
		$para_html_text = $alipaySubmit->parseResponse($html_text);

		//获取request_token
		$request_token = $para_html_text['request_token'];


		/**************************根据授权码token调用交易接口alipay.wap.auth.authAndExecute**************************/

		//业务详细
		$req_data = '<auth_and_execute_req><request_token>' . $request_token . '</request_token></auth_and_execute_req>';
		//必填

		//构造要请求的参数数组，无需改动
		$parameter = array(
		"service" => "alipay.wap.auth.authAndExecute",
		"partner" => trim($alipay_config_wap['partner']),
		"sec_id" => trim($alipay_config_wap['sign_type']),
		"format"	=> $format,
		"v"	=> $v,
		"req_id"	=> $req_id,
		"req_data"	=> $req_data,
		"_input_charset"	=> trim(strtolower($alipay_config_wap['input_charset']))
		);

		//建立请求
		$alipaySubmit = new AlipaySubmit($alipay_config_wap);
		$html_text = $alipaySubmit->buildRequestForm($parameter, 'get', '确认');
		echo $html_text;
	}

	/******************************
	 服务器异步通知页面方法
	 其实这里就是将notify_url.php文件中的代码复制过来进行处理

	 *******************************/
	public function notifyurl(){
		//logResult("进入notify");
		//这里还是通过C函数来读取配置项，赋值给$alipay_config
		$alipay_config_wap=C('alipay_config_wap');
      
		$alipay_config_wap['partner'] = $_SESSION['payarray']['apartner'];
		$alipay_config_wap['key']     = $_SESSION['payarray']['akey'];
		$alipay_config_wap['seller_email'] = $_SESSION['payarray']['aseller_email'];

		//logResult('apartner:'.$alipay_config_wap['partner'].'_akey:'.$alipay_config_wap['key']);


		//计算得出通知验证结果
		$alipayNotify = new AlipayNotify($alipay_config_wap);
		$verify_result = $alipayNotify->verifyNotify();

		if($verify_result) {//验证成功
			//logResult("验证通过");
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			//请在这里加上商户的业务逻辑程序代
			//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——

			//解密（如果是RSA签名需要解密，如果是MD5签名则下面一行清注释掉）
			//$notify_data = $alipayNotify->decrypt($_POST['notify_data']);

			//获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表

			//解析notify_data
			//注意：该功能PHP5环境及以上支持，需开通curl、SSL等PHP配置环境。建议本地调试时使用PHP开发软件
			$doc = new DOMDocument();
			$doc->loadXML($_POST['notify_data']);
			
			if( ! empty($doc->getElementsByTagName( "notify" )->item(0)->nodeValue) ) {
				//商户订单号
				$out_trade_no = $doc->getElementsByTagName( "out_trade_no" )->item(0)->nodeValue;
				//支付宝交易号
				$trade_no = $doc->getElementsByTagName( "trade_no" )->item(0)->nodeValue;
				//交易状态
				$trade_status = $doc->getElementsByTagName( "trade_status" )->item(0)->nodeValue;
				//if($_POST['trade_status'] == 'TRADE_FINISHED') {
				if($trade_status == 'TRADE_FINISHED') {

					$this->updateOrderStatus($out_trade_no);
					//判断该笔订单是否在商户网站中已经做过处理
					//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
					//如果有做过处理，不执行商户的业务程序

					//注意：
					//该种交易状态只在两种情况下出现
					//1、开通了普通即时到账，买家付款成功后。
					//2、开通了高级即时到账，从该笔交易成功时间算起，过了签约时的可退款时限（如：三个月以内可退款、一年以内可退款等）后。

					//调试用，写文本函数记录程序运行情况是否正常
					//logResult("TRADE_FINISHED 验证通过");

					echo "success";		//请不要修改或删除
				}
				//else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
				else if ($trade_status == 'TRADE_SUCCESS') {
					$this->updateOrderStatus($out_trade_no);
					//判断该笔订单是否在商户网站中已经做过处理
					//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
					//如果有做过处理，不执行商户的业务程序

					//注意：
					//该种交易状态只在一种情况下出现——开通了高级即时到账，买家付款成功后。

					//调试用，写文本函数记录程序运行情况是否正常
					//logResult("TRADE_SUCCESS 验证通过");

					echo "success";		//请不要修改或删除
				}
			}

			//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		}
		else {
			//logResult("验证失败");
			//验证失败
			echo "fail";

			//调试用，写文本函数记录程序运行情况是否正常
				
		}
	}

	/*
	 页面跳转处理方法；
	 这里其实就是将return_url.php这个文件中的代码复制过来，进行处理；
	 */
	public function returnurl(){
		$alipay_config_wap=C('alipay_config_wap');

		$alipay_config_wap['partner'] = $_SESSION['payarray']['apartner'];
		$alipay_config_wap['key']     = $_SESSION['payarray']['akey'];

		//计算得出通知验证结果
		$alipayNotify = new AlipayNotify($alipay_config_wap);
		$verify_result = $alipayNotify->verifyReturn();
		if($verify_result) {//验证成功
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			//请在这里加上商户的业务逻辑程序代码

			//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
			//获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

			//商户订单号
			$out_trade_no = $_GET['out_trade_no'];

			//支付宝交易号
			$trade_no = $_GET['trade_no'];

			//交易状态
			$result = $_GET['result'];


			//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序

			$rs = $this->selectTW($out_trade_no);
				
			$this->redirect(U('Product/my',array('token'=>$rs[0]['token'],'wecha_id'=>$rs[0]['wecha_id'],'success'=>1)));

			//echo "验证成功<br />";

			//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		}
		else {
			//验证失败
			//如要调试，请看alipay_notify.php页面的verifyReturn函数
			//echo "验证失败";
			$rs = $this->selectTW($out_trade_no);
			$this->redirect(U('Product/my',array('token'=>$rs[0]['token'],'wecha_id'=>$rs[0]['wecha_id'],'success'=>0)));
		}
	}
}
?>
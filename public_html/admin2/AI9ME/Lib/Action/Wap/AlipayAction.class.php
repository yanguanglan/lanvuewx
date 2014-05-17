<?php
class AlipayAction extends Action{

	//在类初始化方法中，引入相关类库
	public function _initialize() {
		vendor('Alipay.Corefunction');
		vendor('Alipay.Md5function');
		vendor('Alipay.Notify');
		vendor('Alipay.Submit');
	}
	public function updateOrderStatus($out_trade_no){
		$product_cart_model=M('product_cart');
		//$thisOrder=$product_cart_model->where(array('orderid'=>$out_trade_no,'dining'=>0,'diningtype'=>0))->find();
		//检查权限
		//if ($thisOrder['wecha_id']!=$_GET['wecha_id']){
		//	return -1;
		//}
		$updateStatus = $product_cart_model->execute("update ai9me_product_cart set status=1 where orderid='".$out_trade_no."'");
		//if(!$updateStatus)
		//return -2;
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
		$alipay_config=C('alipay_config');
		$alipay_config['partner'] = $_SESSION['payarray']['apartner'];
		$alipay_config['key']     = $_SESSION['payarray']['akey'];

		/**************************请求参数**************************/
		$payment_type = "1"; //支付类型 //必填，不能修改
		$notify_url = C('alipay.notify_url'); //服务器异步通知页面路径
		$return_url = C('alipay.return_url'); //页面跳转同步通知页面路径
		$seller_email =  $_SESSION['payarray']['aseller_email'];//C('alipay.seller_email');//卖家支付宝帐户必填
		$out_trade_no = $data['trade_no'];//商户订单号 通过支付页面的表单进行传递，注意要唯一！
		$subject = $data['ordsubject'];  //订单名称 //必填 通过支付页面的表单进行传递
		$total_fee = $data['ordtotal_fee'];   //付款金额  //必填 通过支付页面的表单进行传递
		$body = $data['ordbody'];  //订单描述 通过支付页面的表单进行传递
		$show_url = '';//$data['ordshow_url'];  //商品展示地址 通过支付页面的表单进行传递
		$anti_phishing_key = "";//防钓鱼时间戳 //若要使用请调用类文件submit中的query_timestamp函数
		$exter_invoke_ip = get_client_ip(); //客户端的IP地址
		/************************************************************/

		//构造要请求的参数数组，无需改动
		$parameter = array(
        "service" => "create_direct_pay_by_user",
        "partner" => trim($_SESSION['payarray']['apartner']),
        "payment_type"    => $payment_type,
        "notify_url"    => $notify_url,
        "return_url"    => $return_url,
        "seller_email"    => $seller_email,
        "out_trade_no"    => $out_trade_no,
        "subject"    => $subject,
        "total_fee"    => $total_fee,
        "body"            => $body,
        "show_url"    => $show_url,
        "anti_phishing_key"    => $anti_phishing_key,
        "exter_invoke_ip"    => $exter_invoke_ip,
        "_input_charset"    => trim(strtolower($alipay_config['input_charset']))
		);
		//建立请求
		$alipaySubmit = new AlipaySubmit($alipay_config);
		$html_text = $alipaySubmit->buildRequestForm($parameter,"post", "确认");
		echo $html_text;
	}

	/******************************
	 服务器异步通知页面方法
	 其实这里就是将notify_url.php文件中的代码复制过来进行处理

	 *******************************/
	function notifyurl(){
		//这里还是通过C函数来读取配置项，赋值给$alipay_config
		$alipay_config=C('alipay_config');
		$alipay_config['partner'] = $_SESSION['payarray']['apartner'];
		$alipay_config['key']     = $_SESSION['payarray']['akey'];
		
		//计算得出通知验证结果
		$alipayNotify = new AlipayNotify($alipay_config);
		$verify_result = $alipayNotify->verifyNotify();
		if($verify_result) {
			//验证成功
			//获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
			$out_trade_no   = $_POST['out_trade_no'];      //商户订单号
			$trade_no       = $_POST['trade_no'];          //支付宝交易号
			$trade_status   = $_POST['trade_status'];      //交易状态
			$total_fee      = $_POST['total_fee'];         //交易金额
			$notify_id      = $_POST['notify_id'];         //通知校验ID。
			$notify_time    = $_POST['notify_time'];       //通知的发送时间。格式为yyyy-MM-dd HH:mm:ss。
			$buyer_email    = $_POST['buyer_email'];       //买家支付宝帐号；
			$parameter = array(
             "out_trade_no"     => $out_trade_no, //商户订单编号；
             "trade_no"     => $trade_no,     //支付宝交易号；
             "total_fee"     => $total_fee,    //交易金额；
             "trade_status"     => $trade_status, //交易状态
             "notify_id"     => $notify_id,    //通知校验ID。
             "notify_time"   => $notify_time,  //通知的发送时间。
             "buyer_email"   => $buyer_email,  //买家支付宝帐号；
			);
			if($_POST['trade_status'] == 'TRADE_FINISHED') {
				//
			}else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
				//if(!checkorderstatus($out_trade_no)){
					
				$this->updateOrderStatus($out_trade_no);
				//orderhandle($parameter);
				//进行订单处理，并传送从支付宝返回的参数；
				//}
			}
			echo "success";        //请不要修改或删除
		}else {
			//验证失败
			echo "fail";
		}
	}

	/*
	 页面跳转处理方法；
	 这里其实就是将return_url.php这个文件中的代码复制过来，进行处理；
	 */
	function returnurl(){
		$alipay_config=C('alipay_config');
		$alipay_config['partner'] = $_SESSION['payarray']['apartner'];
		$alipay_config['key']     = $_SESSION['payarray']['akey'];
		
		$alipayNotify = new AlipayNotify($alipay_config);//计算得出通知验证结果
		$verify_result = $alipayNotify->verifyReturn();
		if($verify_result) {
				
			//验证成功
			//获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表
			$out_trade_no   = $_GET['out_trade_no'];      //商户订单号
			$trade_no       = $_GET['trade_no'];          //支付宝交易号
			$trade_status   = $_GET['trade_status'];      //交易状态
			$total_fee      = $_GET['total_fee'];         //交易金额
			$notify_id      = $_GET['notify_id'];         //通知校验ID。
			$notify_time    = $_GET['notify_time'];       //通知的发送时间。
			$buyer_email    = $_GET['buyer_email'];       //买家支付宝帐号；

			$parameter = array(
            "out_trade_no"   => $out_trade_no,      //商户订单编号；
            "trade_no"       => $trade_no,          //支付宝交易号；
            "total_fee"      => $total_fee,         //交易金额；
            "trade_status"   => $trade_status,      //交易状态
            "notify_id"      => $notify_id,         //通知校验ID。
            "notify_time"    => $notify_time,       //通知的发送时间。
            "buyer_email"    => $buyer_email,       //买家支付宝帐号
			);

			if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
				//查询token 和 wecha_id
				$rs = $this->selectTW($out_trade_no);
				$this->redirect(U('Product/my',array('token'=>$rs[0]['token'],'wecha_id'=>$rs[0]['wecha_id'],'success'=>1)));
				//if(!checkorderstatus($out_trade_no)){
				//	orderhandle($parameter);  //进行订单处理，并传送从支付宝返回的参数；
				//}
				//$this->redirect(C('alipay.successpage'));//跳转到配置项中配置的支付成功页面；
			}else {
				$rs = $this->selectTW($out_trade_no);
				$this->redirect(U('Product/my',array('token'=>$rs[0]['token'],'wecha_id'=>$rs[0]['wecha_id'],'success'=>0)));
				//echo "trade_status=".$_GET['trade_status'];
				//$this->redirect(C('alipay.errorpage'));//跳转到配置项中配置的支付失败页面；
			}
		}else {
			//验证失败
			//如要调试，请看alipay_notify.php页面的verifyReturn函数
			echo "支付失败！";
		}
	}
}
?>
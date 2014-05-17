<?php
class PayAction extends Action{
	//在类初始化方法中，引入相关类库
	public function _initialize() {
		vendor('Tenpay.classes.ResponseHandler');
		vendor('Tenpay.classes.RequestHandler');
		vendor('Tenpay.classes.client.ClientResponseHandler');
		vendor('Tenpay.classes.client.TenpayHttpClient');
		vendor('Tenpay.classes.function');
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
	public function dotenpay($data){
		$tenpay_config=C('tenpay_config');
		/* 获取提交的订单号 */
		$out_trade_no = $data['order_id'];

		/* 获取提交的商品名称 */
		$product_name = $data["product_name"];
		/* 获取提交的商品价格 */
		$order_price = $data["order_price"];
		/* 获取提交的备注信息 */
		$remarkexplain = $data["remarkexplain"];
		/* 支付方式 */ //默认1
		$trade_mode=1;//$data["trade_mode"];

		$strDate = date("Ymd");
		$strTime = date("His");

		/* 商品价格（包含运费），以分为单位 */
		$total_fee = $order_price*100;

		/* 商品名称 */
		$desc = "商品：".$product_name.",备注:".$remarkexplain;

		/* 创建支付请求对象 */
		$reqHandler = new RequestHandler();

		$reqHandler->init();
		$reqHandler->setKey($_SESSION['payarray']['tkey']);
		$reqHandler->setGateUrl("https://gw.tenpay.com/gateway/pay.htm");

		//----------------------------------------
		//设置支付参数
		//----------------------------------------
		//  $return_url = $tenpay_config['return_url'].'&token='.$data['token'].'&wecha_id='.$data['wecha_id']."&success=1";
		$reqHandler->setParameter("partner", $_SESSION['payarray']['tpartner']);
		$reqHandler->setParameter("out_trade_no", $out_trade_no);
		$reqHandler->setParameter("total_fee", $total_fee);  //总金额
		$reqHandler->setParameter("return_url", $tenpay_config['return_url']);
		$reqHandler->setParameter("notify_url", $tenpay_config['notify_url']);
		$reqHandler->setParameter("body", $desc);
		$reqHandler->setParameter("bank_type", "DEFAULT");  	  //银行类型，默认为财付通
		//用户ip
		$reqHandler->setParameter("spbill_create_ip", $_SERVER['REMOTE_ADDR']);//客户端IP
		$reqHandler->setParameter("fee_type", "1");               //币种
		$reqHandler->setParameter("subject",$desc);               //商品名称，（中介交易时必填）

		//系统可选参数
		$reqHandler->setParameter("sign_type", "MD5");  	 	  //签名方式，默认为MD5，可选RSA
		$reqHandler->setParameter("service_version", "1.0"); 	  //接口版本号
		$reqHandler->setParameter("input_charset", "utf-8");   	  //字符集
		$reqHandler->setParameter("sign_key_index", "1");    	  //密钥序号

		//业务可选参数
		$reqHandler->setParameter("attach", "");             	  //附件数据，原样返回就可以了
		$reqHandler->setParameter("product_fee", "");        	  //商品费用
		$reqHandler->setParameter("transport_fee", "0");      	  //物流费用
		$reqHandler->setParameter("time_start", date("YmdHis"));  //订单生成时间
		$reqHandler->setParameter("time_expire", "");             //订单失效时间
		$reqHandler->setParameter("buyer_id", "");                //买方财付通帐号
		$reqHandler->setParameter("goods_tag", "");               //商品标记
		$reqHandler->setParameter("trade_mode",$trade_mode);              //交易模式（1.即时到帐模式，2.中介担保模式，3.后台选择（卖家进入支付中心列表选择））
		$reqHandler->setParameter("transport_desc","");              //物流说明
		$reqHandler->setParameter("trans_type","1");              //交易类型
		$reqHandler->setParameter("agentid","");                  //平台ID
		$reqHandler->setParameter("agent_type","");               //代理模式（0.无代理，1.表示卡易售模式，2.表示网店模式）
		$reqHandler->setParameter("seller_id","");                //卖家的商户号


		//请求的URL
		$reqUrl = $reqHandler->getRequestURL();
		return header("Location:" . $reqUrl);
	}


	/******************************
	 服务器异步通知页面方法
	 其实这里就是将notify_url.php文件中的代码复制过来进行处理

	 *******************************/
	public function notifyurl(){
		$tenpay_config=C('tenpay_config');
		log_result("进入后台回调页面");


		/* 创建支付应答对象 */
		$resHandler = new ResponseHandler();
		$resHandler->setKey($_SESSION['payarray']['tkey']);

		//判断签名
		if($resHandler->isTenpaySign()) {

			//通知id
			$notify_id = $resHandler->getParameter("notify_id");

			//通过通知ID查询，确保通知来至财付通
			//创建查询请求
			$queryReq = new RequestHandler();
			$queryReq->init();
			$queryReq->setKey($_SESSION['payarray']['tkey']);
			$queryReq->setGateUrl("https://gw.tenpay.com/gateway/simpleverifynotifyid.xml");
			$queryReq->setParameter("partner", $_SESSION['payarray']['tpartner']);
			$queryReq->setParameter("notify_id", $notify_id);

			//通信对象
			$httpClient = new TenpayHttpClient();
			$httpClient->setTimeOut(5);
			//设置请求内容
			$httpClient->setReqContent($queryReq->getRequestURL());

			//后台调用
			if($httpClient->call()) {
				//设置结果参数
				$queryRes = new ClientResponseHandler();
				$queryRes->setContent($httpClient->getResContent());
				$queryRes->setKey($_SESSION['payarray']['tkey']);

				if($resHandler->getParameter("trade_mode") == "1"){
					//判断签名及结果（即时到帐）
					//只有签名正确,retcode为0，trade_state为0才是支付成功
					if($queryRes->isTenpaySign() && $queryRes->getParameter("retcode") == "0" && $resHandler->getParameter("trade_state") == "0") {
						log_result("即时到帐验签ID成功");
						//取结果参数做业务处理
						$out_trade_no = $resHandler->getParameter("out_trade_no");
						//财付通订单号
						$transaction_id = $resHandler->getParameter("transaction_id");
						//金额,以分为单位
						$total_fee = $resHandler->getParameter("total_fee");
						//如果有使用折扣券，discount有值，total_fee+discount=原请求的total_fee
						$discount = $resHandler->getParameter("discount");

						//------------------------------
						//处理业务开始
						//------------------------------

						//处理数据库逻辑
						//注意交易单不要重复处理
						//注意判断返回金额
						$updateOrderStatus = $this->updateOrderStatus($out_trade_no);
						//------------------------------
						//处理业务完毕
						//------------------------------
						log_result("即时到帐后台回调成功");
						echo "success";

					} else {
						//错误时，返回结果可能没有签名，写日志trade_state、retcode、retmsg看失败详情。
						//echo "验证签名失败 或 业务错误信息:trade_state=" . $resHandler->getParameter("trade_state") . ",retcode=" . $queryRes->                         getParameter("retcode"). ",retmsg=" . $queryRes->getParameter("retmsg") . "<br/>" ;
			   log_result("即时到帐后台回调失败");
			   echo "fail";
					}
				}elseif ($resHandler->getParameter("trade_mode") == "2")

				{
					//判断签名及结果（中介担保）
					//只有签名正确,retcode为0，trade_state为0才是支付成功
					if($queryRes->isTenpaySign() && $queryRes->getParameter("retcode") == "0" )
					{
						log_result("中介担保验签ID成功");
						//取结果参数做业务处理
						$out_trade_no = $resHandler->getParameter("out_trade_no");
						//财付通订单号
						$transaction_id = $resHandler->getParameter("transaction_id");


						//------------------------------
						//处理业务开始
						//------------------------------

						//处理数据库逻辑
						//注意交易单不要重复处理
						//注意判断返回金额

						log_result("中介担保后台回调，trade_state=".$resHandler->getParameter("trade_state"));
						switch ($resHandler->getParameter("trade_state")) {
							case "0":	//付款成功

								break;
							case "1":	//交易创建

								break;
							case "2":	//收获地址填写完毕

								break;
							case "4":	//卖家发货成功

								break;
							case "5":	//买家收货确认，交易成功

								break;
							case "6":	//交易关闭，未完成超时关闭

								break;
							case "7":	//修改交易价格成功

								break;
							case "8":	//买家发起退款

								break;
							case "9":	//退款成功

								break;
							case "10":	//退款关闭
									
								break;
							default:
								//nothing to do
								break;
						}
							

						//------------------------------
						//处理业务完毕
						//------------------------------
						echo "success";
					} else

					{
						//错误时，返回结果可能没有签名，写日志trade_state、retcode、retmsg看失败详情。
						//echo "验证签名失败 或 业务错误信息:trade_state=" . $resHandler->getParameter("trade_state") . ",retcode=" . $queryRes->             										       getParameter("retcode"). ",retmsg=" . $queryRes->getParameter("retmsg") . "<br/>" ;
						log_result("中介担保后台回调失败");
						echo "fail";
					}
		  }



		  //获取查询的debug信息,建议把请求、应答内容、debug信息，通信返回码写入日志，方便定位问题
		  /*
		   echo "<br>------------------------------------------------------<br>";
		   echo "http res:" . $httpClient->getResponseCode() . "," . $httpClient->getErrInfo() . "<br>";
		   echo "query req:" . htmlentities($queryReq->getRequestURL(), ENT_NOQUOTES, "GB2312") . "<br><br>";
		   echo "query res:" . htmlentities($queryRes->getContent(), ENT_NOQUOTES, "GB2312") . "<br><br>";
		   echo "query reqdebug:" . $queryReq->getDebugInfo() . "<br><br>" ;
		   echo "query resdebug:" . $queryRes->getDebugInfo() . "<br><br>";
		   */
			}else
			{
				//通信失败
				echo "fail";
				//后台调用通信失败,写日志，方便定位问题
				echo "<br>call err:" . $httpClient->getResponseCode() ."," . $httpClient->getErrInfo() . "<br>";
			}


		} else
		{
			echo "<br/>" . "认证签名失败" . "<br/>";
			echo $resHandler->getDebugInfo() . "<br>";
		}
	}

	/*
	 页面跳转处理方法；
	 这里其实就是将return_url.php这个文件中的代码复制过来，进行处理；
	 */
	public function returnurl(){
		$tenpay_config=C('tenpay_config');
		log_result("进入前台回调页面");
		/* 创建支付应答对象 */
		$resHandler = new ResponseHandler();
		$resHandler->setKey($_SESSION['payarray']['tkey']);

		//判断签名
		if($resHandler->isTenpaySign()) {

			//通知id
			$notify_id = $resHandler->getParameter("notify_id");
			//商户订单号
			$out_trade_no = $resHandler->getParameter("out_trade_no");
			//财付通订单号
			$transaction_id = $resHandler->getParameter("transaction_id");
			//金额,以分为单位
			$total_fee = $resHandler->getParameter("total_fee");
			//如果有使用折扣券，discount有值，total_fee+discount=原请求的total_fee
			$discount = $resHandler->getParameter("discount");
			//支付结果
			$trade_state = $resHandler->getParameter("trade_state");
			//交易模式,1即时到账
			$trade_mode = $resHandler->getParameter("trade_mode");

			if("1" == $trade_mode ) {
				if( "0" == $trade_state){
					//查询token 和 wecha_id
					$rs = $this->selectTW($out_trade_no);
					$this->redirect(U('Product/my',array('token'=>$rs[0]['token'],'wecha_id'=>$rs[0]['wecha_id'],'success'=>1)));
					//echo "<br/>" . "即时到帐支付成功" . "<br/>";
				} else {
					//当做不成功处理
					echo "<br/>" . "即时到帐支付失败" . "<br/>";
				}
			}elseif( "2" == $trade_mode  ) {
				if( "0" == $trade_state) {

					echo "<br/>" . "中介担保支付成功" . "<br/>";

				} else {
					//当做不成功处理
					echo "<br/>" . "中介担保支付失败" . "<br/>";
				}
			}

		} else {
			echo "<br/>" . "认证签名失败" . "<br/>";
			echo $resHandler->getDebugInfo() . "<br>";
		}
	}
}
?>
<?php
/**
 *项目公共配置
 **/
return array(
	'LOAD_EXT_CONFIG' 		=> 'db,info,email,safe,upfile,cache,route,app,alipay',		
	'APP_AUTOLOAD_PATH'     =>'@.ORG',
	'OUTPUT_ENCODE'         =>  true, 			//页面压缩输出
	'PAGE_NUM'				=> 15,
/*Cookie配置*/
	'COOKIE_PATH'           => '/',     		// Cookie路径
    'COOKIE_PREFIX'         => '',      		// Cookie前缀 避免冲突
/*定义模版标签*/
	'TMPL_L_DELIM'   		=>'{ai9me:',			//模板引擎普通标签开始标记
	'TMPL_R_DELIM'			=>'}',				//模板引擎普通标签结束标记

    //财付通配置参数
    'tenpay_config'         =>array(
         //'spname'  =>"财付通双接口测试",
         'partner' => "1900000113",                                  	//财付通商户号
         'key'     => "e82573dc7e6136ba414f2e2affbe39fa",											//财付通密钥


         'return_url' => "http://weixinguanjia.cn/admin2/index.php?g=Wap&m=Pay&a=returnurl",//显示支付结果页面,*替换成payReturnUrl.php所在路径
         'notify_url' => "http://weixinguanjia.cn/admin2/index.php?g=Wap&m=Pay&a=notifyurl",//支付完成后的回调处理页面,*替换成payNotifyUrl.php所在路径
    ),
    
	//支付宝配置参数
	'alipay_config'=>array(
	    'partner' =>'2088901443830772',   //这里是你在成功申请支付宝接口后获取到的PID；
	    'key'=>'aio6lu079cg38rto5jfue6urzy969ai3',//这里是你在成功申请支付宝接口后获取到的Key
	    'sign_type'=>strtoupper('MD5'),
	    'input_charset'=> strtolower('utf-8'),
	    'cacert'=> getcwd().'\\cacert.pem',
	    'transport'=> 'http',
	),

	'alipay'   =>array(
	//这里是卖家的支付宝账号
	 'seller_email'=>'dxcxcom@qq.com',
	//这里是异步通知页面url
	 'notify_url'=>'http://weixinguanjia.cn/admin2/index.php?g=Wap&m=Alipay&a=notifyurl', 
	//这里是页面跳转通知url
	 'return_url'=>'http://weixinguanjia.cn/admin2/index.php?g=Wap&m=Alipay&a=returnurl',
	//支付成功跳转到的页面
	 'successpage'=>'http://weixinguanjia.cn/admin2/index.php?g=Wap&m=Product&a=my',   
	//支付失败跳转到的页面
	 'errorpage'=>'http://weixinguanjia.cn/admin2/index.php?g=Wap&m=Product&a=my', 
	),
	
	
	//手机支付
	
	'alipay_config_wap'=>array(
		//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
		//合作身份者id，以2088开头的16位纯数字
		'partner'		=> '',
		'seller_email'  => '',
		//安全检验码，以数字和字母组成的32位字符
		//如果签名方式设置为“MD5”时，请设置该参数
		'key'			=> '',
		'notify_url'    =>'http://weixinguanjia.cn/admin2/Wap/Alipaywap/notifyurl', 
		'call_back_url' =>'http://weixinguanjia.cn/admin2/Wap/Alipaywap/returnurl',
		'merchant_url'  =>'http://weixinguanjia.cn/admin2/Wap/Alipaywap/returnurl',
		//商户的私钥（后缀是.pen）文件相对路径
		//如果签名方式设置为“0001”时，请设置该参数
		'private_key_path'	=> 'key/rsa_private_key.pem',
		
		//支付宝公钥（后缀是.pen）文件相对路径
		//如果签名方式设置为“0001”时，请设置该参数
		'ali_public_key_path' => 'key/alipay_public_key.pem',
		//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
		//签名方式 不需修改
		'sign_type'    => 'MD5',
		
		//字符编码格式 目前支持 gbk 或 utf-8
		'input_charset'=> 'utf-8',
		
		//ca证书路径地址，用于curl中ssl校验
		//请保证cacert.pem文件在当前文件夹目录中
		'cacert'    => getcwd().'\\cacert.pem',
		
		//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
		'transport'    => 'http',
	),
)
?>
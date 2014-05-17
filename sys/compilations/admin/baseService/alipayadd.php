<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<base target="mainFrame" />
<link rel="stylesheet" type="text/css" href="/css/wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/inside.css" media="all" />
<title>微企—国内最大的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="theme-blue" data-theme="theme-blue">
	
    <div id="main">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="box">
				<div class="box-title">
					<div class="span10">
						<h3><i class="icon-edit"></i>添加支付方式 </h3>
					</div>
					<div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
				</div>
				<div class="box-content">
					<div class="row-fluid">
						<!--只有支付宝提示-->
						<div class="alert">提示：尊敬的商户您好，为了确保您企业现金流的顺畅性，此处支付宝的类型为即时到帐，个人支付宝账号将不支持。</div>
					</div>
					<div class="tab-content">
						<form action="" id="paysetForm" method="post" class="form-horizontal form-validate" onsubmit="return checkinfo()">
						    <input type="hidden" value = "" name="ai9me_pay_setT08d9e827ffbba2efe4413cb064bbf847id" id="ai9me_pay_setid" />							<div class="control-group">
								<label class="control-label" >支付方式类型:</label>
								<div class="controls"> 
									支付宝即时到账交易
								</div>
							</div>
							<div class="control-group">
								<label for="pc_name" class="control-label" title="显示在支付宝收银台的收款方企业名称">收款方名称：</label>
								<div class="controls" title="显示在支付宝收银台的收款方企业名称">
									<input type="text"   value="" name="ai9me_pay_setT08d9e827ffbba2efe4413cb064bbf847pc_name" id="ai9me_pay_setpc_name"  class="input-large"/>									<span class="maroon">*</span>
								</div>
							</div>
							<div class="control-group">
								<label for="seller_email" class="control-label">支付宝收款账户：</label>
								<div class="controls">
								   <input type="text"   value="" name="ai9me_pay_setT08d9e827ffbba2efe4413cb064bbf847seller_email" id="ai9me_pay_setseller_email"  class="input-large"/>									<span class="maroon">*</span>
								</div>
							</div>
							<div class="control-group">
								<label for="key" class="control-label">交易安全校验码：</label>
								<div class="controls">
								    <input type="text"   value="" name="ai9me_pay_setT08d9e827ffbba2efe4413cb064bbf847key" id="ai9me_pay_setkey"  class="input-large"/>									<span class="maroon">*</span>
								</div>
							</div>
							<div class="control-group">
								<label for="partner" class="control-label">合作者身份ID：</label>
								<div class="controls">
								    <input type="text"   value="" name="ai9me_pay_setT08d9e827ffbba2efe4413cb064bbf847partner" id="ai9me_pay_setpartner"  class="input-large"/>									<span class="maroon">*</span>
								</div>
							</div>
							
							<div class="control-group">
								<label for="pc_order" class="control-label">排序（数字升序）：</label>
								<div class="controls">
								   <input type="text"   value="0" name="ai9me_pay_setT08d9e827ffbba2efe4413cb064bbf847pc_order" id="ai9me_pay_setpc_order"  class="input-mini"/>								   <span class="maroon">数字越大排序越靠前。</span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">是否启用：</label>
								<div class="controls margin-bm10">
									<label class="radio inline">
									   <input type="radio" name="ai9me_pay_setT08d9e827ffbba2efe4413cb064bbf847pc_enabled" value="1" checked="checked" />启用&nbsp;&nbsp;									</label>
									<label class="radio inline" title="买家在下单时将无法使用此支付方式进行付款">
									   <input type="radio" name="ai9me_pay_setT08d9e827ffbba2efe4413cb064bbf847pc_enabled" value="0"  />不启用&nbsp;&nbsp;									</label>
								</div>
							</div>
							
							<div class="form-actions">
								<button id="submitbtn" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
								<button type="button" class="btn" onclick="window.location='payset.html'">取消</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script> 
function checkinfo(){
	var msg = '';
	var pc_name = $("#ai9me_pay_setpc_name").val();
	if (pc_name == '') {
		msg = "收款方名称不能为空！\n";
	}
	var seller_email = $("#ai9me_pay_setseller_email").val();
	if (seller_email == '') {
		msg = msg+ "支付宝收款账户不能为空！\n";
	}
	var keyworld = $("#ai9me_pay_setkey").val();
	if (keyworld == '') {
		msg = msg + "交易安全校验码不能为空！\n";
	}
	var partnerId = $("#ai9me_pay_setpartner").val();
	if (partnerId == '') {
		msg = msg + "合作者身份ID不能为空！";
	}
	if(msg!='')
	{
		alert(msg);
		return false;
	}
	else
    {
	    return true;
	}
};
 
</script>
</body>
</html>
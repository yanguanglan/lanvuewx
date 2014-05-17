<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>订单信息</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/tg/style/buying.css" />
<script type="text/javascript">
	function sub(){
		var val=document.getElementById("buyCount").value;
		val=parseInt(val)-1;
		document.getElementById("buyCount").value=val;
		document.getElementById("decreaseBtn").className = "No_y";
		document.getElementById("increaseBtn").className = "No_t";
		document.getElementById("increaseBtn").style.color='#b8b7b7';
	}
	function add(){
		var val=document.getElementById("buyCount").value;
		val=parseInt(val)+1;
		document.getElementById("buyCount").value=val;
		document.getElementById("increaseBtn").className = "No_y";
		document.getElementById("decreaseBtn").className = "No_t";
		document.getElementById("increaseBtn").style.color='#bc8900';
	}
	
	
</script>
</head>
<body>
	<div id="Fh_hbotno" class="Fh_hbotno"></div>
		<section id="order_add" class="F_cqsmt box-shadow marg20" style="">
			<h2>订单信息</h2>
			<ul>
				<li><strong>名称:</strong><span><?php echo $wtg->name; ?></span></li>
				<li><strong>单价:</strong><span id="singlePrice" class="F_red">￥<?php echo $wtg->jg; ?></span></li>
				<li><strong>数量：</strong>
					<div class="F_inpNum">
						<a id="decreaseBtn" href="javascript:sub()" class="No_t">-</a>
							<input id="buyCount" name="buyCount" type="number" value="1" nummax="1" nummin="1" size="4" readonly="readonly">
						<a id="increaseBtn" href="javascript:add()" class="No_y">+</a>
					</div>
					<b id="buyCountTip" class="F_red2"></b>
				</li>
			</ul>
			
			<h2>用户信息</h2>
			<ul>
	     		<li><strong>姓名:</strong><input id="un" name="uname" type="text" htip="请输入正确的姓名，2~8个汉字" errtip="请输入正确的姓名，2~8个汉字" class="adress_inp addr_prop" tag="input" value="<?php echo $op->un; ?>"></li>
	     		<li><strong>手机:</strong><input id="tel" name="tel" type="tel" htip="请输入正确的手机号码" errtip="请输入正确的手机号码" class="adress_inp addr_prop" tag="input" maxlength="11" value="<?php echo $op->tel; ?>"></li>
	   		</ul>
	
			<div class="marg20"></div>
			<div class="btn_box">
				<button id="BtnBack" onclick='location.href="wtg-<?php echo $tgid; ?>.html"' class="fc_btn fc_btn_o" type="button">返回</button>
				<button id="BtnOrder" class="fc_btn" onclick="lingqu();">提交订单</button>
			</div>
			<input value="" id="token" name="token" type="hidden">
		</section>
	<section id="tipMessage" class="Fh_qdown_apv box-shadow" style="display: none; z-index: 10000; ">
	   <p class="F_red F_font">请输入正确的姓名，2~8个汉字</p>
	   <span class="F_grey2">--聚团购--</span>
	</section>
<script type="text/javascript">
function lingqu(){
	var un = $.trim($('#un').val());
	var tel = $.trim($('#tel').val());
	var num = $('#buyCount').val();
	if(un=='' || tel==''){
		tusi('请完善用户信息');
		return;
	}
	ajax('wtgtobuy.html',{ tel:tel,un:un,num:num,id:'<?php echo $tgid; ?>'},function(m){
		if(m=='rep'){
			location.href="wtg-<?php echo $tgid; ?>.html";
		}
		tusi('参团成功');
		setTimeout(function(){
			location.href="wtg-<?php echo $tgid; ?>.html";
		},1000);
	});	
}

</script>
<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://<?php echo $_SERVER['WEI_URL']; ?>" style="color: #5e5e5e;font-size: 12px;">@<?php echo $_SERVER['WEB_NAME']; ?>提供技术支持</a></span>
</div>
<div style="width: 0px;height: 0px;overflow: hidden;">
<script src="http://s22.cnzz.com/z_stat.php?id=1000151448&web_id=1000151448" language="JavaScript"></script>
</div>
<script>
/**
$(function(){
	if($('body').height()<$(window).height()){
		$('body').height($(window).height());
		$('#wxgjfooter').css('position','fixed').css('bottom','0px');
	}
});
**/
</script>
</body>
</html>
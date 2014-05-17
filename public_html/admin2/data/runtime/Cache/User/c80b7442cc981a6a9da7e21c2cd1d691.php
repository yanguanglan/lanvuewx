<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>var SITEURL='';</script>
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>


<script type="text/javascript">
function ying(){
	 document.getElementById('tiduser').style.display="none";
	 document.getElementById('quit').style.display="block";
}
function xian(){
	 document.getElementById('tiduser').style.display="block";
	 document.getElementById('quit').style.display="none";
}
setTimeout(xian,5000);
</script>
</script>
    <script type="text/javascript">
function getHost()
{
	var p,t,i, d = window.location.host;
	d = (p=d.indexOf(':'))!=-1?d.substr(0, p):d;	 
	var t="";
	if(d.substr(0,3)=='www'){
		d = d.substr(4);
	}
	var t= window.location.search.replace("?","");

	document.getElementById("Login").src="http://wx.lechengwed.com/index.html?host="+d+"&t="+t;
	document.body.style.height="100%";
	document.body.style.overflow="hidden";
    document.body.style.overflowY="hidden";
	document.body.style.overflowX="hidden";
	
	
}
window.onload =getHost;
</script>
</head>

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<div class="content" style="width:80%; border:none; margin-bottom:30px;" >

<div class="cLineB">
  <h4>支付宝配置 </h4>
 </div>
 <!--tab start-->

<!--tab end-->        
    <div class="msgWrap bgfc" style="margin-top:10px;">
	  <form class="form" method="post" action="" target="_top" enctype="multipart/form-data">	 
	  
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
			<tr>
					<th>支付开关：</th>
					<td><select name="open"><option value="0" <?php if($config["open"] == 0): ?>selected<?php endif; ?>>关闭支付</option><option value="1" <?php if($config["open"] == 1): ?>selected<?php endif; ?>>开启支付</option></select> 开启支付后，商城等b2c功能将有支付功能</td>
				</tr>
                <tr>
					<th>申请接口类型：</th>
					<td><select name="faceType" id="facetype"><option value="0" <?php if($config["faceType"] == 0): ?>selected<?php endif; ?>>手机支付宝</option><option value="1" <?php if($config["faceType"] == 1): ?>selected<?php endif; ?>>免签支付宝</option></select> <span class="jssh2">您只需要填写支付宝账号即可。</span><span class="jssh1">请根据自己需要选择，手机支付宝接口需前往支付宝申请。</span></td>
         		</tr>
               
				<tr>
					<th width="120">支付宝帐号：</th>
					<td><input type="text" name="name" value="<?php echo ($config["name"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				
                <tr class="jssh1"<?php if($config["faceType"] != 0): ?>style="display:none;"<?php endif; ?>>
					<th width="120">支付宝PID：</th>
					<td><input type="text" name="pid" value="<?php echo ($config["pid"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr class="jssh1"<?php if($config["faceType"] != 0): ?>style="display:none;"<?php endif; ?>>
					<th>支付宝KEY：</th>
					<td><input type="text" name="key" value="<?php echo ($config["key"]); ?>" class="px" style="width:550px;"></td>
				</tr>
    
              
                <tr class="jssh2"  <?php if($config["faceType"] != 1): ?>style="display:none;"<?php endif; ?> >
                	<th style="font-size:16px;font-weight:bold;color:red;">免签接口说明：</th>
                    <td style="font-size:13px;color:red;">使用免签接口，只需要输入您的支付宝账号即可，免签接口手续费为1.5%，此收款接口由本平台提供。<br />注意：购买物品时付款账号不能与此处填写的免签账号相同，否则支付宝会认为违规，导致收款不成功<br />因不符合上述规定造成的经济损失，概不负责！<td>
                </tr>
                <tr><th>&nbsp;</th>
					<td>
					<input type="hidden" name="token" value="<?php echo ($token); ?>" />
						<button type="submit" name="button" class="btnGreen">保存</button>
						<a href="javascript:history.go(-1);" class="btnGray vm">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  </div> 
 
  <script>
 	  $(function(){
		  $('#facetype').change(function(){
			var p1=$(this).children('option:selected').val();//这就是selected的值
			if(p1==1){
	 			$(".jssh1").hide();
			 	$(".jssh2").show();
			}else{
		   		$(".jssh1").show();
			   	$(".jssh2").hide();
			}
//var p2=$('#param2').val();//获取本页面其他标签的值
//window.location.href="xx.php?param1="+p1+"¶m2="+p2+"";//页面跳转并传参
		}) 
 })
  </script>
        </div>

	<div style="clear:both;"></div>
</div>



</body>
</html>t
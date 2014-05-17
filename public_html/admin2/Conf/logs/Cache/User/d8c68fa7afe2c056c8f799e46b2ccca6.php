<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">

<div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css?id=1220000" rel="stylesheet" type="text/css" />
  <!--中间内容-->
   <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
  <div class="contentmanage">
      <div class="tableContent">
        

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<div class="content">

<div class="cLineB">
  <h4><?php echo ($infoType["name"]); ?>支付方式配置 </h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a>
 </div>
 <!--tab start-->
<div class="tab">
<ul>
<?php if($infoType["type"] == 'Groupon'): ?><li class="tabli" id="tab0"><a href="<?php echo U('Groupon/index',array('token'=>$token));?>">团购订单管理</a></li>
<li class="tabli" id="tab2"><a href="<?php echo U('Groupon/products',array('token'=>$token));?>">团购管理</a></li>
<?php else: ?>
<li class="tabli" id="tab0"><a href="<?php echo U('Product/index',array('token'=>$token,'dining'=>$isDining));?>"><?php if($isDining != 1): ?>商品<?php else: ?>菜品<?php endif; ?>管理</a></li>
<li class="tabli" id="tab2"><a href="<?php echo U('Product/cats',array('token'=>$token,'dining'=>$isDining));?>"><?php if($isDining != 1): ?>商品分类<?php else: ?>菜品分类<?php endif; ?>管理</a></li>
<li class="tabli" id="tab3"><a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>$isDining));?>">订单管理</a></li>
<?php if($isDining == 1): ?><li class="tabli" id="tab2"><a href="<?php echo U('Product/tables',array('token'=>$token,'dining'=>1));?>">桌台管理</a></li><?php endif; endif; ?>



<li class="current tabli" id="tab6"><a href="<?php echo U('Product/pay',array('token'=>$token,'pay'=>1,'dining'=>$isDining));?>">支付方式配置</a></li>


</ul>
</div>
<!--tab end-->        
    <div class="msgWrap bgfc" style="margin-top:10px;">
	  <form class="form" method="post" action="">	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
			  <!--  
				<tr>
				  <th valign="top"></th>
				  <td>
					<span class="green">—————财付通配置信息：</span></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>partner：</th>
					<td><input type="text" name="tpartner" value="<?php echo ($paySet["tpartner"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>key：</th>
					<td><input type="text" name="tkey" value="<?php echo ($paySet["tkey"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				-->
				
				<tr>
				  <th valign="top"></th>
				  <td>
					<span class="green">—————支付宝配置信息：</span></td>
				</tr>
				
				<tr>
					<th width="120"><span class="red">*</span>partner：</th>
					<td><input type="text" name="apartner" value="<?php echo ($paySet["apartner"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>key：</th>
					<td><input type="text" name="akey" value="<?php echo ($paySet["akey"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>支付宝账号：</th>
					<td><input type="text" name="aseller_email" value="<?php echo ($paySet["aseller_email"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				
				
				<th>&nbsp;</th>
					<td>
					   <input type="hidden" name="token" value="<?php echo ($token); ?>" />
					   <input type="hidden" name="uid" value="<?php echo ($uid); ?>" />
					   <input type="hidden" name="id" value="<?php echo ($paySet["id"]); ?>" />
						<button type="submit" name="button" class="btnGreen">保存</button>
						<a href="javascript:history.go(-1);" class="btnGray vm">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  </div> 
 
  
        </div>
</div>
</div>

</div>

</body>
</html>
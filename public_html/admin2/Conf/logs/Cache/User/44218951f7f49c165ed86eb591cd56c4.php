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
  <h4><?php echo ($infoType["name"]); ?>回复配置 </h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a>
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
<li class="current tabli" id="tab20"><a href="<?php echo U('Reply_info/set',array('token'=>$token,'infotype'=>$infoType['type']));?>"><?php echo ($infoType["name"]); ?>回复配置</a></li>

<li class="tabli" id="tab6"><a href="<?php echo U('Product/pay',array('token'=>$token,'pay'=>1,'dining'=>$isDining));?>">支付方式配置</a></li>

</ul>
</div>
<!--tab end-->        
    <div class="msgWrap bgfc" style="margin-top:10px;">
	  <form class="form" method="post" action=""  enctype="multipart/form-data">	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				<tr>
				  <th valign="top"><span class="red">*</span>关键词：</th>
				  <td>
					<span class="red"><?php echo ($infoType["keyword"]); ?> —— 当用户输入该关键词时，将会触发此回复。</span></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>回复标题：</th>
					<td><input type="text" name="title" value="<?php echo ($set["title"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120">内容介绍：</th>
					<td><textarea style="width:560px;height:75px" name="info" id="info" class="px"><?php echo ($set["info"]); ?></textarea><br/>最多填写120个字</td>
				</tr>
				<tr>
					<th>回复图片：</th>
					<td><input type="text" name="picurl" value="<?php echo ($set["picurl"]); ?>" class="px" style="width:550px;"><br/> 填写图片外链地址，大小为720x400</td>
				</tr>
				<tr>
					<th>第三方接口：</th>
					<td><input name="apiurl" value="<?php echo ($set["apiurl"]); ?>" class="px" style="width:550px;" type="text"><br> 只适用于引用第三方3G网站的链接</td>
				</tr>
				<?php if($set and ($infoType["type"] == 'Dining')): ?><tr>
					<th>订购方式开关：</th>
					<td><label><input type="checkbox" name="diningyuding" value="1" <?php if($set["diningyuding"] == 1): ?>checked<?php endif; ?> /> 开启预定</label> <label><input type="checkbox" name="diningwaimai" value="1" <?php if($set["diningwaimai"] == 1): ?>checked<?php endif; ?> /> 开启外卖</label></td>
				</tr><?php endif; ?>
			
				<?php if($infoType["keyword"] == '订餐'): ?><tr>
					<th>微<?php echo ($infoType["keyword"]); ?>地址：</th>
					<td>http://www.weibaifen.com/admin2/index.php?g=Wap&m=Product&a=index&wid=<?php echo ($token); ?>&wxid=</td>
				</tr>
				<?php elseif($infoType["keyword"] == '商城'): ?>
				<tr>
					<th>微<?php echo ($infoType["keyword"]); ?>地址：</th>
					<td>http://www.weibaifen.com/admin2/index.php?g=Wap&m=Product&a=index&wid=<?php echo ($token); ?>&wxid=</td>
				</tr>
				<?php else: endif; ?>
				
				<th>&nbsp;</th>
					<td>
					<input type="hidden" name="keyword" value="<?php echo ($infoType["keyword"]); ?>" />
					<input type="hidden" name="infotype" value="<?php echo ($infoType["type"]); ?>" />
					<input type="hidden" name="token" value="<?php echo ($token); ?>" />
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
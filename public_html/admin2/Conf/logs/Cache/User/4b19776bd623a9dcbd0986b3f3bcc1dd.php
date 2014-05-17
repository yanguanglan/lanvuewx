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
<script src="/admin2/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/admin2/tpl/static/artDialog/plugins/iframeTools.js"></script>
        <div class="content">
<div class="cLineB">
<h4 class="left">订单管理（<a href="<?php echo U('Product/orders',array('token'=>$token,'handled'=>0));?>">未处理订单<span style="color:#f00"><?php echo ($unhandledCount); ?></span>个</a>） (<?php echo ($page); ?>) </h4>
<div class="searchbar right">
<form method="post" action="">
<input type="text" id="msgSearchInput" class="txt left" placeholder="输入订购人名字搜索" name="searchkey" value="">
<input type="hidden" name="ac" value="hotels-list">
<input type="hidden" name="id" value="9878">
<input type="hidden" name="wxid" value="gh_423dwjkewad">
<input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">
<script>
function selectall(name) {
	var checkItems=$('.cbitem');
	if ($("#check_box").attr('checked')==false) {
		$.each(checkItems, function(i,val){
			val.checked=false;
		});
		
	} else {
		$.each(checkItems, function(i,val){
			val.checked=true;
		});
	}
}
</script>
<?php if(($parentid != '0') and ($parentid != '')): ?><a href="<?php echo U('Product/cats',array('token'=>$token,'parentid'=>$parentCat['parentid']));?>" class="btnGreen" style="margin-top:-27px">返回上</a><?php endif; ?>
</form>
</div>
<div class="clr"></div>
</div>
<!--tab start-->
<div class="tab">
<ul>
<li class="tabli" id="tab0"><a href="<?php echo U('Product/index',array('token'=>$token,'dining'=>$isDining));?>"><?php if($isDining != 1): ?>商品<?php else: ?>菜品<?php endif; ?>管理</a></li>
<li class="tabli" id="tab2"><a href="<?php echo U('Product/cats',array('token'=>$token,'dining'=>$isDining));?>"><?php if($isDining != 1): ?>商品分类<?php else: ?>菜品分类<?php endif; ?>管理</a></li>
<li class="current tabli" id="tab2"><a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>$isDining));?>">订单管理</a></li>
<?php if($isDining == 1): ?><li class="tabli" id="tab2"><a href="<?php echo U('Product/tables',array('token'=>$token,'dining'=>1));?>">桌台管理</a></li><?php endif; ?>

<li class="tabli" id="tab6"><a href="<?php echo U('Product/pay',array('token'=>$token,'pay'=>1,'dining'=>$isDining));?>">支付方式配置</a></li>


</ul>
</div>
<!--tab end-->
<div class="msgWrap">
<form method="post" action="" id="info">
<div class="cLine">
<div class="pageNavigator left"> <a href="###" onclick="$('#info').submit()" title="" class="btnGrayS vm bigbtn"><img src="<?php echo RES;?>/images/product/arrow_switch.png" class="vm">处理订单</a></div>
<div class="clr"></div>
</div>

<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
<th class="select"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
<th width="70">姓名</th>
<th width="80">电话</th>
<th class="60">数量</th>
<th width="160">总价（元）</th>
<th class="60">状态</th>
<th width="130">创建时间</th>
 

<th width="150" class="norightborder">操作</th>
</tr>
</thead>
<tbody>
<tr></tr>
<?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?><tr>
<td><input type="checkbox" value="<?php echo ($o["id"]); ?>" class="cbitem" name="id_<?php echo ($i); ?>"></td>
<td><?php echo ($o["truename"]); ?> <?php if($isDining == 1): ?><span style="color:#f60">[<?php if($o["diningtype"] == 1): ?>点餐<?php elseif($o["diningtype"] == 2): ?>外卖<?php elseif($o["diningtype"] == 3): ?>预定<?php else: endif; ?>]</span><?php endif; ?></td>
<td><?php echo ($o["tel"]); ?></td>
<td><?php echo ($o["total"]); ?></td>
<td><?php echo ($o["price"]); ?></td>
<td><?php if($o["handled"] == 1): ?><span style="color:green">已处理</span><?php else: ?><span style="color:red">未处理</span><?php endif; if($o["status"] == 1): ?><span style="color:green">（已付款）</span><?php else: ?><span style="color:red">（未付款）</span><?php endif; ?></td>
<td><?php echo (date("Y-m-d H:i:s",$o["time"])); ?></td> 
<td class="norightborder"><a href="###" onclick="showIntroDetail(<?php echo ($o["id"]); ?>)">详细</a> <a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Product/deleteOrder',array('token'=>$token,'id'=>$o['id'],'dining'=>$isDining));?>');">删除</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
<input type="hidden" name="token" value="<?php echo ($_GET['token']); ?>" />
</form>

   <script>
function showIntroDetail(id){
	art.dialog.open('<?php echo U('Product/orderInfo',array('token'=>$token,'dining'=>$isDining));?>&id='+id,{lock:false,title:'订单详情',width:700,height:420,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
</div>
<div class="cLine">
<div class="pageNavigator right">
<div class="pages"><?php echo ($page); ?></div>
</div>
<div class="clr"></div>
</div>
</div>
</div>
</div>

</div>

</body>
</html>
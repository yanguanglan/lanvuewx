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
<h4 class="left"><?php if(($parentid == '0') or ($parentid == '')): if($isDining != 1): ?>分类管理<?php else: ?>菜品分类<?php endif; else: ?>“<?php echo $parentCat['name'];?>”的子分类<?php endif; ?> (<?php echo ($page); ?>) </h4>
<div class="searchbar right">
<form method="post" action="">
<input type="text" id="msgSearchInput" class="txt left" placeholder="输入关键词搜索" name="searchkey" value="">
<input type="hidden" name="ac" value="hotels-list">
<input type="hidden" name="id" value="9878">
<input type="hidden" name="wxid" value="gh_423dwjkewad">
<input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">

<?php if(($parentid != '0') and ($parentid != '')): ?><a href="<?php echo U('Product/cats',array('token'=>$token,'parentid'=>$parentCat['parentid']));?>" class="btnGreen" style="margin-top:-27px">返回上一级</a><?php endif; ?>
</form>
</div>
<div class="clr"></div>
</div>
<!--tab start-->
<div class="tab">
<ul>
<li class="tabli" id="tab0"><a href="<?php echo U('Product/index',array('token'=>$token,'dining'=>$isDining));?>"><?php if($isDining != 1): ?>商品<?php else: ?>菜品<?php endif; ?>管理</a></li>
<li class="current tabli" id="tab2"><a href="<?php echo U('Product/cats',array('token'=>$token,'dining'=>$isDining));?>"><?php if($isDining != 1): ?>商品分类<?php else: ?>菜品分类<?php endif; ?>管理</a></li>
<li class="tabli" id="tab2"><a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>$isDining));?>">订单管理</a></li>
<?php if($isDining == 1): ?><li class="tabli" id="tab2"><a href="<?php echo U('Product/tables',array('token'=>$token,'dining'=>1));?>">桌台管理</a></li><?php endif; ?>

<li class="tabli" id="tab6"><a href="<?php echo U('Product/pay',array('token'=>$token,'pay'=>1,'dining'=>$isDining));?>">支付方式配置</a></li>

</ul>
</div>
<!--tab end-->
<div class="cLine">
<div class="pageNavigator left"> <a href="<?php echo U('Product/catAdd',array('token'=>$token,'parentid'=>$parentid,'dining'=>$isDining));?>" title="新增分类" class="btnGrayS vm bigbtn"><img src="<?php echo RES;?>/images/product/add.png" class="vm">新增分类</a></div>
<div class="clr"></div>
</div>
<div class="msgWrap">
<form method="post" action="" id="info">
<input name="delall" type="hidden" value="">
<input name="wxid" type="hidden" value="">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
<th class="select">名称</th>
<th width="160">分类名称</th>
<th width="260">简介</th>
<th width="130">创建时间</th>
 

<th width="150" class="norightborder">操作</th>
</tr>
</thead>
<tbody>
<tr></tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><tr>
<td><input type="checkbox" name="del_id[<?php echo ($i); ?>]" value="285" class="checkitem"></td>
<td><?php echo ($hostlist["name"]); ?></td>
<td><?php echo ($hostlist["des"]); ?></td>
<td><?php echo (date("Y-m-d H:i:s",$hostlist["time"])); ?></td> 

<td class="norightborder"><a href="<?php echo U('Product/catSet',array('token'=>$token,'id'=>$hostlist['id'],'dining'=>$isDining));?>">修改</a> <a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Product/catDel',array('id'=>$hostlist['id'],'token'=>$token,'dining'=>$isDining));?>');">删除</a><span style="display:none"><?php if(($parentid == '0') or ($parentid == '')): ?>&nbsp;|&nbsp;<a href="<?php echo U('Product/cats',array('parentid'=>$hostlist['id'],'token'=>$token));?>">子分类</a> <a href="<?php echo U('Product/catAdd',array('token'=>$token,'parentid'=>$hostlist['id']));?>">添加子分类</a></span><?php endif; ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
</form>
<script>
   function checkvotethis() {
var aa=document.getElementsByName('del_id[]');
var mnum = aa.length;
j=0;
for(i=0;i<mnum;i++){
if(aa[i].checked){
j++;
}
}
if(j>0) {
document.getElementById('info').submit();
} else {
alert('未选中任何文章或回复！')
}
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
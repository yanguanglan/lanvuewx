<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">

<head>
	<meta charset="utf-8" />
	<title><?php echo ($metaTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta name="format-detection" content="telephone=no" />
	<link type="text/css" rel="stylesheet" href="http://localhost:8088/admin2/tpl/Wap/default/common/css/product/css/style.css" />
	<script src="http://localhost:8088/admin2/tpl/Wap/default/common/css/product/js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://localhost:8088/admin2/tpl/Wap/default/common/css/product/js/main.js"></script>
</head>

<body>
	<!--头部-->
	<header class="ts1">
		<a class="u_back fl" href="javascript:history.go(-1)"></a>
		<ul class="topbar fr">
			<li>
				<a class="icon_user" href="<?php echo U('Product/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"> <i></i>
					我的
				</a>
			</li>
			<li>
				<a class="icon_shopping" href="<?php echo U('Product/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"> <i></i>
					购物车
				</a>
			</li>
			<li>
				<a class="icon_class" href="<?php echo U('Product/cats',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>">
					<i></i>
					分类
				</a>
			</li>
			<li>
				<a class="icon_index" href="<?php echo U('Product/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>">
					<i></i>
					主页
				</a>
			</li>
		</ul>
	</header><!--主体-->
	<div class="p_floatbox">
    <div class="f_list_car p_buy clearfix" id="p_buy">
    	<span class="all_price">总价格：<font id="all_price">￥<?php echo ($totalProductFee); ?></font></span>
    	<span>总共<font id="all_numb"><?php echo ($totalProductCount); ?></font>件商品</span>
    	<a href="<?php echo U('Product/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>" class="p_btn_buy"><span class="ts1">进入购物车</span></a>
    </div>
</div>
<style>
.deploy_ctype_tip{z-index:1001;width:100%;text-align:center;position:fixed;top:50%;margin-top:-23px;left:0;}.deploy_ctype_tip p{display:inline-block;padding:13px 24px;border:solid #d6d482 1px;background:#f5f4c5;font-size:16px;color:#8f772f;line-height:18px;border-radius:3px;}
</style>
<div class="main" id="wrap">
    
    	<div class="p_mod o_address">
    		<h2 class="p_mod_title">请选择支付方式</h2>
            <div id="city">
	    		<ul>
	    			<li><input type="radio" name="tenpay" value="财付通" checked="checked" /><img src="http://localhost:8088/admin2/Extend/Vendor/Tenpay/image/cft.gif" width="135px" height="45px" ></li>
	    			<li><input type="radio" name="alipay" value="支付宝"  /><img src="http://localhost:8088/admin2/Extend/Vendor/Alipay/images/alipay.gif" ></li>
	    		</ul>
            </div>
    	</div>
    	<div class="o_btn clearfix">
    		<input type="button" class="o_btn_back ts1" onClick="history.go(-1);" value="返回" />
    		<input type="button" class="o_btn_back ts1"  onclick="javascript:window.location.href='<?php echo ($reqHandler); ?>'" value="下一步" />
    	</div>
</div>
<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://www.weixinguanjia.cn/weiweb/17/" style="color: #5e5e5e;font-size: 12px;">@微企提供技术支持</a></span>
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
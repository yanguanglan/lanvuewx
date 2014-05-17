<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<title><?php echo ($metaTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta name="format-detection" content="telephone=no" />
	<link type="text/css" rel="stylesheet" href="<?php echo C(site_url); echo $staticFilePath;?>/css/style.css" />
	<script src="<?php echo C(site_url); echo $staticFilePath;?>/js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo C(site_url); echo $staticFilePath;?>/js/main.js"></script>
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
<div class="main">
	<div class="p_content">
		<h1><?php echo ($product["name"]); ?></h1>
		<div class="p_con">
			<img src="<?php echo ($product["logourl"]); ?>" alt="<?php echo ($product["name"]); ?>"/>
            <br />
<?php echo ($product["intro"]); ?></div>
		<div class="p_mod p_seller_info p_tips ts2">
			<a href="<?php echo U('Product/product',array('token'=>$_GET['token'],'id'=>$product['id'],'wecha_id'=>$_GET['wecha_id']));?>">
				查看商品详情
				<span class="gt"></span>
			</a>
		</div>
	</div>
	<div class="p_buy clearfix fixed_b">
		<span class="p_price">
			￥<?php echo ($product["price"]); ?>
		</span>
		<a href="<?php echo U('Product/product',array('token'=>$_GET['token'],'id'=>$product['id'],'wecha_id'=>$_GET['wecha_id']));?>" class="p_btn_buy">
			<span class="ts1">去购买</span>
		</a>
	</div>
</div>

</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">

<head>
	<meta charset="utf-8" />
	<title><?php echo ($metaTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta name="format-detection" content="telephone=no" />
	<link type="text/css" rel="stylesheet" href="http://weixinguanjia.cn/admin2/tpl/Wap/default/common/css/product/css/style.css" />
	<script src="http://weixinguanjia.cn/admin2/tpl/Wap/default/common/css/product/js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://weixinguanjia.cn/admin2/tpl/Wap/default/common/css/product/js/main.js"></script>
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

    	<div class="p_mod">
    		<h2 class="p_mod_title">订单信息</h2>
            <div class="car">
                <?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><div class="car_list clearfix">
                <div class="car_content clearfix">
                  <h3><a href="<?php echo U('Product/product',array('token'=>$token,'id'=>$p['id'],'wecha_id'=>$_GET['wecha_id']));?>"><?php echo ($p["name"]); ?></a></h3>
                     <a href="<?php echo U('Product/product',array('token'=>$token,'id'=>$p['id'],'wecha_id'=>$_GET['wecha_id']));?>">
                      <img src="<?php echo ($p["logourl"]); ?>" />
                     </a>
                     <div class="car_property">
                        <span class="price_now">单价：<font>￥<?php echo ($p["price"]); ?></font></span>
                                                <div class="o_num_input clearfix" id="<?php echo ($p["id"]); ?>">
                            
                            数量：<?php echo ($p["count"]); ?>
                           
                        </div>
                                             
                     </div>
                </div>
              </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <p><span class="price_now" id="total_fee">总价格：<font>￥<?php echo ($totalFee); ?></font></span></p>
            </div>            
    	</div>

 
</div>
<style type="text/css">
.desks{ display: none;}
</style>



<style>
.deploy_ctype_tip{z-index:1001;width:100%;text-align:center;position:fixed;top:50%;margin-top:-23px;left:0;}.deploy_ctype_tip p{display:inline-block;padding:13px 24px;border:solid #d6d482 1px;background:#f5f4c5;font-size:16px;color:#8f772f;line-height:18px;border-radius:3px;}
</style>
<div class="main" id="wrap">
    <form method="post" action="" onsubmit="return tgSubmit()">
    	<div class="p_mod o_address">
    		<h2 class="p_mod_title">接收信息</h2>
            <div id="city">
    		<ul>
    			<li><strong>姓名：</strong><input type="text" placeholder="请输入收货人姓名" id="truename" name="truename" value="<?php echo ($thisOrder["truename"]); ?>" /></li>
    			<li><strong>手机：</strong><input type="text" placeholder="请输入联系人手机号" id="tel" name="tel" value="<?php echo ($thisOrder["tel"]); ?>" /></li>
    			<li><strong>地址：</strong><input type="text" placeholder="请输入详细地址" id="address" name="address" value="<?php echo ($thisOrder["address"]); ?>" /></li>
    		</ul>
            </div>
    	</div>
    </form>
</div>
<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://www.weibaifen.com/weiweb/6/" style="color: #5e5e5e;font-size: 12px;">技术支持：智能微企</a></span>
</div>
<div style="width: 0px;height: 0px;overflow: hidden;">

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
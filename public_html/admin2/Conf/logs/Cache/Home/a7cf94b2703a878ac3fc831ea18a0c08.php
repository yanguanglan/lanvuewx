<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>资费说明－<?php echo C('site_title');?></title>
<meta name="keywords" content="【AI9】 微信帮手 微信公众账号 微信公众平台 微信公众账号开发 微信二次开发 微信接口开发 微信托管服务 微信营销 微信公众平台接口开发"/>
<meta name="description" content="微信公众平台接口开发、托管、营销活动、二次开发"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/ie6.css"/>
<![endif]-->
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script type="text/javascript" src="<?php echo RES;?>/js/lang.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/config.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/page.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.lazyload.js"></script>

</head>
<body oncontextmenu="return false" onselectstart ="return false">
<div class="topbg">
<div class="top">
<div class="toplink">
<div class="welcome">欢迎使用<?php echo C('site_name');?>多用户微信营销服务平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"></div>
            <h1><a href="/" title="多用户微信营销服务平台"><img src="<?php echo RES;?>/images/logo-system.png" /></a></h1>
            <div class="navr">
        <ul id="topMenu">           
			 <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/" >首页</a></li>
                <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>
                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="http://bbs.weiqimobile.com"target="_blank">交流学习</a></li>
                <li 
                <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
            
            </ul>
        </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style-price.css"/>
<style type="text/css">
<!--
.STYLE1 {
	color: #00FF00;
	font-weight: bold;
}
.STYLE2 {color: #FF0000}
-->
</style>
<div class="banner jbanner"></div>
<div class="main">
   <div class="pos">当前位置: <a href="<?php echo C('site_url');?>"><?php echo C('site_name');?></a> &raquo; <a href="<?php echo C('site_url');?>">帮助中心</a></div>
<div class="abody">
             <div class="qtcontent">
        <div class="document faq">
            <div class="normalTitle"><h2>资费</h2></div>
            <div class="normalContent">
                <div class="section lastSection">
                	<table width="100%" border="0" cellpadding="0" cellspacing="0" class=" ListProduct8">
<thead>
                			<tr>
                				<th class="lefttitle"><strong>微信号流量套餐</strong></th>
                				<th width="100">vip0</th>
                				<th width="100">vip1</th>
                				<th width="100">vip2</th>
                				<th width="100">vip3</th>
                				<th width="100">vip4</th>
                				<th width="100">vip5</th>
                				<th width="100" class="norightborder">vip6</th>
               				</tr>
</thead>
<tbody>
                			<tr>
                				<td height="60" valign="middle" class="lefttitle">VIP价格
                					<a  class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>VIP只是流量套餐（自定义数和赠送的请求数不同而已），点击问号查看详细购买流程！</p>
</span></a></td>
                				<td><span class=>10
                				    元 / 月
               				    </span>                				  <p class="STYLE1">100 元 / 年 </p></td>
                				<td><span class=>50
                				    元 / 月
                				  <p class="STYLE1">500 元 / 年</p>
                				</span></td>
                				<td><span class=>100
                				    元 / 月
                				  <p class="STYLE1">1000 元 / 年</p>
                				</span></td>
                				<td><span class=>180
                				    元 / 月
               				    </span>                				  <p class="STYLE1">1800 元 / 年 </p></td>
                				<td><span class=>300
                				    元 / 月
               				    </span>                				  <p class="STYLE1">2700 元 / 年 </p></td>
                				<td><span class=>440
                				    元 / 月
               				    </span>                				  <p class="STYLE1">3960 元 / 年 </p></td>
                				<td class="norightborder"><span class=>680
                				    元 / 月
               				    </span>                				  <p class="STYLE1">5440 元 / 年 </p></td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">自定义条数限额 <span class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p><strong>什么是自定义限额数？</strong></p>
<p>自定义分：自定义文本、自定义图文、自定义语音。意思是，你在【AI9】 写一个图文就少一个自定义图文〔vip0图文、文本、语音都有2000自定义，够挥霍了。〕</p>
</span></span></td>
                				<td>80</td>
                				<td>300</td>
                				<td>700</td>
                				<td>1300</td>
                				<td>2200</td>
                				<td>3000</td>
                				<td class="norightborder">10000</td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">赠送月请求次数 <span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是请求数？</strong></p>
<p>用户发送一句话，就代表一个请求。
比如：用户发送 "你好！"，系统回复"你也好！"
这就算一个请求，如果系统没回复，则不计。
〔温馨提示：【AI9】 3G功能〔分类功能〕请求也算在内。3G请求看不到，只是粉丝在浏览里3G网站时候，浏览一篇文章，或者重新打开一个分类就算一个请求。目前3G功能只统计请求并不收费。〕</p>
<p><strong>什么是赠送请求？</strong></p>
<p>用户购买VIP流量套餐后会赠送用户一些功能和请求数，这个请求数被【AI9】 称为赠送请求数。</p>
</span></span></td>
                				<td>1000</td>
                				<td>5000</td>
                				<td>10000</td>
                				<td>20000</td>
                				<td>40000</td>
                				<td>100000</td>
                				<td class="norightborder">1000000</td>
               				</tr>
                            <tr >
                				<td height="50" class="lefttitle">每月免收活动创建费次数<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是活动创建费？</strong></p>
<p>创建1次活动的基础费是10元,这就是活动创建费。免收活动创建费就是免10元，其他资源消耗还是要正常扣费（如：SN码费用和实际参与抽奖人数的费用）!</p>
</span></span></td>
                				<td>0次</td>
                				<td>1次</td>
                				<td>2次</td>
                				<td>3次</td>
                				<td>4次</td>
                				<td>5次</td>
                				<td class="norightborder">6次</td>
               				</tr>
							<td class="lefttitle">会员卡数量</td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class=" ">1000</td>
                				<td class=" ">3000</td>
                				<td class=" ">10000</td>
                				<td class=" ">100000</td>
	
                            <tr >
                				<td height="50" class="lefttitle">底部版权信息<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>版权信息？</strong></p>
<p>	V0 页面有:此页面是由【<a href="<?php echo C('site_url');?>"><?php echo C('site_name');?>接口平台</a>】系统生成 版权信息</p>
</span></span></td>
                				<td>有</td>
                				<td>有</td>
                				<td>无</td>
                				<td>无</td>
                				<td>无</td>
                				<td>无</td>
                				<td class="norightborder">无</a></td>
               				</tr>
                			<tr >
               				  <td height="50" class="lefttitle"> <span class="red STYLE2"><a href="http://bbs.weiqimobile.com"target="_blank">充值请先点击这里查看流程。</a></span></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>0));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>1));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>2));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>3));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>4));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>5));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>6));?>"><em>立即充值</em></a></td>
               				</tr>
                			<tr>
                				<td height="36" class="lefttitle"><strong>基础功能</strong></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td class="norightborder"></td>
               				</tr>
                			<tr>
                				<td class="lefttitle">天气</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">查快递</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">翻译</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">百科</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">手机归属地查询</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">身份证查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">糗事</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">笑话</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">藏头藏尾诗</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">解梦</td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">健康指数计算器</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">公交查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">火车查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">网络音乐搜索</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>

<tr>
                				<td class="lefttitle">翻译朗读开关</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">发地理位置直接显示周边</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">自定义LBS数据</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">文本回复模糊匹配</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">图文回复包含匹配</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">回答不上启用第三方接口</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>



                			<tr>
                				<td height="36" class="lefttitle"><strong>高级功能（不需要单独收费）</strong></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td class="norightborder"></td>
               				</tr>
                			<tr>
                				<td class="lefttitle"><a class="tooltips" href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999"><span><p>&nbsp;</p>
</span></a>刮刮卡活动</td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">大转盘活动</td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">优惠券活动<span></span></td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>

<tr>
                				<td class="lefttitle">投票活动 <span class="tooltips" ><span><p>&nbsp;</p></span></span></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">店铺管理</td>
                				<td class="error">&nbsp;</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td class="norightborder">待定</td>
               				</tr>
                			<tr>
                				<td class="lefttitle">第三方接口融合<a class="tooltips" href="forum.php?mod=viewthread&amp;tid=340" target="999"><span>
                				  <p>&nbsp;</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
<tr>
                				<td align="left" class="lefttitle">淘宝客模块<span></span></td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
               				</tr>
                			<tr>
                				<td class="lefttitle">技术指导</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">3G网站</td>
                				<td class="error " >&nbsp;</td>
                				<td class="error " >&nbsp;</td>
                				<td class="error " >&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义语音</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义图文</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义文本</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
</tbody>
               			</table>
                </div>
            <div class="section lastSection">
<p><a href="http://bbs.weiqimobile.com" target="999" class="red">如何充值购买VIP，请点击查看。</a>有疑问的请QQ<?php echo C('site_qq');?>提问。</p>
       		  </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>
</div>
<div class="IndexFoot" style="height:120px;">
<div class="foot">
<div class="foot_page">
<a href="<?php echo C('site_url');?>"><?php echo C('site_name');?> ,微信公众平台营销</a><br/>
帮助您快速搭建属于自己的营销平台,构建自己的客户群体。<br/>
大转盘、刮刮卡，会员卡,优惠卷,订餐,订房等营销模块,客户易用,易懂,易营销（<?php echo C('site_name');?> 易服务理念）。
</div>
<div id="copyright">
	<?php echo C('site_name');?>(c)2013 微企版权所有<br/>
	技术支持：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:51" alt="联系我吧" title="联系我吧"/></a>
	售前咨询：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:51" alt="联系我吧" title="联系我吧"/></a>

</div>
    </div>
</div>
<script src="/images/css/qqserver.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/images/css/qqserver.css"/>
<div id="onlinebox" class="onlinebox onlinebox_1 onlinebox_1_2" style="position: fixed; top: 80px; right:35px; ">
	<div class="onlinebox-showbox" id="onlinebox-showbox" onMouseMove="qq(0)"><span>在<br>线<br>客<br>服<br></span></div>
	<div class="onlinebox-conbox" id="onlinebox-conbox" style="position: absolute; left: -94px; width: 118px; display:none;">
		<div class="onlinebox-top" id="onlinebox-top" title="点击可隐藏" onClick="qq(1)"><span>在线客服</span></div>
		<div class="onlinebox-center">
			<div class="onlinebox-center-box">
				<dl>
					<dt>使用帮助</dt>
						<dd><a href="tencent://message/?uin=<?php echo C('site_qq');?>&amp;Site=&amp;Menu=yes" title="QQ咨询服务">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:42"></a>
						</dd>
					</dl>
				<div class="clear"></div>
				<dl>
					<dt>技术询问</dt>
					<dd>
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes">
							<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:42" alt="咨询服务" title="咨询服务"/>
						</a>
					</dd>
				</dl>
				<div class="clear"></div>
				<dl><dt>合作加盟</dt>
				<dd>
					<a href="tencent://message/?uin=<?php echo C('site_qq');?>&amp;Site=&amp;Menu=yes" title="QQ合作加盟">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:47">
					</a>
				</dd>
				</dl>
				<div class="clear"></div>
			</div>
		</div>
		<div class="onlinebox-bottom">
			<div class="onlinebox-bottom-box">
				<div class="online-tbox">
					<div style="text-align: center; "><strong>在线时间</strong><br>	08:30-17:30<br>
						<span style="color:#999;">—————————</span><br>
						<span style="font-weight: bold; ">服务热线<br>
							<span style="font-weight: normal; "><br></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="onlinebox-bottom-bg"></div>
	</div>
</div>
<div style="display:none">
<script src="http://s15.cnzz.com/stat.php?id=5524076&web_id=5524076" language="JavaScript"></script>
</div>
</body>
</html>
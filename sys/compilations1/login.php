<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="keywords" content="微企、微信营销、微信代运营、微信托管、微网站、微商城、微营销、微信定制开发">
<meta name="description" content="<?php echo $_SERVER['WEB_NAME']; ?>,国内最大的微信公众智能服务平台,管家十大微体系:微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计、微支付、微客服,企业微营销必备。">
        <!-- Mobile Devices Support @begin -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
<!--         <link rel="stylesheet" type="text/css" href="http://stc.dxcx.com/css/bootstrap.css?2013-10-21-2" media="all" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="http://stc.dxcx.com/css/reg.css?2013-10-21-2" media="all" /> -->
<link rel="stylesheet" href="<?php echo $CSS; ?>reg_1.css"> 
<link rel="stylesheet" href="<?php echo $CSS; ?>reg_2.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>reg.css"> 
<link rel="shortcut icon" href="<?php if ($_SERVER['IS_OEM']){ ?>/favicon.ico<?php }else{ ?>/faviconmy.ico<?php } ?>" />
<title>登录-<?php echo $_SERVER['WEB_NAME']; ?>中心</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
        <!--[if IE 7]>
            <link href="http://stc.dxcx.com/css/font_awesome_ie7.css" rel="stylesheet" />
        <![endif]-->
        <!--[if lte IE 8]>
            <script src="http://stc.dxcx.com/js/excanvas_min.js"></script>
        <![endif]-->
        <!--[if lte IE 9]>
            <script src="http://stc.dxcx.com/js/watermark.js"></script>
        <![endif]-->
        <script type="text/javascript">
        $(function(){
        	$('body').height($(window).height());
        });
        </script>
    </head>
 <body> 
 <script type="text/javascript">
$(function(){
	setTimeout(function(){
		$('#notice').hide(1000);	
	},5000);
	
});

</script>
<style>
#notice{
	width: 100%;
	height: 30px;
	border-bottom: 1px solid gray;
	background-color: #f9edbe;
	border: 1px solid #f0c36d;
	color: #333333;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    border-radius: 2px;
	position: absolute;
	z-index:999999;
	position: fixed !important;
	left:0px;
	top:0px;
}
#notice span{
line-height: 30px;
	margin-left: 40px;
	font-size: 12px;
}

</style>
<div id="notice" style="display: none;">
<span>
<strong>温馨提示：</strong>微企定于11月28日进行系统升级，全新的设计界面更利于您的操作和维护，敬请期待！
</span>
</div>
	<div id="doc">
    <div id="hd" class="clearfix" style="padding-top: 72px; ">
        <div class="logo"><a href="/" hidefocus="true" onFocus="this.blur();">
        <img src="<?php echo $_SERVER['LOGO_PIC']; ?>" width="228" height="61">
        </a></div>
    </div>
    <div class="info" style="margin-top: 99px; ">
     <?php if (!$_SERVER['IS_OEM']){ ?>
        <span><a href="/login.html" target="_self" title="<?php echo $_SERVER['WEB_NAME']; ?>登录" hidefocus="true" onFocus="this.blur();">登录</a></span>
        <span class="split">|</span>
        <span><a href="/reg.html" class="registerNew" title="注册" hidefocus="true" onFocus="this.blur();">注册新帐号</a></span>
    	<?php } ?>
         
    </div>
    <form action="/" method="post">
    <div id="bd" class="quc-clearfix reg-wrapper-quick">
        <div class="content">
            <div id="loginWrap">
                <div id="modLoginWrap" class="mod-qiuser-pop">
                    <dl class="login-wrap">
                        <dt>
                            <span id="loginTitle"></span>
                        </dt>
                        <div class="ipbox">
                            <b class="r1"></b>
                            <b class="r2"></b>
                            <b class="r5"></b>
                            <div class="con">
                                <dd class="botborder" style="z-index:10;">
                                    <div class="quc-clearfix login-item">
                                        <label for="username">帐号：</label>
                                        <?php echo $u->text('un','tabindex="1" class="ipt tipinput1" placeholder="用户名" autocomplete="off" maxlength="100" suggestwidth="374px"'); ?>
                                        
                                    </div>
                                </dd>
                                <dd class="password">
                                    <div class="quc-clearfix login-item">
                                        <label for="password">密码：</label>
                                        <?php echo $u->password('pwd','tabindex="2" class="ipt tipinput1" placeholder="请输入您的密码" maxlength="20" autocomplete="off"'); ?>
                                        
                                    </div>
                                </dd>
                            </div>
                            <b class="r5"></b>
                            <b class="r3"></b>
                            <b class="r4"></b>
                        </div>
                        <dd class="find">
                            <label style="width: 400px;">
                            <table>
                            <tr>
                            <td><input id="hold" type="checkbox" checked  value="1" name="remme"/></td>
                            <td style="padding-top: 8px;">&nbsp;自动登录</td>
                            <td width="200px">
                            <?php if (!$_SERVER['IS_OEM']){ ?>
                            <a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&scope=get_user_info,add_t,add_idol,del_t,add_share&client_id=101005290&redirect_uri=http://www.weixinguanjia.cn&state=qqreg"><img src="/res/qqdl.jpg" style="vertical-align:top;width: 137px;height: 40px;"/></a>
                            <?php } ?>
                            </td>
                            </tr>
                            </table>
                                
                            </label>
                            <a href="/" target="_blank" class="fac" style="display:none;">找回密码</a>
                        </dd>
                        <div style="margin:0 0 10px; color:#c35d00;" id="error_box">
                            <span id="error_tips"></span>
                        </div>
                        <dd class="submit">
                            <span><input type="submit" tabindex="4" class="btn-login" id="btn-login" value=""></span>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    </form>
    <div id="ft">Copyright(c)2012-<?php echo date('Y'); ?> <?php echo $_SERVER['WEB_NAME']; ?> All Rights Reserved </div>
</div>
</body>
</html>
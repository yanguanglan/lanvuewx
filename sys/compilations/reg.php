﻿<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="keywords" content="微企、微信营销、微信代运营、微信托管、微网站、微商城、微营销、微信定制开发">
<meta name="description" content="<?php echo $_SERVER['WEB_NAME']; ?>,微信公众智能服务平台,微企十大微体系:微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计、微支付、微客服,企业微营销必备。">
        <!-- Mobile Devices Support @begin -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
<!--         <link rel="stylesheet" type="text/css" href="http://stc.weimob.com/css/bootstrap.css?2013-10-21-2" media="all" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="http://stc.weimob.com/css/reg.css?2013-10-21-2" media="all" /> -->
<link rel="stylesheet" href="<?php echo $CSS; ?>reg_1.css"> 
<link rel="stylesheet" href="<?php echo $CSS; ?>reg_2.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>reg.css"> 
<link rel="shortcut icon" href="<?php if ($_SERVER['IS_OEM']){ ?>/favicon.ico<?php }else{ ?>/faviconmy.ico<?php } ?>" />
<title>注册 - <?php echo $_SERVER['WEB_NAME']; ?>中心</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
        <!--[if IE 7]>
            <link href="http://stc.weimob.com/css/font_awesome_ie7.css" rel="stylesheet" />
        <![endif]-->
        <!--[if lte IE 8]>
            <script src="http://stc.weimob.com/js/excanvas_min.js"></script>
        <![endif]-->
        <!--[if lte IE 9]>
            <script src="http://stc.weimob.com/js/watermark.js"></script>
        <![endif]-->
    </head>
 <body> 
	<div class="header">
	</div>
	<div class="mainbody">
		<div class="top">

        <div id="hd" class="clearfix">
            <div class="logo"><a href="/" hidefocus="true" onfocus="this.blur();">
            <img src="<?php echo $_SERVER['LOGO_PIC']; ?>" width="228" height="61">
            </a></div>
        </div>

        <div class="info">
        <span><a href="/" target="_blank" title="<?php echo $_SERVER['WEB_NAME']; ?>首页" hidefocus="true" onfocus="this.blur();"><?php echo $_SERVER['WEB_NAME']; ?>首页</a></span>
        <span class="split">|</span>
        <span><a href="/login.html" class="registerNew" title="登录" hidefocus="true" onfocus="this.blur();">登录</a></span>
    </div>
    <div style="clear:both;"></div>
		</div>
     <div class="reg-wrapper2">
		<form id="regform" class="form-horizontal" action="" method="post">
		<?php if ($fromqq){ ?>
		<div class="control-group">
		    <label class="control-label" for="username">QQ头像</label>
		    <div class="controls" >		       
		       <img alt="" src="<?php echo $lastdata['pic']; ?>"> 
		       <span style="font-size: 18px;font-weight: bold;color: gray;">[QQ帐号关联注册]</span>
		    </div>
		</div>
		<?php } ?>
		  <div class="control-group">
		    <label class="control-label" for="username">用户名</label>
		    <div class="controls" >
		       <?php echo $user->text('un'); ?>
		      <span class="maroon">*</span><span class="help-inline">长度为6~16位字符，可以为“数字/字母/中划线/下划线”组成</span>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="password">设置密码</label>
		    <div class="controls">
		      <?php echo $user->password('pwd'); ?>
		      <span class="maroon">*</span><span class="help-inline">长度为6~16位字符</span>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="repassword">确认密码</label>
		    <div class="controls">
		      <?php echo $user->password('repwd'); ?>
		     <?php echo Session::flush('cperr'); ?>
		    </div>
		  </div>
           <div class="control-group">
		    <label class="control-label" for="phone">所在区域</label>
		    <div class="controls">
		     <?php echo $user->mulselect('chinaarea',array('l_sheng','l_shi','l_xianqu')); ?>
		      <span class="maroon">*</span><span class="help-inline"></span>
		    </div>
		  </div>
           <div class="control-group">
		    <label class="control-label" for="phone">联系人</label>
		    <div class="controls">
		     <?php echo $user->text('lxr'); ?>
		      <span class="maroon">*</span><span class="help-inline"></span>
		    </div>
		  </div>
            <div class="control-group">
		    <label class="control-label" for="phone">手机</label>
		    <div class="controls">
		     <?php echo $user->text('telephone'); ?>
		      <span class="maroon">*</span><span class="help-inline">请输入正确的手机号码</span>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="email">邮箱</label>
		    <div class="controls">
		      <?php echo $user->email('email'); ?>
		      <!-- <span class="maroon">*</span><span class="help-inline">邮箱将与支付及优惠相关，请填写正确的邮箱</span> -->
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="qq">QQ</label>
		    <div class="controls">
		      <?php echo $user->text('qq'); ?>
		    </div>
		  </div>
		  

		  <div class="control-group">
		    <label class="control-label" for="randcode">验证码</label>
		    <div class="controls">
		     <?php echo $user->vercode('codearea',60,30,'value="" class="base_input code"'); ?>
		    
		       <span id="codearea"></span>
		    </div>
		  </div>
		  <div class="control-group">
		  	<div class="controls">
                <button type="button" class="btn-register" onclick="registerUser()"></button>
		  	</div>
		  	</div>
		  </div>
		</form>
		<div id="ft">Copyright(c)2012-<?php echo date('Y'); ?> <?php echo $_SERVER['WEB_NAME']; ?> All Rights Reserved </div>
     </div>
     <!-- =========  -->
    <!-- 
	<div class="overlay" style="display: block; "></div>
	<div id="reg-select" style="display: block; ">
		<div class="overlay-cont">
			<div id="type1" class="reg-type">
				<h1>我还没有公众号</h1>
				<a target="_blank" href="http://mp.weixin.qq.com/" class="sel-btn">
					前往公众平台申请
				</a>
				<p>说明：公众号申请后，需要一星期才能打开开发模式。只有开发模式开启才能使用<?php echo $_SERVER['WEB_NAME']; ?>的智能服务；</p>
			</div>
			<div class="sep"></div>
			<div id="type2" class="reg-type">
				<h1>我已有公众号了</h1>
				<a id="reg-now" href="javascript:;" class="sel-btn">
					注册<?php echo $_SERVER['WEB_NAME']; ?>账号
				</a>
				<p>说明：请确认你的公众账号资料已填写完整，并具有【开发模式】的高级功能；</p>
			</div>
		</div>
	</div>
 -->
	<script type="text/javascript">
	$(function(){
		$("#reg-now").click(function(){
			$('.overlay').hide();
			$('#reg-select').hide();
			$('#username').focus();
		});
	});

	function registerUser(){  
		$('.help-inline').remove();
		$('.maroon').css('display','none')
		$('#regform').validate(function(m){
		    if(m.length>0){
		        for(var i=0;i<m.length;i++){
		            //m[i].e为验证错误的表单元素
		            //m[i].m该单元的错误信息（非空错误为false，其他为信息数组）
		 			var ntip = $('<span class="help-inline" style="color:red">'+(m[i].m===false?'该项内容不能为空':m[i].m.join(','))+'</span>');
		            $(m[i].e).after(ntip.show());
		            $(m[i].e).one('blur',function(){
		            	ntip.remove();
		            });
		        }
		    }else{
		    	if(checkname($('#userun').val())){
		    		$('form').submit();
		    	}else{
		    		tusi('用户名格式不合法');
		    	}
		        
		    }
		});
	}
	
	function checkname(str){
		  return str.match(/^([\u4e00-\u9fa5]|[\ufe30-\uffa0]|[A-Za-z0-9_])*$/);
	}
</script>
</body>
</html>
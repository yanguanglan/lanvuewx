<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/reset.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/common2.css?2013-12-18-1" media="all" />
<title>销售管理</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Keywords" content="微盟、微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" />
        <meta name="Description" content="微盟，国内最大的微信公众智能服务平台，微盟八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
        <style>
            img{ width:100%!important;}
        </style>
    </head>
    
<body onselectstart="return true;" ondragstart="return false;">
        
	
		<style>
			#book_new, #book_list{
				display:none;
			}
			#book_new.on, #book_list.on{
				display:inherit;
			}
			.list_book{
				border-radius:0;
				border:0;
				background:#f2f4f3;
			}
			.list_book dt{
				background:#fff;
				line-height: 35px;
				text-align:center;
			}
			.list_book dt div:first-of-type{
				margin-right:10px; 
			}
			.list_book dt div a{
				display:block;
				height:100%;
				background:#777777;
				color:#fff;
			}
			.book_list {
				border:0!important;
			}
			#nav_contact{
				border:5px 5px 0 0;
				overflow: hidden;
			}
			#nav_contact a{
				color:#000;
				display:block;
				text-align:center;
			}
			#nav_contact div:first-of-type{
				margin-right:10px;
			}
			#nav_contact div{
				line-height:35px;
				border-radius:5px 5px 0 0;
				background:#f2f4f3;
				overflow:hidden;
			}
			#nav_contact div a.on{
				color:#fff;
				background-color:#777777;
			}
		</style>
		<div class="body">

			<section class="p_10">
				<nav id="nav_contact">
					<dt class="box">
						<div><a id="book_new_a" href="javascript:$('#book_list, #book_list_a, #book_new, #book_new_a').toggleClass('on');" class="">售前客服</a></div>
						<div><a id="book_list_a" href="javascript:$('#book_list, #book_list_a, #book_new, #book_new_a').toggleClass('on');" class="on">售后客服</a></div>
					</dt>
				</nav>
				<div id="book_new" class="on">
					<dl class="list_book">
						<ul class="list_contact">
						<?php $__i=0; foreach ((array)$sqres as $r) { $__i++; ?>
							<li class="tbox">
								<div><img src="<?php echo $r->pic; ?>" style="width: 60px!important;"></div>
								<div>
									<p><?php echo $r->name; ?></p>
									<div><?php echo $r->ld; ?></div>
									<p><a href="tel:<?php echo $r->tel; ?>"><?php echo $r->tel; ?></a></p>
								</div>
							</li>
						<?php } ?>
						</ul>
					</dl>
				</div>
				<div id="book_list" class="">
					<dl class="list_book">
						<ul class="list_contact">
						<?php $__i=0; foreach ((array)$shres as $r) { $__i++; ?>
							<li class="tbox">
								<div><img src="<?php echo $r->pic; ?>" style="width: 60px!important;"></div>
								<div>
									<p><?php echo $r->name; ?></p>
									<div><?php echo $r->ld; ?></div>
									<p><a href="tel:<?php echo $r->tel; ?>"><?php echo $r->tel; ?></a></p>
								</div>
							</li>
						<?php } ?>
						</ul>
					</dl>
				</div>
			<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://<?php echo $_SERVER['WEI_URL']; ?>" style="color: #5e5e5e;font-size: 12px;">@<?php echo $_SERVER['WEB_NAME']; ?>提供技术支持</a></span>
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
			</section>
			<footer class="nav_footer">
				<ul class="box">
					<li><a href="javascript:history.go(-1);">返回</a></li>
					<li><a href="javascript:history.go(1);">前进</a></li>
					<li><a href="/weiweb/<?php echo $wid; ?>/">首页</a></li>
					<li><a href="javascript:location.reload();">刷新</a></li>
				</ul>
			</footer>
		</div>
	
        		<div mark="stat_code" style="width:0px; height:0px; display:none;">
					</div>
	
</body>
</html>
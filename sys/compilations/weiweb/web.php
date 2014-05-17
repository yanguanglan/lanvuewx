<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="微信">

<!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
<link type="text/css" rel="stylesheet" href="/res/wz/style/awesome.css" media="all" />
<link type="text/css" rel="stylesheet" href="/res/wz/style/snower.css" media="all" />
<link type="text/css" rel="stylesheet" href="/res/wz/style/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="/res/wz/style/reset.css" media="all" />
<?php if ($dhtid==1){ ?>
<link rel="stylesheet" type="text/css" href="/res/wz/style/home-menu-1.css" media="all" />
<?php }elseif ($dhtid==2){ ?>
<link rel="stylesheet" type="text/css" href="/res/wz/style/home-menu-2.css" media="all" />
<?php }elseif ($dhtid==3){ ?>
<link rel="stylesheet" type="text/css" href="/res/wz/style/home-menu-3.css" media="all" />
<?php }elseif ($dhtid==4){ ?>
<link rel="stylesheet" type="text/css" href="/res/wz/style/home-menu-4.css" media="all" />
<?php }elseif ($dhtid==5){ ?>
<link rel="stylesheet" type="text/css" href="/res/wz/style/home-menu-5.css" media="all" />
<?php }elseif ($dhtid==6){ ?>
<link rel="stylesheet" type="text/css" href="/res/wz/style/home-menu-6.css" media="all" />
<?php }elseif ($dhtid==7){ ?>
<link rel="stylesheet" type="text/css" href="/res/wz/style/home-menu-7.css" media="all" />
<?php } ?>


<link type="text/css" rel="stylesheet" href="/res/wz/style/list.css" />
<script type="text/javascript" src="/res/wz/js/maivl.js"></script>
<script type="text/javascript" src="/res/wz/js/zepto.js"></script>
<!--下面是幻灯拉全屏
--><script type="text/javascript" src="/res/wz/js/swipe.js"></script>
<title><?php echo $m->name; ?></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<style type="text/css">
</style>
<?php if ($dhtdb->dhstatus==1){ ?>
<header>
        <div class="snower">
            <script type="text/javascript"><?php echo $dhtdb->dhtext;?></script>
            <script type="text/javascript" src="/res/wz/js/snower1.js"></script>
        </div>
    </header>
<?php } ?>
<script type="text/javascript" src="/res/swipe.js"></script>
<script type="text/javascript">
$(function(){
	$('table').attr("cellpadding","0").attr("cellspacing","0");
	$('[fixed="fixed"]').css('position','fixed');
	resize();
	$(window).resize(function(){
		resize();
	});
	$('.add_qq_more').each(function(){
		var tourl = $.trim($(this).attr('toto'));
		if(tourl ==''){
			tourl = 'javascript:;'
		}
		if(tourl.indexOf(':')==-1){
			tourl = tourl+'.html';
		}
		if(tourl !=''){
			if(tourl.indexOf('tel')!==0){
				if(tourl.indexOf('?')>0){
					tourl = tourl + '&wxid=<?php echo Session::get('wxid'); ?>#mp.weixin.qq.com';
				}else{
					tourl = tourl + '#mp.weixin.qq.com';
				}
				
			}
			if($(this).is('a')){
				$(this).attr('href',tourl);
			}else if($(this).find('a').size()>0){
				$(this).find('a').each(function(){
					if($.trim($(this).attr('href')).indexOf('http')==-1){
						$(this).attr('href',tourl);
					}
				});
			}else{
				$(this).wrap('<a href="'+tourl+'"></a>');
			}			
		}
	});
	if($('.mainpicarea').is('div')){
		var tplth = $('.mainpicarea').find('td').length;
		$('#ppoool').append('<li class="on" style="margin-left:5px;"></li>');
		for(var i=1;i<tplth;i++){
			$('#ppoool').append('<li style="margin-left:5px;"></li>');
		}
		$('.mainpicarea').qswipe({ stime:3600});
		$('.mainpicarea').on('dragok',function(e,msg){
			if((msg+'').indexOf('.')>0){
				msg = 0;
			}
			$('#ppoool').find('li').removeClass('on');
			$('#ppoool').find('li').eq(msg).addClass('on');
		});
		
	}
	

});
function resize(){
	var ww = $(window).width();
	$('.picshowtop,.mainpicshow').css('width',ww+'px');
	$('#tpdhtr').children('td').css('width',ww+'px');
	$('#tpdhtr').children('td').find('img').css('width',ww+'px');
	$('img').each(function(){
		var pw = $(this).parent().width();
		var ppw = $(this).parent().parent().width();
		if($(this).width()>ppw){
			$(this).width(ppw);
		}
	});
}
</script>
<style type="text/css">
.mainpicshow{
height: <?php echo $m->tpdhh; ?>px;
overflow: hidden;
}
.mainpicarea{
height: <?php echo $m->tpdhh; ?>px;
}
.mainpicarea table,.mainpicarea tr,.mainpicarea td{
border: none;
border-image-width:0px;
}
.mainpicarea img{
height: <?php echo $m->tpdhh; ?>px;
}
#ppoool{
    height:20px;
    position: relative;
    z-index:10;
    margin-top:0px;
    text-align:right;
    padding-right:15px;
    background-color:rgba(0,0,0,0.3);
}
#ppoool>li{
    display:inline-block;
    margin:5px 0;
    width:8px;
    height:8px;
    background-color:#757575;
    border-radius: 8px;
}
#ppoool>li.on{
    background-color:#ffffff;
}
</style>
</head>
<body>
<?php if (trim($m->bgpic)!=''){ ?>
<div style="top:0px;left:0px;width: 100%;height: 100%;position: fixed;z-index:-999;background-image: url('<?php echo $m->bgpic; ?>');background-size:100%,100%;">

</div>
<?php } ?>
<?php if (trim($m->tpdh)!=''){ ?>
<div class="picshowtop" style="position: relative;">
<?php echo str_replace('<table', '<table cellpadding="0" cellspacing="0"', $m->tpdh); ?>
<div style="position: absolute;width: 100%;height: 20px;bottom: 0px;" id="ppooind">
<ol id="ppoool">
    
</ol>

</div>
</div>
<?php } ?>
<div class="mainshowtop">
<?php echo $m->htm; ?>
</div><!--
选择导般条模板-->
<?php if ($dhtdb->status==1){ ?>
<?php if ($dhtid==1){ ?>
<!--
导航菜单
   后台设置的快捷菜单
-->
<script>
		window.addEventListener("DOMContentLoaded", function(){
			var nav = document.querySelectorAll(".nav_9")[0];
			
			var evts = {
				handleEvent: function(evt){
					if("A" == evt.target.nodeName){
						evt.target.classList.toggle("active");
					}
				}
			}
			nav.addEventListener("mousedown", evts, false);
			nav.addEventListener("mouseup", evts, false);
			nav.addEventListener("touchstart", evts, false);
			nav.addEventListener("touchend", evts, false);
		});
</script>
<div class="top_bar footer_bar">
			<section>
	<div class="nav_9">
	<ul class="box">
	<li>
	<a href="tel:<?php echo $dhtdb->tel;?>" >
	<p class="icon-phone1"></p>
	<span>一键拨号</span>
	</a>
	</li>
	<li>
	<a href="<?php echo $dhtdb->daohang;?>">
	<p class="icon-location-arrow"></p>
	<span>一键导航</span>
	</a>
	</li>
	<li>
	<a href="<?php echo $dhtdb->home;?>?wxref=mp.weixin.qq.com" class="home">
	</a>
	</li>
	<li>
	<a href="<?php echo $dhtdb->liuyan;?>&wxid=<?php echo $wxid;?>&wxref=mp.weixin.qq.com">
	<p class="icon-list-ul"></p>
	<span>在线留言</span>
	</a>
	</li>
	<li>
	<a href="<?php echo $dhtdb->about;?>">
	<p class="icon-bar-chart"></p>
	<span>关于我们</span>
	</a>
	</li>
	</ul>
	</div>
	</section>
</div>
<?php }elseif ($dhtid==2){ ?>
<!--
导航菜单
   后台设置的快捷菜单
-->

<div class="top_bar footer_bar">
			<section>
					<div class="nav_7">
<ul class="box">
<li>
	<a href="<?php echo $dhtdb->home;?>?wxref=mp.weixin.qq.com">
	<span class="icon-home">返回首页</span>
</a>
</li>
		<li>
<a href="tel:<?php echo $dhtdb->tel;?>">
<span class="icon-phone1">一键拨号</span>
</a>
</li>
<li>
	<a href="<?php echo $dhtdb->daohang;?>">
	<span class="icon-location-arrow">一键导航</span>
</a>
</li>
	<li>
<!--<a href="<?php echo $dhtdb->liuyan;?>&wxid=<?php echo $wxid;?>&wxref=mp.weixin.qq.com">
-->
<a href="javascript:;" onclick="this.classList.toggle('on');" ><span class="icon-list-ul">更多</span></a>
<dl>
<dd>
			<a href="<?php echo $dhtdb->liuyan;?>&wxid=<?php echo $wxid;?>&wxref=mp.weixin.qq.com">
	<span class="icon-reorder">在线留言</span>
</a>
</dd>
<dd>
			<a href="<?php echo $dhtdb->about;?>">
	<span class="icon-user">关于我们</span>
</a>
</dd>

				</dl>
</li>
			</ul>
			</div>
	</section>
</div>
<?php }elseif ($dhtid==3){ ?>
<!--
导航菜单
   后台设置的快捷菜单
-->
	<div class="top_bar footer_bar" style="-webkit-transform:translate3d(0,0,0)">
			<nav>
				<ul class="top_menu">
					<li><a href="<?php echo $dhtdb->home;?>?wxref=mp.weixin.qq.com"><span></span></a></li>
																<li>
															<a href="tel:<?php echo $dhtdb->tel;?>">
									<span class="icon-phone1"></span><label class="homemenu_text">一键拨号</label>
								</a>
													</li>
											<li>
															<a href="<?php echo $dhtdb->daohang;?>">
									<span class="icon-location-arrow"></span><label class="homemenu_text">一键导航</label>
								</a>
													</li>
																<li onclick="$('#menu_list').toggleClass('hidden');">
							<a onclick="return false;">
								<span class="icon-list-ul"></span><label class="homemenu_text">更多</label>
							</a>
							<ul id="menu_list" class="menu_font hidden" onclick="$('#menu_list').toggleClass('hidden');">
																		<li>
																					<a style="color:#FFFFFF;" href="<?php echo $dhtdb->liuyan;?>&wxid=<?php echo $wxid;?>&wxref=mp.weixin.qq.com" class="icon-reorder">
												在线留言											</a>
																			</li >
																	<li>
																					<a style="color:#FFFFFF;" href="<?php echo $dhtdb->about;?>" class="icon-user"> 关于我们											</a>
																			</li>
															</ul>
						</li>
									</ul>
			</nav>
		</div>
<?php }elseif ($dhtid==4){ ?>
<!--
导航菜单
   后台设置的快捷菜单
-->
	<section>
			<div class="plug-div model1">
				<div id="plug-phone" class="plug-phone">
											<div>
															<a href="tel:<?php echo $dhtdb->tel;?>" class="icon-phone1">
									<label>一键拨号</label>
								</a>
													</div>
											<div>
															<a href="<?php echo $dhtdb->daohang;?>" class="icon-location-arrow">
									<label>一键导航</label>
								</a>
													</div>
													<div>
															<a href="<?php echo $dhtdb->home;?>?wxref=mp.weixin.qq.com"" class="icon-home">
									<label>返回首页</label>
								</a>
													</div>
											<div>
															<a href="<?php echo $dhtdb->liuyan;?>&wxid=<?php echo $wxid;?>&wxref=mp.weixin.qq.com" class="icon-reorder">
									<label>在线留言</label>
								</a>
													</div>
										<div>
										<!--<?php echo $dhtdb->about;?>
						--><a href="<?php echo $dhtdb->about;?>" class="icon-user"><label>关于我们</label></a>
					</div>
				</div>
		</section>
<?php }elseif ($dhtid==5){ ?>
<!--
导航菜单
   后台设置的快捷菜单
-->
					<script>
		window.addEventListener("DOMContentLoaded", function(){
			var nav = document.querySelectorAll(".nav_8")[0];
			
			var evts = {
				handleEvent: function(evt){
					if("A" == evt.target.nodeName){
						evt.target.classList.toggle("active");
					}
				}
			}
			nav.addEventListener("mousedown", evts, false);
			nav.addEventListener("mouseup", evts, false);
			nav.addEventListener("touchstart", evts, false);
			nav.addEventListener("touchend", evts, false);
		});
		</script>
		<div class="top_bar footer_bar">
			<section>
					<div class="nav_8">
						<ul class="box">
							
							<li>
																	<a href="tel:<?php echo $dhtdb->tel;?>">
										<p class="icon-phone1"></p>
										<span>一键拨号</span>
									</a>
															</li>
								
							<li>
																	<a href="<?php echo $dhtdb->daohang;?>">
										<p class="icon-location-arrow"></p>
										<span>一键导航</span>
									</a>
															</li>							
							
							<li>
																	<a href="<?php echo $dhtdb->home;?>?wxref=mp.weixin.qq.com">
										<p class="icon-home"></p>
										<span>返回首页</span>
									</a>
															</li>
							
							
							<li>
																	<a href="<?php echo $dhtdb->liuyan;?>&wxid=<?php echo $wxid;?>&wxref=mp.weixin.qq.com" >
										<p class="icon-reorder"></p>
										<span>在线留言本</span>
									</a>
															</li>
							
							<li>
																	<a href="<?php echo $dhtdb->about;?>" >
										<p class="icon-user"></p>
										<span>关于我们</span>
									</a>
															</li>
													</ul>
					</div>
			</section>
		</div>
<?php }elseif ($dhtid==6){ ?>
<!--
导航菜单
   后台设置的快捷菜单
-->
							<script>
			window.addEventListener("DOMContentLoaded", function(){
				var nav = document.querySelectorAll(".nav_10")[0];
				
				var evts = {
					handleEvent: function(evt){
						if("A" == evt.target.nodeName){
							evt.target.classList.toggle("active");
						}
					}
				}
				nav.addEventListener("mousedown", evts, false);
				nav.addEventListener("mouseup", evts, false);
				nav.addEventListener("touchstart", evts, false);
				nav.addEventListener("touchend", evts, false);
			});
		</script>
		<div class="top_bar footer_bar">
			<section>
					<div class="nav_10">
						<ul class="box">
							
							<li>
																	<a href="tel:<?php echo $dhtdb->tel;?>">
										<p class="icon-phone1"></p>
										<span>一键拨号</span>
									</a>
															</li>
								
							<li>
																	<a href="<?php echo $dhtdb->daohang;?>">
										<p class="icon-location-arrow"></p>
										<span>一键导航</span>
									</a>
															</li>							
							
							<li>
																	<a href="<?php echo $dhtdb->home;?>?wxref=mp.weixin.qq.com">
										<p class="icon-home"></p>
										<span>返回首页</span>
									</a>
															</li>
							
							
							<li>
																	<a href="<?php echo $dhtdb->liuyan;?>&wxid=<?php echo $wxid;?>&wxref=mp.weixin.qq.com" >
										<p class="icon-reorder"></p>
										<span>在线留言本</span>
									</a>
															</li>
							
							<li>
																	<a href="<?php echo $dhtdb->about;?>" >
										<p class="icon-user"></p>
										<span>关于我们</span>
									</a>
															</li>
													</ul>
					</div>
			</section>
		</div>
<?php }elseif ($dhtid==7){ ?>

<?php } ?>
<?php } ?>
<!--
选择导般条模板-->
<?php if (trim($m->bgpic)==''){ ?>
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
<?php } ?>
</body>
<script type="text/javascript">
</script>

</html>
<!DOCTYPE html>
<!-- saved from url=(0072)http://www.weimob.com/Webalbums/PictureList?pid=22423&bid=41142&aid=9059 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
<title><?php echo $list->name; ?></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" type="text/css" href="/res/wxc/photo.css" media="all">
<link rel="stylesheet" type="text/css" href="/res/wxc/photoswipe.css" media="all">
<script type="text/javascript" src="/res/wxc/jquery_imagesloaded.js"></script>
<script type="text/javascript" src="/res/wxc/jquery_wookmark_min.js"></script>
<script type="text/javascript" src="/res/wxc/klass_min.js"></script>
<script type="text/javascript" src="/res/wxc/code_photoswipe_min.js"></script>
<script type="text/javascript" src="/res/wxc/jquery_lazyload.js"></script>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <!-- Mobile Devices Support @begin -->
            
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- Mobile Devices Support @end -->
        <link rel="shortcut icon" href="http://stc.weimob.com/img/favicon.ico">
        <style>
            img{ width:100%!important;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;" id="photo">
        

	<script type="text/javascript">
		(function(window){
			document.addEventListener('DOMContentLoaded', function(){
				var PhotoSwipe = window.Code.PhotoSwipe;
				var options = { loop:false},
				instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
			}, false);
			})(window);
	</script>
	<div class="body">
		<div class="qiandaobanner">
			<a href="javascript:;">
				<img src="<?php echo $set->headpic; ?>" alt="" style="max-height:200px;">
			</a>
		</div>
		<div id="main" role="main" style="height: 219px;">
		      <ul id="Gallery" class="gallery">
			  	<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
			  	<li style="position: absolute; left: 14px; top: 0px; display: list-item;">
		        	<a href="<?php echo $r->pic; ?>">
		        		<img src="<?php echo $r->pic; ?>"  alt="<?php echo $r->title; ?>" >
		        	</a>
		        </li>
		        <?php } ?>
		      </ul>
		</div>
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
<!--下面是瀑布流js-->
<script type="text/javascript">
    (function ($){
      $('#Gallery').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 4, // Optional, the distance between grid items
          itemWidth: 150 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#Gallery li');
        // Call the layout function.
        handler.wookmark(options);
      });
    })(jQuery);
  </script>
        		<div mark="stat_code" style="width:0px; height:0px; display:none;">
					</div>
	
</body></html>
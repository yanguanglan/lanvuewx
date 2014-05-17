<!DOCTYPE html>
<html>
    <head>
    <title>微酒店</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
    <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/hotel/hotels.css" media="all" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
        <script type="text/javascript" src="<?php echo $JS; ?>mwm/swipe.js"></script>
        <style>
            img{ width:100%!important;}
        </style>
    </head>
        <body id="hotels" ondragstart="return false;" onselectstart="return false;" >
<section class="body">
	<div class="banner">
	<?php if (trim($r->ptxt1)!=''){ ?>
		<div id="imgs_box" class="box_swipe">
			<ul>
			<li><a href="<?php echo hrefto($r->phref1); ?>"><img src="<?php echo $r->psrc1; ?>" alt="<?php echo $r->ptxt1; ?>" style="width:100%;" /></a></li>
			<?php if (trim($r->ptxt2)!=''){ ?><li><a href="<?php echo hrefto($r->phref2); ?>"><img src="<?php echo $r->psrc2; ?>" alt="<?php echo $r->ptxt2; ?>" style="width:100%;" /></a></li><?php } ?>
			<?php if (trim($r->ptxt3)!=''){ ?><li><a href="<?php echo hrefto($r->phref3); ?>"><img src="<?php echo $r->psrc3; ?>" alt="<?php echo $r->ptxt3; ?>" style="width:100%;" /></a></li><?php } ?>
			<?php if (trim($r->ptxt4)!=''){ ?><li><a href="<?php echo hrefto($r->phref4); ?>"><img src="<?php echo $r->psrc4; ?>" alt="<?php echo $r->ptxt4; ?>" style="width:100%;" /></a></li><?php } ?>
			<?php if (trim($r->ptxt5)!=''){ ?><li><a href="<?php echo hrefto($r->phref5); ?>"><img src="<?php echo $r->psrc5; ?>" alt="<?php echo $r->ptxt5; ?>" style="width:100%;" /></a></li><?php } ?>				
			</ul>
			<ol id="">
				<li class="on"></li>
				<?php if (trim($r->ptxt2)!=''){ ?><li></li><?php } ?>
				<?php if (trim($r->ptxt3)!=''){ ?><li></li><?php } ?>
				<?php if (trim($r->ptxt4)!=''){ ?><li></li><?php } ?>
				<?php if (trim($r->ptxt5)!=''){ ?><li></li><?php } ?>
			</ol>
		</div>
	<?php } ?>
	</div>
	<div class="cardexplain">
			
			<ul class="round">
			<li>
					<h2>房间类型</h2>
				
					<div class="text"><?php echo $r->typ; ?></div>
			
			
				</li>
				<li>
					<h2>相关说明</h2>
					<div class="text"><?php echo $r->des; ?></div>
					
			
			
				</li>
			
				<li>
					<h2>配套设施</h2>
					
					<div class="text"><?php echo $r->msg; ?></div>
			
				</li>
				<li class="tel"><a href="tel:<?php echo $h->tel; ?>"><span><?php echo $h->tel; ?> 电话预订</span></a></li>
			</ul>

			<ul class="round roundyellow">
				<li class="userinfo">
					<a href="roomdetail-<?php echo $h->id; ?>-<?php echo $r->id; ?>.html">
						<span>查看房间详情</span>
					</a>
				</li>
			</ul>

		  

	<ul class="round">
				<form action="javascript:void(0);" method="post" id="theform">
				<li class="title mb"><span class="none">请认真填写在线订单</span></li>
				<?php $__i=0; foreach ((array)$ddx as $dd) { $__i++; ?>
				<li class="nob">
					<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody><tr>
							<th><?php echo $dd->name; ?></th>
							<td><?php echo $dd->form; ?></td>
						</tr>
					</tbody></table>
				</li>
				<?php } ?>
				<li class="nob">
					<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
						<tr style="display:none;"><th>房间类型</th><td><input type="text"   value="<?php echo $dd->typ; ?>" name="micro_hotel_recordT08d9e827ffbba2efe4413cb064bbf847typ" id="micro_hotel_recordtyp" class="px"  required="required"/></td></tr>
						<tr>
							<th>原价</th>
							<td class="userinfo" id="price1">￥<?php echo $r->price1; ?></td>
						</tr>
					</tbody></table>
				</li>
				<li class="nob">
					<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody><tr>
							<th>现价</th>
							<td class="userinfo price" id="price2">￥<?php echo $r->price2; ?></td>
						</tr>
					</tbody></table>
				</li>
				<li class="nob">
					<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody><tr>
							<th>为你节省</th>
							<td class="userinfo price2" id="price3">￥<?php echo $r->price1-$r->price2; ?></td>
						</tr>
					</tbody></table>
				</li>
				</form>
			</ul>
			<div class="footReturn">
				<a id="showcard" class="submit" href="javascript:void(0);">提交订单</a>
				<div class="window" id="windowcenter">
					<div id="title" class="wtitle">提示<span class="close" id="alertclose"></span></div>
					<div class="content">
						<div id="txt"></div>
					</div>
				</div>
			</div>
		</div>
	<div class="plugback">
		<a href="javascript:history.back(-1)">
			<div class="plugbg themeStyle">
				<span class="plugback">
				</span>
			</div>
		</a>
	</div>
</section>
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
     <script>
    	$(document).ready(function(){
    		$(function(){
				new Swipe(document.getElementById('imgs_box'), {
					speed:500,
					//auto:3000,
					callback: function(index, elem){
						var lis = $('#imgs_box').children("ol").children();
						lis.removeClass("on").eq(index).addClass("on");
					}
				}); 
			});
    		
    		$('#showcard').click(function(){
    			var ctj = true;
    			$('#theform').find('select,input[type="text"]').each(function(){
    				if($.trim($(this).val()=='')){
    					ctj = false;
    				}
    			});

    			$.ajax({
    			url:'ydok-<?php echo $h->id; ?>-<?php echo $r->id; ?>.html',
    			data:$('#theform').serialize(),
    			type:'POST',
    			success:function(m){
    				if(m=='ok'){
    					$('#txt').text('提交成功');
    					$('#windowcenter').slideDown();
    				}if(m=='rep'){
    					$('#txt').text('请勿重复提交');
    					$('#windowcenter').slideDown();
    				}
    				setTimeout(function(){
    					$('#windowcenter').slideUp();
    				},1000);
    			}
    			});
    		});
    	});
   	</script>        		
</body>        		
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<base target="mainFrame" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/album.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内最大的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<script type="text/javascript" src="/res/mbaudio/inc/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/res/mbaudio/inc/jquery.mb.miniPlayer.js"></script>
<link rel="stylesheet" type="text/css" href="/uploadify/uploadify.css">
<script type="text/javascript" src="/uploadify/jquery.uploadify.js"></script>
<link rel="stylesheet" type="text/css" href="/res/mbaudio/css/miniplayer.css" title="style" media="screen"/>


<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
	<div id="main">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<div class="span12">
								<h3><i class="icon-cog"></i>添加全景图</h3>
							</div>
						</div>
						<div class="box-content">
							<form action="" method="post" class="form-horizontal form-validate"><?php echo tk();  echo $full_view->hidden('id'); ?>
								<div class="control-group">
									<label for="title" class="control-label">全景图标题：</label>
									<div class="controls">
										 <?php echo $full_view->text('name','class="input-large"  required="required"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">尽量简单，不要超过20字</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-前：</label>
									<div class="controls">
									<img class="thumb_img" src="/res/wfc/qian.jpg" id="pic_qian" style="max-height:100px;" />
									<input type="hidden" value = "/res/wfc/qian.jpg" name="BgEEO1BHClppFF4ET2JGDwFpF1kAXw==" id="360_full_viewpic_qian" />									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_qian','micro_estate_type_full_viewpic_qian');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-后：</label>
									<div class="controls">
									<img class="thumb_img" src="/res/wfc/hou.jpg" id="pic_hou" style="max-height:100px;" />
									<input type="hidden" value = "/res/wfc/hou.jpg" name="BgEEO1BHClppFF4ET2JGDwFpDl8U" id="360_full_viewpic_hou" />									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_hou','micro_estate_type_full_viewpic_hou');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-左：</label>
									<div class="controls">
									<img class="thumb_img" src="/res/wfc/zuo.jpg" id="pic_zuo" style="max-height:100px;" />
									<input type="hidden" value = "/res/wfc/zuo.jpg" name="BgEEO1BHClppFF4ET2JGDwFpHEUO" id="360_full_viewpic_zuo" />									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_zuo','micro_estate_type_full_viewpic_zuo');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-右：</label>
									<div class="controls">
									<img class="thumb_img" src="/res/wfc/you.jpg" id="pic_you" style="max-height:100px;" />
									<input type="hidden" value = "/res/wfc/you.jpg" name="BgEEO1BHClppFF4ET2JGDwFpH18U" id="360_full_viewpic_you" />									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_you','micro_estate_type_full_viewpic_you');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-上：</label>
									<div class="controls">
									<img class="thumb_img" src="/res/wfc/shang.jpg" id="pic_shang" style="max-height:100px;" />
									<input type="hidden" value = "/res/wfc/shang.jpg" name="BgEEO1BHClppFF4ET2JGDwFpFVgAX1M=" id="360_full_viewpic_shang" />									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_shang','micro_estate_type_full_viewpic_shang');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-下：</label>
									<div class="controls">
									<img class="thumb_img" src="/res/wfc/xia.jpg" id="pic_xia" style="max-height:100px;" />
									<input type="hidden" value = "/res/wfc/xia.jpg" name="BgEEO1BHClppFF4ET2JGDwFpHlkA" id="360_full_viewpic_xia" />									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_xia','micro_estate_type_full_viewpic_xia');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
                                    <label class="control-label" for="brief">全景图描述</label>
                                    <div class="controls">
                                    <?php echo $full_view->textarea('ms','class="input-large"  style="height:80px;width:380px;"'); ?>		
                                        <span class="help-block">150文字以内</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="brief">全景图背景音乐</label>
                                    <div class="controls">
                                    <table>
                                    <tr>
                                     <td class="audiotd"><a id="m1" class="audio { skin:'blue'}" href="" >......</a></td>
                                      <td><button id="file_upload-button" class="btn pl_add btn-primary"><span class="uploadify-button-text"><i class="icon-plus-sign"></i> 音乐</span></button></td>
                                    </tr>                                 
                                    
                                    </table>
                                    <input type="hidden" value = "" name="BgEEO1BHClppFF4ET2JbExFfBQ==" id="360_full_viewmusic" rel="music"/>                                    
                                    </div>
                                </div>
																<div class="control-group">
                                    <label for="picurl" class="control-label">链接地址：</label>
                                    <div class="controls" id="twfmpicarea">
										<?php echo Conf::$http_path; ?>qj/qj-<?php echo $full_view->id; ?>.html?wid=<?php echo $full_view->wid; ?>
										</div>
                                </div>
																
																<div class="form-actions">
									<button type="submit" id="bsubmit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
									<button type="button" class="btn" onclick="window.history.go(-1);">取消</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br/><br/><br/></body>
 
 
<script type="text/javascript" src="/js//comm.js"></script>
<script>
$(function(){
	$('#file_upload-button').uploadify({
        height        : 20,
        swf           : '/uploadify/uploadify.swf',
        uploader      : '/uploadify.html',
        width         : 70,
        multi         : true ,
        buttonText	  : '<span class="uploadify-button-text"><i class="icon-plus-sign"></i>上传音乐</span>',
        buttonClass   : 'btn pl_add btn-primary',
        onUploadSuccess    : function (a, b, c, d, e){
        	$('input[rel="music"]').val(b);
        	$('.audiotd').html('<a id="m1" class="audio { skin:\'blue\'}" href="'+b+'" >......</a>');
        	$(".audio").mb_miniPlayer({
    	        width:50,
    	        inLine:false
    	 	});
        }
    });
	
	 $(".audio").mb_miniPlayer({
	        width:50,
	        inLine:false
	 });
});
 
 
		window.document.onkeydown = function(e) {
			if ('' == document.activeElement.id) {
				var e=e || event;
　 				var currKey=e.keyCode || e.which || e.charCode;
				if (8 == currKey) {
					return false;
				}
			}
		};
	</script>
</html>
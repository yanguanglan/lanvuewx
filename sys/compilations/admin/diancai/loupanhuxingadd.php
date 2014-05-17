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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/uploadify_t.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内最大的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
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
								<h3><i class="icon-cog"></i>添加菜品</h3>
							</div>
						</div>
						<div class="box-content">
							<form action="" method="post" id="transform" class="form-horizontal form-validate"><?php echo tk();  echo $m->hidden('id'); ?>
								<div class="control-group">
									<label for="name" class="control-label">菜品名称：</label>
									<div class="controls">
									   <?php echo $m->text('name','class="input-large"  required="required"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">尽量简单，不要超过20字</span>
									</div>
								</div>
								<div class="control-group">
									<label for="category_id" class="control-label">选择销售门店：</label>
									<div class="controls">
										<?php echo $m->select($loupan,'zid','class="input-large"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">一定要选，没有请先添加分类</span>
									</div>
								</div>
								<div class="control-group">
									<label for="floor_num" class="control-label">简要描述：</label>
									<div class="controls">
										<?php echo $m->text('louceng','class="input-large"  required="required"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">描述菜品的味道，特色等</span>
									</div>
								</div>
								<div class="control-group">
									<label for="area" class="control-label">菜品价格：</label>
									<div class="controls">
										<?php echo $m->text('mianji','class="input-large"  required="required"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline"></span>
									</div>
								</div>
								<div class="control-group">
									<label for="sort" class="control-label">显示顺序：</label>
									<div class="controls">
										<?php echo $m->text('sort','class="input-large"  '); ?>		
										<span class="maroon">*</span>
										<span class="help-inline">数值越大越靠前</span>
									</div>
								</div>
					<!--			<div class="control-group">
									<label for="description" class="control-label">会员服务介绍：</label>
									<div class="controls">
									<?php //echo $m->textarea('jianjie','class="input-large" style="height:80px;width:380px;"'); ?>	
									</div>
								</div> -->
								<div class="control-group">
									<label for="prices" class="control-label">会员服务图片：</label>
									<?php echo $m->hidden('pic'); ?>
									<div class="controls">
										<div id="upimg_main">
											<div id="file_upload" class="uploadify"><button  id="file_upload-button" class="btn pl_add btn-primary" onclick="addmorepic();return false;"><i class="icon-plus-sign"></i>上传图片</button><span class="maroon">*</span><span class="help-inline">建议尺寸：宽720像素，高350像素</span></div><div id="file_upload-queue" class="uploadify-queue"></div>
											<ul class="ipost-list ui-sortable" id="fileList">
											</ul><div id="file_upload_queue" class="uploadifyQueue">
											</div>
										</div>
									<span for="imagestexts[40829][]" class="help-block error valid" style=""></span><span for="imagestexts[67544][]" class="help-block error valid" style=""></span><span for="imagestexts[99277][]" class="help-block error valid" style=""></span></div>
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
<script type="text/javascript" src="<?php echo $JS; ?>/comm.js"></script>
<script type="text/template" id="picdemo">
<li class="imgbox" style="list-type:none">
<a class="item_close" href="javascript:void(0)" onclick="$(this).parent().remove();" title="删除">
</a>
<span class="item_box">
    <img src="" style="max-height:100%;">
</span>
<span class="item_input">
    <textarea class="bewrite" cols="3" rows="4" style="resize: none" placeholder="图片描述..." onfocus="$(this).parent().addClass('on');" onblur="$(this).parent().removeClass('on');">
    </textarea>
    <i class="shadow hc">
    </i>
</span>
</li>
</script>
<script>		
		//上传图片
		function addmorepic(){
			window.piccbk = function(m,n){
				addoneing(m,n);
				window.piccbk = null;
			}
			window.curpic = null;
			openpicset();	
		}
		function addoneing(m,n){
			n = n.split(',');
			n = n[0];
			$('#fileList').append($('#picdemo').html());
			var li = $('#fileList').children('li:last');
			li.find('img').attr('src',m);
			li.find('textarea').val(n);
		}
		$(function(){
			$('#transform').submit(function(){
				var pics = [];
				$('#fileList').find('li').each(function(){
					var msg = {};
					var img = $(this).find('img');
					msg.src = img.attr('src');
					msg.txt = $.trim($(this).find('textarea').val());
					var w = img.width();
					var h = img.height();
					w = parseInt(450*w/h);
					msg.w = w;
					msg.h = 450;
					pics[pics.length] = msg;
				});
				$('#micro_diancai_typepic').val($.toJSON(pics));
			});
			var val = $('#micro_diancai_typepic').val();
			if($.trim(val)==''){
				val = '[]';
			}
			var data = $.evalJSON(val);
			for(var i=0;i<data.length;i++){
				var msg = data[i];
				addoneing(msg.src,msg.txt);
			}
		});
	</script>
<script type="text/javascript">


$(function(){
	 $("#bsubmit").submit(function(){
			var cansv= true;
			$(this).find('input[type="text"],select,textarea').filter('[required="required"]').each(function(){
				if($.trim($(this).val())==''){
					cansv = false;
					$(this).css('backgroundColor','yellow');
					$(this).one('focus',function(){
						$(this).css('backgroundColor','transparent');
					});
				}
			});
			if(!cansv){
				tusi('请将信息填写完整');
			}
	    	return cansv;
	    });
	
	
	
});
</script>
<script>
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
</html>�p
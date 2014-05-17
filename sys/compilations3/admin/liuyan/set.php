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
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内最大的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" type="text/css" href="/uploadify/uploadify.css">
<script type="text/javascript" src="/uploadify/jquery.uploadify.js"></script>
<script type="text/javascript" src="/uploadify/jquery.zclip.js"></script>
<script type="text/javascript" src="/uploadify/set.js"></script>
<script src="http://api.map.baidu.com/api?v=1.5&ak=1b0ace7dde0245f796844a06fb112734"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
<div id="main">
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <div class="span10">
                                <h3><i class="icon-edit"></i>留言板配置</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>
                        <div class="box-content">
                            <form action="" method="POST" class="form-horizontal form-validate" novalidate="novalidate"><?php echo tk();  echo $m->hidden('id'); ?>
                                <div class="control-group">
                                    <label for="wxname" class="control-label">触发关键字：</label>
                                    <div class="controls">
                                    <?php echo $m->text('gjz'); ?><span class="maroon">*</span><span class="help-inline">如有多个关键字请用空格隔开，用户输入此关键词将会触发此活动。</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="title">显示名称</label>
                                    <div class="controls">
                                    <?php echo $m->text('tit'); ?>
                                    </div>
                                </div>
                                <div class="control-group" up="up">
                                    <label for="picurl" class="control-label">图文封面：</label>
                                    <div class="controls" id="twfmpicarea">
										<img class="thumb_img" src="<?php echo $m->pic; ?>" style="max-height: 100px;">
                                        <?php echo $m->hidden('pic'); ?>
                                        <span class="help-inline"><button class="btn select_img" type="button">选择封面</button></span><br/><span class="help-inline">推荐大小为720x400</span>
                                    </div>
                                </div>
                                <div class="control-group" up="up">
                                    <label for="headpic" class="control-label">头部图片：</label>
                                    <div class="controls" id="twfmheadpicarea">
										<img class="thumb_img" src="<?php echo $m->headpic; ?>" style="max-height: 100px;">
                                        <?php echo $m->hidden('headpic'); ?>
                                        <span class="help-inline"><button class="btn select_img" type="button">选择封面</button></span><br/><span class="help-inline">填写图片外链地址，推荐大小为720x400</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="title">是否开放留言板</label>
                                    <div class="controls" style="vertical-align: middle;padding-top: 5px;">
                                        <?php echo $m->radio(array('0'=>'无需审核','1'=>'需要审核'),'isroomlistpic','style="margin-top:-2px;"'); ?>                                        
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="openid">管理员Openid</label>
                                    <div class="controls">
                                        <div class="input-append"><?php echo $m->text('adminid'); ?></div>
										<span class="help-inline">在留言板提交留言,然后在“留言列表”中找到自己的openid并在这里添加为管理</span>
                                    </div>
                                </div>
                                <!-- 
                                <div class="control-group">
                                    <label class="control-label" for="openid">管理员Openid</label>
                                    <div class="controls">
                                        <div class="input-append"><input type="text" name="adminopenid" id="openid"><button class="btn addopenid" type="button"><i class="icon-plus"></i>添加</button></div>
										<span class="help-inline">在留言板提交留言,然后在“留言列表”中找到自己的openid并在这里添加为管理</span>
                                        
                                        <ul class="unstyled margin-top10 openidlist" style="width:300px">
                                                                                        <li>oLKXFt_nd1c8f_G_e_jb_ZP4RRNI <input type="hidden" name="openidlist[]" value="oLKXFt_nd1c8f_G_e_jb_ZP4RRNI"> <a class="btn btn-mini pull-right del"><i class="icon-remove"></i></a> </li>
                                        </ul>
                                        <script type="text/javascript">
                                            $(function () {
                                                $("ul.openidlist").delegate("li a.del","click", function () {
                                                    $(this).parents("li").remove();
                                                });
                                                $("button.addopenid").click(function () { 
                                                    var $openid = $("#openid"), $openidval = $.trim($openid.val());
                                                   
                                                    if ($openidval.length == 0) {
                                                        G.ui.tips.info("请输入管理员Openid");
                                                    } else {
                                                        var tmp = '<li>'+$openidval+'<input type="hidden" name="openidlist[]" value="'+$openidval+'"/>  <a class="btn btn-mini pull-right del"><i class="icon-remove"></i></a> </li>';
                                                        $("ul.openidlist").append(tmp);
                                                    }
                                                })
                                            })
                                        </script>
                                    </div>
                                </div>
                                -->
                                   <div class="control-group">
                                    <label class="control-label" for="title">
                                        留言板外链地址</label>
                                    <div class="controls">
                                       <span cp="cp"><?php echo Conf::$http_path; ?>wly/ly.html?wid=<?php echo Session::get('wid'); ?></span>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
                                   <!-- <button type="button" class="btn" onclick="window.location='picture-text-repaly.html'">取消</button>
									 --> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
	//图片设置
	function setpic(imgid){
		window.piccbk = function(m){
			$('#'+imgid).find('img').attr('src',m);
			$('#'+imgid).find('input[type="hidden"]').val(m);
			window.piccbk = null;
		}
		window.curpic = null;
		openpicset();	
	} 
	function openpicset(){
		pophtml('<iframe src="../businessModule/wspicif.html" style="width:630px;height:470px;border:none;background-color: #dfdfdf;" width="630px" height="475px"></iframe>',670,510,true);
	}
</script>
<script type="text/javascript">

</script>
<br/><br/><br/>
</body>
</html>
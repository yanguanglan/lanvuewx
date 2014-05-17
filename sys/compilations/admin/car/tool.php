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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_switch.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
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
                            <div class="span10">
                                <h3><i class=" icon-external-link"></i>实用工具</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>



                        <div class="box-content">
                           
                                    <table class=" table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>工具名称</th>
                                               
                                                <th>状态</th>
                                            </tr>
                                        </thead>
                                        <tbody>
								                                            <tr>
                                                <td><span class="sn music">保险计算</span></td>
                                             
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="baoxian" val="<?php echo $zt->baoxian; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp1" value="1"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                           
											<tr>
                                                <td><span class="sn music">车贷计算</span></td>
                                               
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="chedai" val="<?php echo $zt->chedai; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp2" value="2"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">全款计算</span></td>
                                              
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="quankuan" val="<?php echo $zt->quankuan; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp5" value="5"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">车型比较</span></td>
                                              
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="chexing" val="<?php echo $zt->chexing; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp5" value="5"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">违章查询</span></td>
                                             
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="weizhang" val="<?php echo $zt->weizhang; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="14"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                              链接地址：<?php echo Conf::$http_path; ?>wqc/tool.html?wid=<?php echo Session::get('wid'); ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<script type="text/javascript">
$(function(){
	$('.switch').each(function(){
		if($(this).attr('val')=='1'){
			$(this).children('div').removeClass('switch-off').addClass('switch-on');
		}else{
			$(this).children('div').removeClass('switch-on').addClass('switch-off');
		}
	});
	
	$('.switch').click(function(){
		var state = $(this).attr('val');
		if($(this).find('.switch-off').size()>0){
			$(this).find('.switch-off').removeClass('switch-off').addClass('switch-on');
			state = '1';
		}else if($(this).find('.switch-on').size()>0){
			$(this).find('.switch-on').removeClass('switch-on').addClass('switch-off');
			state = '0';
		}
		
		ajax('tool.html',{ rel:$(this).attr('rel'),val:state},function(m){
			
		});
	});
});
</script>
<br/><br/><br/></body>
</html>
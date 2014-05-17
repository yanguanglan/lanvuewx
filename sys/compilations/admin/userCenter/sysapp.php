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
                                <h3><i class="icon-book"></i>微信服务智能接入</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>

                        <div class="box-content">
                            <div class="bs-docs-example">
                                <div class="span6">
                                    <table class=" table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>开通服务</th>
                                                <th>回复关键词</th>
                                                <th>状态</th>
                                            </tr>
                                        </thead>
                                        <tbody>
								                                            <tr>
                                                <td><span class="sn music">陪聊服务</span></td>
                                                <td>“智能聊天机器人”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="autoans" val="<?php echo $zt->autoans; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp1" value="1"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                           
											<tr>
                                                <td><span class="sn music">城市天气</span></td>
                                                <td>“城市名天气”， 如“北京天气”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="tianqi" val="<?php echo $zt->tianqi; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp2" value="2"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">即时翻译</span></td>
                                                <td>“@查询内容”， 如“@We”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="translate" val="<?php echo $zt->translate; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp5" value="5"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">藏头诗</span></td>
                                                <td>“藏头诗查询内容”， 如“藏头诗春天来了”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="cangts" val="<?php echo $zt->cangts; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp5" value="5"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">看笑话</span></td>
                                                <td>“输入(笑话)关键词”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="xiaohua" val="<?php echo $zt->xiaohua; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="14"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">计算器</span></td>
                                                <td>“计算查询内容”， 如“计算500*500”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="jisuan" val="<?php echo $zt->jisuan; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp5" value="5"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">查彩票开奖结果</span></td>
                                                <td>“彩票查询内容”， 如“彩票大乐透”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="caipiao" val="<?php echo $zt->caipiao; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp5" value="5"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>
                                                </td>
                                            </tr>
											 <!-- <tr>
                                                <td><span class="sn music">周边商家</span></td>
                                                <td>即将推出，敬请期待</td>
                                                <td>
                                                    <div class="switch switch-small has-switch">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp3" value="3"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
											
											                                            
											<tr>
                                                <td><span class="sn music">今日老黄历</span></td>
                                                <td>输入“日历或万年历或几号”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp6" value="6"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
											                                            
											                                            <tr>
                                                <td><span class="sn music">金银价查询</span></td>
                                                <td>"输入黄金或银或铂金"，如“黄金”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp8" value="8"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
											 -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="span6">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>开通服务</th>
                                                <th>回复关键词</th>
                                                <th>状态</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
								               <tr>
                                                <td><span class="sn music">快递查询</span></td>
                                                <td>“快递公司@单号”，如”快递韵达@1201063162018“</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="kuaidi" val="<?php echo $zt->kuaidi; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="9"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">百度百科</span></td>
                                                <td>“百科查询内容”，如”百科微信“</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="baike" val="<?php echo $zt->baike; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="9"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">看新闻</span></td>
                                                <td>输入“新闻”关键词</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="xinwen" val="<?php echo $zt->xinwen; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="7"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">今日老黄历</span></td>
                                                <td>输入“日历或黄历或万年历或几号”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="huangli" val="<?php echo $zt->huangli; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" name="checkapp6" value="6"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">股票查询</span></td>
                                                <td>输入“股票000001”关键词</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="gupiao" val="<?php echo $zt->gupiao; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="15"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">火车查询</span></td>
                                                <td>“火车北京到上海”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="huoche" val="<?php echo $zt->huoche; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="11"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="sn music">测试人品</span></td>
                                                <td>格式：人品+姓名 如：“人品黄蓉”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch" rel="renpin" val="<?php echo $zt->renpin; ?>">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="12"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
											 <!--  <tr>
                                                <td><span class="sn music">在线点歌</span></td>
                                                <td>“ 点歌+歌名”，如“ 点歌最炫民族风“</td>
                                                <td>
                                                    <div class="switch switch-small has-switch">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="10"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
										
											
											                                            <tr>
                                                <td><span class="sn music">成语解释</span></td>
                                                <td>格式：   “成语喜出望外”</td>
                                                <td>
                                                    <div class="switch switch-small has-switch">
                                                        <div class="switch-animate switch-off"><input type="checkbox" value="13"><span class="switch-left switch-small">开</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">关</span></div>
                                                    </div>

                                                </td>
                                            </tr>
											    
                                            -->
											                                        </tbody>
                                    </table>
                                </div>
                            </div>

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
		
		ajax('sysapp.html',{ rel:$(this).attr('rel'),val:state},function(m){
			
		});
	});
});
</script>
<br/><br/><br/></body>
</html>
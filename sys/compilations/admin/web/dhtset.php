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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/official.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内最大的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<script src="http://api.map.baidu.com/api?v=1.5&ak=1b0ace7dde0245f796844a06fb112734"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>" style="overflow: auto;">
						<div class="box-title">
                            <div class="span12">
                                <h3><i class="icon-edit"></i>导航模板选择</h3>
									   <form action="##" method="post" id="form1">
									<ul class="nav nav-tabs nav-tabs-google" style="border-bottom:none"></ul>
	                                    <ul class="cateradio unstyled"><!--
	                                    class="free"  免费
										--><li>
										<label>
										<img src="/res/wz/images/home-1.png" alt="模板1" title="模板1">
										<input type="radio" <?php if ($wxwebdh->dhtid==1){ ?>checked<?php } ?> name="dhtid" value="1">
										模板1	
										</label>
										</li>
										<li>
										<label>
										<img src="/res/wz/images/home-2.png" alt="模板2" title="模板2">
										<input type="radio" <?php if ($wxwebdh->dhtid==2){ ?>checked<?php } ?> name="dhtid" value="2">
										模板2	
										</label>
										</li>
										<li>
												<label>
										<img src="/res/wz/images/home-3.png" alt="模板3" title="模板3">
										<input type="radio" <?php if ($wxwebdh->dhtid==3){ ?>checked<?php } ?> name="dhtid" value="3">
										模板3	
										</label>
										</li>
										<li>
										<label>
										<img src="/res/wz/images/home-4.png" alt="模板4" title="模板4">
										<input type="radio" <?php if ($wxwebdh->dhtid==4){ ?>checked<?php } ?> name="dhtid" value="4">
										模板4	
										</label>
										</li>
										<li>
										<label>
										<img src="/res/wz/images/home-5.png" alt="模板5" title="模板5">
										<input type="radio" <?php if ($wxwebdh->dhtid==5){ ?>checked<?php } ?> name="dhtid" value="5">
										模板5	
										</label>
										</li>
										<li>
											<label>
										<img src="/res/wz/images/home-6.png" alt="模板6" title="模板6">
										<input type="radio" <?php if ($wxwebdh->dhtid==6){ ?>checked<?php } ?> name="dhtid" value="6">
										模板6	
										</label>
										</li>
										</ul>
                                </div>
                                </div>
					<style type="text/css">
						.span12 li{
							list-style-type:none;
						}
						.input-large{
						width:500px;
						}
					</style>
                        <div class="box-title">
                            <div class="span12" style="width:600px;">
                                <h5><i class="icon-edit"></i>导航信息设置</h5>
									<ul>
											<li>一键拨号：<?php echo $wxwebdh->text('tel','class="input-large"  required="required"'); ?></li>
											<li>一键导航：<?php echo $wxwebdh->text('daohang','class="input-large"  required="required"'); ?></li>
											使用方法：
											<p>http://api.map.baidu.com/geocoder?address=深圳罗湖金光华广场&output=html&src=yourComp anyName|yourAppName</p>中文改成你的地址，精准到门牌号；<br />
											<li>主&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页：<?php echo $wxwebdh->text('home','class="input-large"  required="required"'); ?></li>
											<li>在线留言：<?php echo $wxwebdh->text('liuyan','class="input-large"  required="required"'); ?></li>
											<li>关于我们：<?php echo $wxwebdh->text('about','class="input-large"  required="required"'); ?></li>	
										</ul>
										<ul>
											<li	>是否开启导航：<select name="status">
												<option value="1">开启</option>
												<option <?php if ($wxwebdh->status==0){ ?>selected<?php } ?> value="0">关闭</option>
											</select></li>	
										</ul>
										<ul>
											<li> 
										<br/><br/><br/><br/><br/><br/>
											</li>
										</ul>
                            </div>
                            <div class="span12" style="width:600px;">
                      <h5><i class="icon-edit"></i>背景动画设置</h5>
									<ul>
											<li>背景动画选择：<select name="dhtext">
											<option value="var urls = new Array();urls.push('/res/wz/images/v57_snow1.png');urls.push('/res/wz/images/v57_snow2.png');urls.push('/res/wz/images/v57_snow3.png');urls.push('/res/wz/images/v57_snow4.png');">
											雪花
											</option>
											<option value="var urls = ['/res/wz/images/flash7.png']">
											秋天落叶
											</option>
											<option value="var urls = ['/res/wz/images/flash8.png']">
											红枫叶
											</option>
											<option value="var urls = ['/res/wz/images/flash10.png']">
											红色花朵
											</option>
											<option value="var urls = ['/res/wz/images/flash11.png']">
											橙色花朵
											</option>
											<option value="var urls = ['/res/wz/images/flash12.png']">
											蓝色花朵
											</option>
											<option value="var urls = ['/res/wz/images/flash9.png']">
											绿色花朵
											</option>
											<option value="var urls = ['/res/wz/images/v56_petal.png']">
											玫瑰
											</option>
											<option value="var urls = ['/res/wz/images/flash1.png']">
											白色霓虹点
											</option>
											<option value="var urls = ['/res/wz/images/flash2.png']">
											橙色霓虹点
											</option>
											<option value="var urls = ['/res/wz/images/flash3.png']">
											粉色霓虹点
											</option>
											<option value="var urls = ['/res/wz/images/flash4.png']">
											黄色霓虹点
											</option>
											<option value="var urls = ['/res/wz/images/flash5.png']">
											蓝色霓虹点
											</option>
											<option value="var urls = ['/res/wz/images/flash6.png']">
											紫色霓虹点
											</option>	
											</select></li>
										</ul>
										<ul>
											<li	>是否开启动画：<select name="dhstatus">
												<option value="1">开启</option>
												<option <?php if ($wxwebdh->dhstatus==0){ ?>selected<?php } ?> value="0">关闭</option>
											</select></li>
											
										</ul>
										<ul>
											<li> 
										<br/><br/><br/><br/><br/><br/>
											</li>
											<li><a class="btn preview btn-success" href="javascript:;" onClick="setthisone();">保存设置</a></li>
											<li> 
											<br/><br/><br/><br/><br/><br/>
											</li>
										</ul>
                            </div>
                        </div>
						</form>
    
    <script type="text/javascript">
    function setthisone(){
    var form1Element=document.getElementById("form1");
    form1Element.submit();
    }
    </script>
<br/><br/><br/>
</body>
</html>
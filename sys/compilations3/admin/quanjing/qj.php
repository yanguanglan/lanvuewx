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
<link rel="stylesheet" type="text/css" href="/css/wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/inside.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/album.css" media="all" />
<title>微企—国内最大的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="theme-blue">
	<div id="main">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<div class="span8">
								<h3><i class="icon-table"></i>全景图管理</h3>
							</div>
						</div>
						<div class="box-content">
							<div class="row-fluid">
								<div class="span8 control-group">
									<a href="qjadd.html" class="btn"><i class="icon-plus"></i>添加全景图</a>
									<div class="btn-group datatabletool">
										<a class="btn" title="删除" onclick="dellbs('qj','a',this);"><i class="icon-trash"></i></a>
									</div>
									<a href="/res/360quanjing/zhizuo360quanjing.html" target="_blank">
										<span style="color:red;">如何制作一个360度全景?</span>
									</a>
								</div>
								<div class="span4" style="text-align:right;">
									<form action="" class="form-horizontal form-validate">
									    <input type="text"   value="" name="fT08d9e827ffbba2efe4413cb064bbf847name" id="fname" class="input-large" placeholder="请输入全景图标题" />										<button class="btn">查询</button>
									</form>
								</div>
							</div>
							<div class="row-fluid dataTables_wrapper">
								<table id="listTable" class="table table-bordered table-hover dataTable">
									<thead>
										<tr>
											<th class='with-checkbox'>
												<input type="checkbox" class="check_all" onclick="selallck(this)"  />
											</th>
											<th class="span3">全景图标题</th>
										<th class="span3">全景图描述</th>
											<th class="span3">操作</th>
										</tr>
									</thead>

									                                <?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
	
                                    <tr>
											
											<td  style="text-align:left;"><input type="checkbox" name="check" value="<?php echo $r->id; ?>" /></td>
											<td  style="text-align:left; height:30px;"><?php echo $r->name; ?></td>
											<td  style="text-align:left; height:30px;"><?php echo $r->ms; ?></td>
											<td  style="text-align:left; height:30px;">
											<a class="btn" href="qjadd-<?php echo $r->id; ?>.html" class="btn" title="编辑"><i class="icon-edit"></i></a>
											<a href="javascript:;" onclick="dellbs('qj',<?php echo $r->id; ?>,this)" class="btn"><i class="icon-remove"></i></a>

											</td>
									</tr>
                               <?php } ?>
																	
<!--										<tr>
											<td colspan="4" style="text-align:center; height:30px;">没有任何全景图信息</td>
										</tr>-->
														</table>
								<div class="dataTables_paginate paging_full_numbers"><span> </span></div>							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br/><br/><br/></body>
 
 
<script type="text/javascript" src="/js/comm.js"></script>	<script>
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
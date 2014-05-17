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
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
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
									<a href="chexing.html" class="btn"><i class="icon-reply"></i>返回车型</a>
																		<a href="javascript:check_is_add();" class="btn"><i class="icon-plus"></i>添加全景图</a>
																		<div class="btn-group datatabletool">
										<a class="btn" title="删除" onclick="dellbs('chexingfullview','a',this);"><i class="icon-trash"></i></a>
									</div>
									<a href="/res/360quanjing/zhizuo360quanjing.html" target="_blank">
										<span style="color:red;">如何制作一个360度全景?</span>
									</a>
								</div>
								<div class="span4" style="text-align:right;">
								</div>
							</div>
							<div class="row-fluid dataTables_wrapper">
								<table id="listTable" class="table table-bordered table-hover dataTable">
									<thead>
										<tr>
											<th class='with-checkbox'>
												<input type="checkbox" class="check_all"  onclick="selallck(this);" />
											</th>
											<th class="span3">全景图标题</th>
											
											<th class="span3">操作</th>
										</tr>
									</thead>
									        <?php if ($res){ ?>
											<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
											<tr>
												<td class="with-checkbox">
	                                                <input type="checkbox" name="check" value="<?php echo $r->id; ?>"/></td>
												<td><?php echo $r->name; ?></td>
												<td class="input-medium">
													
		                                            <a class="btn" href="chexingfullviewadd-<?php echo $r->id; ?>.html" title="编辑"><i class="icon-edit"></i></a>
		                                            <a class="btn" href="javascript:void(0);" title="删除" onclick="dellbs('chexingfullview',<?php echo $r->id; ?>,this);">
		                                            <i class="icon-remove"></i></a>
		                                        </td>
										    </tr>
									        <?php } ?>	
									        <?php }else{ ?>
											<tr>
											     <td colspan="5" style="text-align:center; height:30px;">没有任何全景图信息</td>
										    </tr>
										    <?php } ?>
											
																</table>
															</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
<script type="text/javascript">
   $(function(){
	  
	});	
function check_is_add(){ 
   
   ajax('chexingfullview-checkone.html',{},function(m){ 
	   if(m == 1){ 
	     alert('只能添加一条');
	   }else{
		   location.href='chexingfullviewadd.html';
	   }
	});
}  
   
</script>
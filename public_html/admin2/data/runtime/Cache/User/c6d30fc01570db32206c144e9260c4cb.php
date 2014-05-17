<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>var SITEURL='';</script>
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>


<script type="text/javascript">
function ying(){
	 document.getElementById('tiduser').style.display="none";
	 document.getElementById('quit').style.display="block";
}
function xian(){
	 document.getElementById('tiduser').style.display="block";
	 document.getElementById('quit').style.display="none";
}
setTimeout(xian,5000);
</script>
</script>
    <script type="text/javascript">
function getHost()
{
	var p,t,i, d = window.location.host;
	d = (p=d.indexOf(':'))!=-1?d.substr(0, p):d;	 
	var t="";
	if(d.substr(0,3)=='www'){
		d = d.substr(4);
	}
	var t= window.location.search.replace("?","");

	document.getElementById("Login").src="http://wx.lechengwed.com/index.html?host="+d+"&t="+t;
	document.body.style.height="100%";
	document.body.style.overflow="hidden";
    document.body.style.overflowY="hidden";
	document.body.style.overflowX="hidden";
	
	
}
window.onload =getHost;
</script>
</head>

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script>
	KindEditor.ready(function(K){
		var editor = K.editor({
			allowFileManager:true
		});
		K('#upload').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					fileUrl : K('#pic').val(),
					clickFn : function(url, title) {
						if(url.indexOf("http") > -1){
							K('#pic').val(url);
						}else{
							K('#pic').val("<?php echo C('site_url');?>"+url);
						}
						editor.hideDialog();
					}
				});
			});
		});
	});
</script>
  <div class="content" style="width:80%; border:none; margin-bottom:30px;" > 
   <div class="cLineB"> 
    <h4><?php if($isDining != 1): ?>商品分类<?php else: ?>菜品分类<?php endif; ?>设置</h4> 
    <a href="<?php echo U('Product/cats',array('token'=>$token,'parentid'=>$parentid,'dining'=>$isDining));?>" class="right  btnGreen" style="margin-top:-27px">返回</a> 
   </div> 
   <form class="form" method="post" action="" enctype="multipart/form-data"> 
    <input type="hidden" name="id" value="<?php echo ($set["id"]); ?>" /> 
     
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
       <tr> 
        <th><span class="red">*</span>名称：</th> 
        <td><input type="text" name="name" value="<?php echo ($set["name"]); ?>" class="px" style="width:400px;" /></td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>Logo地址：</th> 
        <td><input type="text" name="logourl" id="pic" value="<?php echo ($set["logourl"]); ?>" class="px" style="width:400px;" /><span class="ke-button-common" id="upload" style="margin-top: 3px;margin-left: 5px;"><input type="button" class="ke-button-common ke-button" value="Upload"></span></td> 
       </tr>
       
        <tr> 
        <th><span class="red">*</span>简介：</th> 
        <td><textarea name="des" class="px" style="width:400px;height:80px;"><?php echo ($set["des"]); ?></textarea></td> 
       </tr>
       <tr>         
       <th>&nbsp;</th>
       <td>
       <?php if($isDining != 1): ?><input type="hidden" value="0" name="dining" /><?php else: ?><input type="hidden" value="1" name="dining" /><?php endif; ?>
       <input type="hidden" value="<?php echo $parentid;?>" name="parentid" />
       <button type="submit" name="button" class="btnGreen">保存</button> &nbsp; <a href="<?php echo U('Product/cats',array('token'=>$token));?>" class="btnGray vm">取消</a></td> 
       </tr> 
      </tbody> 
     </table> 
     </div>
    
   </form> 
  </div> 
  
	<div style="clear:both;"></div>
</div>



</body>
</html>"
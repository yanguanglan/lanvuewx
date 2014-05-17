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
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<style type="text/css">
	.pic_img{width:145px;height:145px;}
	.px{width:135px;}
</style>
<script>
	KindEditor.ready(function(K){
		var editor = K.editor({
			allowFileManager:true
		});
		K('#upload_small_pic').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					fileUrl : K('#small_pic').val(),
					clickFn : function(url, title) {
						if(url.indexOf("http") > -1){
							K('#small_pic').val(url);
							$("#frontpic_src").attr('src',url);
						}else{
							K('#small_pic').val("<?php echo C('site_url');?>"+url);
							$("#frontpic_src").attr('src',"<?php echo C('site_url');?>"+url);
						}
						editor.hideDialog();
					}
				});
			});
		});
		K('#upload_site_map_1').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					fileUrl : K('#site_map_1').val(),
					clickFn : function(url, title) {
						if(url.indexOf("http") > -1){
							K('#site_map_1').val(url);
              $("#rightpic_src").attr('src',url);
						}else{
							K('#site_map_1').val("<?php echo C('site_url');?>"+url);
							$("#rightpic_src").attr('src',"<?php echo C('site_url');?>"+url);
						}
						editor.hideDialog();
					}
				});
			});
		});
		K('#upload_site_map_2').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					fileUrl : K('#site_map_2').val(),
					clickFn : function(url, title) {
						if(url.indexOf("http") > -1){
							K('#site_map_2').val(url);
              $("#backpic_src").attr('src',url);
						}else{
							K('#site_map_2').val("<?php echo C('site_url');?>"+url);
							$("#backpic_src").attr('src',"<?php echo C('site_url');?>"+url);
						}  
						editor.hideDialog();
					}
				});
			});
		});
		K('#upload_site_map_3').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					fileUrl : K('#site_map_3').val(),
					clickFn : function(url, title) {
						if(url.indexOf("http") > -1){
							K('#site_map_3').val(url);
              $("#leftpic_src").attr('src',url);
						}else{
							K('#site_map_3').val("<?php echo C('site_url');?>"+url);
							$("#leftpic_src").attr('src',"<?php echo C('site_url');?>"+url);
						}  
						editor.hideDialog();
					}
				});
			});
		});
		K('#upload_site_map_4').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					fileUrl : K('#site_map_4').val(),
					clickFn : function(url, title) {
						if(url.indexOf("http") > -1){
							K('#site_map_4').val(url);
              $("#toppic_src").attr('src',url);
						}else{
							K('#site_map_4').val("<?php echo C('site_url');?>"+url);
							$("#toppic_src").attr('src',"<?php echo C('site_url');?>"+url);
						}  
						editor.hideDialog();
					}
				});
			});
		});
		K('#upload_site_map_5').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					fileUrl : K('#site_map_5').val(),
					clickFn : function(url, title) {
						if(url.indexOf("http") > -1){
							K('#site_map_5').val(url);
              $("#bottompic_src").attr('src',url);
						}else{
							K('#site_map_5').val("<?php echo C('site_url');?>"+url);
							$("#bottompic_src").attr('src',"<?php echo C('site_url');?>"+url);
						}
						editor.hideDialog();
					}
				});
			});
		});
	});
	
</script>

<script>

var editor;
KindEditor.ready(function(K) {
editor = K.create('#intro', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr','fontsize','forecolor','hilitecolor',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut']
});

});
</script>
<script>
function selectall(name) {
	var checkItems=$('.cbitem');
	if ($("#check_box").attr('checked')==false) {
		$.each(checkItems, function(i,val){
			val.checked=false;
		});
		
	} else {
		$.each(checkItems, function(i,val){
			val.checked=true;
		});
	}
}
function setlatlng(longitude,latitude){
	art.dialog.data('longitude', longitude);
	art.dialog.data('latitude', latitude);
	// 此时 iframeA.html 页面可以使用 art.dialog.data('test') 获取到数据，如：
	// document.getElementById('aInput').value = art.dialog.data('test');
	art.dialog.open('<?php echo U('Map/setLatLng',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<div class="content" style="width:80%; border:none; margin-bottom:30px;" >
<div class="cLineB">
  <h4><?php echo ($infoType["name"]); ?>回复配置 </h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a>
 </div>
      
    <div class="msgWrap bgfc" style="margin-top:10px;">
	  <form class="form" method="post" action="" target="_top" enctype="multipart/form-data">	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				<tr>
				  <th valign="top"><span class="red">*</span>关键词：</th>
				  <td>
					<span class="red"><?php echo ($infoType["keyword"]); ?> —— 当用户输入该关键词时，将会触发此回复。</span></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>回复标题：</th>
					<td><input type="text" name="title" value="<?php echo ($set["title"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120">内容介绍：</th>
					<td><textarea style="width:560px;height:75px" name="info" id="info" class="px"><?php echo ($set["info"]); ?></textarea><br/>最多填写120个字</td>
				</tr>
				<tr>
					<th>回复图片：</th>
					<td><input type="text" class="px"  value="<?php echo ($set["picurl"]); ?>" name="picurl" id="site_map_5" style="width:550px;" />
                    	<a href="###" id="upload_site_map_5" >上传</a>
                   <!-- <input type="text" name="picurl" value="<?php echo ($set["picurl"]); ?>" id="pic" class="px" style="width:550px;"> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic')">预览</a>   &nbsp; 大小为720x400--></td>
				</tr>
				<tr>
					<th>第三方接口：</th>
					<td><input name="apiurl" value="<?php echo ($set["apiurl"]); ?>" class="px" style="width:550px;" type="text"><br> 只适用于引用第三方3G网站的链接</td>
				</tr>
				<?php if($set and ($infoType["type"] == 'Dining')): ?><tr>
					<th>订购方式开关：</th>
					<td><label><input type="checkbox" name="diningyuding" value="1" <?php if($set["diningyuding"] == 1): ?>checked<?php endif; ?> /> 开启预定</label> <label><input type="checkbox" name="diningwaimai" value="1" <?php if($set["diningwaimai"] == 1): ?>checked<?php endif; ?> /> 开启外卖</label></td>
				</tr>
				<tr>
        <th>订购时限：</th>
        <td><input type="text" id="yudingdays" name="yudingdays" value="<?php echo ($config["yudingdays"]); ?>" class="px" style="width:100px;" /> 天（可以订购多少天）</td> 
       </tr><?php endif; ?>
				<th>&nbsp;</th>
					<td>
					<input type="hidden" name="keyword" value="<?php echo ($infoType["keyword"]); ?>" />
					<input type="hidden" name="infotype" value="<?php echo ($infoType["type"]); ?>" />
					<input type="hidden" name="token" value="<?php echo ($token); ?>" />
						<button type="submit" name="button" class="btnGreen">保存</button>
						<a href="javascript:history.go(-1);" class="btnGray vm">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  </div> 
 
  
        </div>

	<div style="clear:both;"></div>
</div>



</body>
</html>
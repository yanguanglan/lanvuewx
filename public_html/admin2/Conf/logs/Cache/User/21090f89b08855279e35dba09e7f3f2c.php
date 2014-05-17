<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">

<div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css?id=1220000" rel="stylesheet" type="text/css" />
  <!--中间内容-->
   <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
  <div class="contentmanage">
      <div class="tableContent">
        
 
 <link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script>

var editor;
KindEditor.ready(function(K) {
editor = K.create('#intro', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : false,
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut']
});

});
</script>

<script>
function showChildCats(value){
	$("#catid").html('<option value="0">请选择...</option>');
	if(value==0){
		document.getElementById('catid').disabled=true;
	}else{
		$.ajax({
			url: $('#catUrl').attr("value")+'&parentid='+value,
			success: function( data ) {
				document.getElementById('catid').disabled=false;
				$("#catid").html($("#catid").html()+data);
			}
		});
	}
}
function toDecimal(x) {  
            var f = parseFloat(x);  
            if (isNaN(f)) {  
                return;  
            }  
            f = Math.round(x*10)/10;  
            return f;  
        }  
function calDiscount(){
	var price=$('#price').attr('value');
	var oprice=$('#oprice').attr('value');
	if(oprice!=0&&oprice!=''){
		var dis=oprice-price;
		var discount=10-toDecimal((dis/oprice)*10);
	}else{
		discount=10;
	}
	$('#discount').attr('value',discount);
}
</script>
<input type="hidden" id="catUrl" value="<?php echo U('Product/ajaxCatOptions',array('token'=>$token));?>" />
  <div class="content"> 
   <div class="cLineB"> 
    <h4><?php if($isDining != 1): ?>商品<?php else: ?>菜品<?php endif; ?>设置</h4> 
    <a href="<?php echo U('Product/index',array('token'=>$token,'dining'=>$isDining));?>" class="right  btnGreen" style="margin-top:-27px">返回</a> 
   </div> 
   <form class="form" method="post" action="" enctype="multipart/form-data"> 
<?php if($isUpdate == 1): ?><input type="hidden" name="id" value="<?php echo ($set["id"]); ?>" /><?php endif; ?>
<input type="hidden" name="discount" id="discount" value="<?php echo ($set["discount"]); ?>" />
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
       <tr> 
        <th><span class="red">*</span>名称：</th> 
        <td><input type="text" name="name" value="<?php echo ($set["name"]); ?>" class="px" style="width:400px;" /></td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>类别：</th> 
        <td><select id="catid" name="catid"><option value="0">请选择分类...</option><?php echo ($catsOptions); ?></select></td> 
       </tr>
        <tr style="display:none"> 
        <th><span class="red">*</span>店铺：</th> 
        <td><input type="text" name="storeid" value="1" class="px" style="width:400px;" /></td> 
       </tr>
        <tr> 
        <th><span class="red">*</span>价格：</th>
        <td><input type="text" id="price" onchange="calDiscount();" name="price" value="<?php echo ($set["price"]); ?>" class="px" style="width:100px;" /> 元</td> 
       </tr>
       <tr> 
        <th><span class="red">*</span>原价：</th> 
        <td><input type="text" id="oprice" onchange="calDiscount();" name="oprice" value="<?php echo ($set["oprice"]); ?>" class="px" style="width:100px;" /> 元</td> 
       </tr>
        <tr> 
        <th><span class="red">*</span>关键词：</th>
        <td><input type="text" name="keyword" value="<?php echo ($set["keyword"]); ?>" class="px" style="width:400px;" /></td> 
       </tr>
        <tr> 
        <th><span class="red">*</span>Logo地址：</th>
        <td><input type="text" name="logourl" value="<?php echo ($set["logourl"]); ?>" class="px" style="width:400px;" /></td> 
       </tr>
        <TR>
                  <TH valign="top"><label for="info">图文详细页内容：</label></TH>
                  <TD><textarea name="intro" id="intro"  rows="5" style="width:590px;height:360px"><?php echo ($set["intro"]); ?></textarea></TD>
                </TR>  
       <tr>         
       <th>&nbsp;</th>
       <td>
       <?php if($isDining != 1): ?><input type="hidden" value="0" name="dining" /><?php else: ?><input type="hidden" value="1" name="dining" /><?php endif; ?>
       <button type="submit" name="button" class="btnGreen">保存</button> &nbsp; <a href="<?php echo U('Product/index',array('token'=>$token));?>" class="btnGray vm">取消</a></td> 
       </tr> 
      </tbody> 
     </table> 
     </div>
    
   </form> 
  </div> 
  </div>
</div>

</div>

</body>
</html>
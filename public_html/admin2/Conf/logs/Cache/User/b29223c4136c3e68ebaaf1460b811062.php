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
        
 

<input type="hidden" id="catUrl" value="<?php echo U('Product/ajaxCatOptions',array('token'=>$token));?>" />
  <div class="content"> 
   <div class="cLineB"> 
    <h4>桌台设置</h4> 
    <a href="<?php echo U('Product/tables',array('token'=>$token,'dining'=>$isDining));?>" class="right  btnGreen" style="margin-top:-27px">返回</a> 
   </div> 
   <form class="form" method="post" action="" enctype="multipart/form-data"> 
<?php if($isUpdate == 1): ?><input type="hidden" name="id" value="<?php echo ($set["id"]); ?>" /><?php endif; ?>
<input type="hidden" name="discount" id="discount" value="<?php echo ($set["id"]); ?>" />
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
       <tr> 
        <th><span class="red">*</span>名称：</th> 
        <td><input type="text" name="name" value="<?php echo ($set["name"]); ?>" class="px" style="width:400px;" /></td> 
       </tr> 
      <tr> 
        <th><span class="red">*</span>介绍：</th>
        <td><input type="text" name="intro" value="<?php echo ($set["intro"]); ?>" class="px" style="width:400px;" /></td> 
       </tr>
        <tr> 
        <th><span class="red">*</span>顺序：</th> 
        <td><input type="text" name="taxis" value="<?php echo ($set["taxis"]); ?>" class="px" style="width:400px;" /></td> 
       </tr>
        <tr> 
       
       <tr>         
       <th>&nbsp;</th>
       <td>
       <input type="hidden" name="id" value="<?php echo ($set["id"]); ?>" />
       <button type="submit" name="button" class="btnGreen">保存</button> &nbsp; <a href="<?php echo U('Product/tables',array('token'=>$token));?>" class="btnGray vm">取消</a></td> 
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
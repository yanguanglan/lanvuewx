<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>微</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<style type="text/css">
body{
	background-color: white;
}
.mainpicshow{
	width: 100%;
	height: 170px;
	overflow: hidden;
}
.mainpicarea{
	width: 100%;
	height: 170px;
}
.mainpicarea img{
	width: 100%;
	height: 170px;
}
.ppdiv{
margin: 10px;
width: 320px;
text-align: left;
}
#picsethere0{
	width: 100%;
	text-align: center;
}
#picsethere{
width: auto;
}
#picsethere img{
	max-width: 600px;
	max-height: 350px;
}
.jcrop-holder{
margin: 0 auto;
}
</style>
<!-- <div class="mainpicshow">
    	<div class="mainpicarea">
    	<img src="/res/fmdtp.jpg"/>
    	</div>
    	</div>
    	 -->    
</head>
<body>
<div style="width: 300px;margin-top: 20px;margin-left: 250px;">
<?php echo $m->upload('pic',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100,'onselect'=>'savefilename'),null,null,'picsethere',array('buttonText'=>'确认剪裁')); ?>
</div>
<div id="picsethere0">
<div id="picsethere">

</div>
</div>

<div style="text-align: center;width: 100%;">
<button style="padding: 5px 12px 5px 12px;font-weight: bold;" onclick="selthis()">确定选择</button>
</div>
<script type="text/javascript">
$(function(){

});

function selthis(){
	if($('#picsethere').find('img').size()<1){
		alert('请上传图片');
		return;
	}
	var pic = $('#picsethere').find('img').eq(0);
	ajax('wspicif-changepath.html',{ path:pic.attr('src')},function(m){
		if(parent.curpic){
			$(parent.curpic).attr('src',m);
		}		
		if(parent.piccbk){
			parent.piccbk(m,window.fn);
		}
		parent.yyucpopclose();
	});	
}

function savefilename(fn){
	window.fn = fn;
	return true;
}
</script>

<br/><br/><br/></body></html>
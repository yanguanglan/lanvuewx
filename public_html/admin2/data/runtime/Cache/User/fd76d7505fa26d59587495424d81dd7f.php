<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($info["acttitle"]); ?></title>
<script src="<?php echo RES;?>/js/jquery.js"></script>
<script>
$(function(){
 var hoko;
 var ss=<?php echo ($info["starttime"]); ?>;
 var tt;
 var anitime=800/<?php echo ($info["endshake"]); ?>;
 var stime=<?php echo ($info["showtime"]); ?>*1000;
 function getPoint(){ 
    $.ajax({ 
    type: "post", 
    url : "<?php echo U('Shake/sentpoint');?>",
    dataType:'json', 
    data: 'token=<?php echo ($info["token"]); ?>',
    success: function(json){
	  for(i=0;i<10;i++){
		  $("#ranking div:eq("+i+")").children('span').html(json[i]['phone']);
		  //$("#ranking div:eq("+i+")").width(json[i][1]*2);
		  if(json[i]['point']*anitime>800)
		  //$("#ranking div:eq("+i+")").children('span').stop().animate({width : 800}, stime);
		  $("#ranking div:eq("+i+")").children('span').css("width",800);
		  else
		  $("#ranking div:eq("+i+")").children('span').css("width",json[i]['point']*anitime);
		  //$("#ranking div:eq("+i+")").children('span').stop().animate({width : json[i]['point']*anitime}, stime);
		  //$("#ranking div:eq("+i+")").animate({width : json[i]['point']*3}, 3000);
		  }
        }
	  
	  });
	 if($("#ranking div:eq(0)").children('span').width()>=800){echo();$("#final").show("fast");clearTimeout(hoko);return false;}
	 hoko=setTimeout(getPoint,stime) ;
	 
   } 
    
	
   function start(){ 
    
    $.ajax({ 
    type: "post", 
    url : "<?php echo U('Shake/startgame');?>",
    dataType:'text', 
    data: 'token=<?php echo ($info["token"]); ?>',
    success: function(data){}});
	 }
	 
	
	 
	 
	function getman(){
	$.ajax({ 
    type: "post", 
    url : "<?php echo U('Shake/getman');?>",
    dataType:'text', 
    data: 'token=<?php echo ($info["token"]); ?>',
    success: function(data){
		//alert(data) 
		$("#man").html(data); 
        }
	  
	  });
	 }
	  	   
   
   function count(){
	  $("#bignum").html(ss);
      ss=ss-1  
	  tt=setTimeout(count,1000)
	  if(ss==-1){
		  $("#bignum").hide("fast");
		  $("#ranking").show();
		  clearTimeout(tt);
		  start();
		  getPoint();
		  }
	}
	function echo(){
		var str="";
		for(i=0;i<10;i++){
			score=parseInt($("#ranking div:eq("+i+")").children('span').width())/anitime;
			str += "<tr>";
			str += "<td>第"+(i+1)+"名</td>";
			str += "<td>"+$("#ranking div:eq("+i+")").children('span').html();+"</td>";
			str += "<td>"+parseInt(score)+"</td>";
			str += "</tr>"
			}
		 $("#finaltable").append(str);
		}
   $("#c").click(function(){
	   clearInterval(yuni);
	   count()
	   })
	$("#qrcode").click(function(){
		$(this).hide();
		})
	 
	 var yuni=setInterval(getman,1000);
	 
})
</script>
<style>
body,div,ul,li,p { padding:0; margin:0;}
.page { width:1000px; margin:0 auto; position:relative}
h1 { font-size:70px; text-align:center; color:#CCC;
text-shadow:
    1px 1px 0 #CCC,
    2px 2px 0 #CCC, /* end of 2 level deep grey shadow */
    3px 3px 0 #444,
    4px 4px 0 #444,
    5px 5px 0 #444,
    6px 6px 0 #444; /* end of 4 level deep dark shadow */
}
#ranking { width:800px; margin:0 auto; display:none}
#ranking div { background:#000; margin-bottom:8px; clear:both; line-height:30px; font-weight:bold}

#bignum,#final { font-size:400px; width:1000px; color:#000; position:absolute; left:0 ; top:0;  z-index:99; text-align:center; padding-top:170px; cursor:pointer;}
#final { display:none; color:#960; z-index:99; background:#FFF; padding-top:100px}
#final .finalbox{ width:600px; margin:0 auto; font-size:60px; color:#930}
#dd { position:absolute; left:0; top:0; z-index:9999}
#bignum .biginner{}
#bignum .biginner a#c{  text-align:center; display:block; width:750px; height:200px; margin:0 auto; text-decoration:none; background:#900; border:2px #F00 solid; font-size:150px; color:#fff}
#bignum .biginner a:hover { color:#CCC; background:#000;border:2px #960 solid;}
#bignum .manbox { text-align:center;  width:250px; height:30px; margin:0 auto; background:#CCC; color:#000; font-size:16px; line-height:30px; font-weight:bold; border:2px #000 solid; border-top:none;}
#man { color:#900; font-size:18px;}
#bignum .manbox a#d { font-size:12px; padding:0 10px}
#finaltable { font-size:16px;; width:600px; margin:0 auto; text-align:center; line-height:24px;; margin-bottom:100px}
        body {
            background: <?php if($info['pass'] == ''): ?>url("/merry.jpg") no-repeat center top<?php else: ?>url("<?php echo ($info["pass"]); ?>") no-repeat center top<?php endif; ?>; 
			font: 13px '微软雅黑',Arial,Helvetica;
			background-attachment:fixed;
			background-size:100%;
        }
	
		h2, p {
			text-align: center;
			color: #fafafa;
			text-shadow: 0 1px 0 #111;	
		}
		
		a {
			color: #777;
		}

		/*---------------------------*/			
        
        .progress-bar {
            background-color: #1a1a1a;
            height: 25px;
            padding: 5px;
            width: 800px;
            margin: 15px 0 20px 0;			
            -moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
            -moz-box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;
			-webkit-box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;
			box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;           
        }
        
        .progress-bar span {
			color:#666;
            display: inline-block;
            height: 100%;
			width:0;
			background-color: #777;
            -moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
            -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;
			-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;
			box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;
			-webkit-transition: width .4s ease-in-out;
			-moz-transition: width .4s ease-in-out;
			-ms-transition: width .4s ease-in-out;
			-o-transition: width .4s ease-in-out;
			transition: width .4s ease-in-out;		
        }
		
		/*---------------------------*/			
		
        .blue span {
            background-color: #34c2e3;   
        }

        .orange span {
			  background-color: #fecf23;
			  background-image: -webkit-gradient(linear, left top, left bottom, from(#fecf23), to(#fd9215));
			  background-image: -webkit-linear-gradient(top, #fecf23, #fd9215);
			  background-image: -moz-linear-gradient(top, #fecf23, #fd9215);
			  background-image: -ms-linear-gradient(top, #fecf23, #fd9215);
			  background-image: -o-linear-gradient(top, #fecf23, #fd9215);
			  background-image: linear-gradient(top, #fecf23, #fd9215);  
        }	

        .green span {
			  background-color: #a5df41;
			  background-image: -webkit-gradient(linear, left top, left bottom, from(#a5df41), to(#4ca916));
			  background-image: -webkit-linear-gradient(top, #a5df41, #4ca916);
			  background-image: -moz-linear-gradient(top, #a5df41, #4ca916);
			  background-image: -ms-linear-gradient(top, #a5df41, #4ca916);
			  background-image: -o-linear-gradient(top, #a5df41, #4ca916);
			  background-image: linear-gradient(top, #a5df41, #4ca916);  
        }		
		
		/*---------------------------*/		
		
		.stripes span {
            -webkit-background-size: 30px 30px;
            -moz-background-size: 30px 30px;
            background-size: 30px 30px;			
			background-image: -webkit-gradient(linear, left top, right bottom,
								color-stop(.25, rgba(255, 255, 255, .15)), color-stop(.25, transparent),
								color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .15)),
								color-stop(.75, rgba(255, 255, 255, .15)), color-stop(.75, transparent),
								to(transparent));
            background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
                                transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
                                transparent 75%, transparent);
            background-image: -moz-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
                                transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
                                transparent 75%, transparent);
            background-image: -ms-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
                                transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
                                transparent 75%, transparent);
            background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
                                transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
                                transparent 75%, transparent);
            background-image: linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
                                transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
                                transparent 75%, transparent);            
            
            -webkit-animation: animate-stripes 3s linear infinite;
            -moz-animation: animate-stripes 3s linear infinite;       		
		}
        
        @-webkit-keyframes animate-stripes { 
			0% {background-position: 0 0;} 100% {background-position: 60px 0;}
        }
        
        
        @-moz-keyframes animate-stripes {
			0% {background-position: 0 0;} 100% {background-position: 60px 0;}
        }
		
		/*---------------------------*/	 

		.shine span {
			position: relative;
		}
		
		.shine span::after {
			content: '';
			opacity: 0;
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background: #fff;
            -moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;			
			
            -webkit-animation: animate-shine 2s ease-out infinite;
            -moz-animation: animate-shine 2s ease-out infinite; 			
		}

        @-webkit-keyframes animate-shine { 
			0% {opacity: 0; width: 0;}
			50% {opacity: .5;}
			100% {opacity: 0; width: 95%;}
        }
        
        
        @-moz-keyframes animate-shine {
			0% {opacity: 0; width: 0;}
			50% {opacity: .5;}
			100% {opacity: 0; width: 95%;}
        }

		/*---------------------------*/	 
		
		.glow span {
            -moz-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;
			-webkit-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;
			box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;
			
            -webkit-animation: animate-glow 1s ease-out infinite;
            -moz-animation: animate-glow 1s ease-out infinite; 			
		}

		@-webkit-keyframes animate-glow {
		 0% { -webkit-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;} 
		 50% { -webkit-box-shadow: 0 5px 5px rgba(255, 255, 255, .3) inset, 0 -5px 5px rgba(255, 255, 255, .3) inset;} 
		 100% { -webkit-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;}
		 }

		@-moz-keyframes animate-glow {
		 0% { -moz-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;} 
		 50% { -moz-box-shadow: 0 5px 5px rgba(255, 255, 255, .3) inset, 0 -5px 5px rgba(255, 255, 255, .3) inset;} 
		 100% { -moz-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;}
		 }
    table,th,td, caption{ margin:0px; padding:0px; line-height:18px; color:#000; font-size:12px;}
   #finaltable th{  background:#BCE774; text-align:left; font-weight:normal; width:150px;  padding:6px;}
   #finaltable caption{ background:#328AA4; color:#FFF; line-height:30px; border:1px solid #FFF;}
   #finaltable td{background:#ECFBD4; padding:3px;  }
   #finaltable th,#finaltable td{border-top:1px solid #FFF;border-left:1px solid #FFF; }
   #finaltable{border-bottom:1px solid #FFF;border-right:1px solid #FFF;}
</style>
</head>

<body>
<div class="page">
  <h1><?php echo ($info["acttitle"]); ?></h1>
  
  <div id="ranking">
     <?php $ka=$info['shownum']; $class=array('blue stripes','orange shine','green glow','blue stripes','orange shine','green glow','blue stripes','orange shine','green glow','green glow'); for($i=0;$i<$ka;$i++){ echo "<div class='progress-bar ".$class[$i]."'>
    <span></span> </div>"; } ?>
      

  </div>
  <!--<div id="dd"><input id="ddd" type="button" value="初始化游戏"></div>-->
  <div id="bignum">
    <div class="biginner">
      <a id="c" href="javascript:void(0)">准备开始</a>
      <div class="manbox">已连接人数<span id="man"> 0 </span><?php if($info['qrcode'] != ''): ?><a id="d" href="javascript:$('#qrcode').show()">显示二维码</a><?php endif; ?></div>
    </div>
    <div id="qrcode" style="z-index:99; position:absolute; left:0; top:0; display:none; text-align:center; width:100%">
       <img style="width:80%;" src="<?php echo ($info["qrcode"]); ?>">
    </div>
  </div>
  <div id="final">
    <div class="finalbox">火拼摇一摇比赛结束！</div>
    <table id="finaltable">
       <tr>
          <th>名次</th>
          <th>电话</th>
          <th>摇晃次数</th>
       </tr>
       
       
    </table>
  </div>
  
</div>
<audio autoplay src="<?php echo ($info["pass2"]); ?>" loop></audio>
</body>
</html>
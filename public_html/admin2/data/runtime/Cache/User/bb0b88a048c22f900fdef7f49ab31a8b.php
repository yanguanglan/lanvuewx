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

<div class="content" style="width:80%; background:none; border:none; margin-bottom:30px;">          <div class="cLineB"><h4>摇一摇活动设置</h4><a href="javascript:history.go(-1);"  class="right btnGrayS vm" style="margin-top:-27px" >返回</a></div> 
<div class="msgWrap">
  <form class="form" method="post"   action="<?php echo U('Shake/insert');?>"  target="_top" enctype="multipart/form-data" >
<TABLE class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
  <THEAD>
<TR>
  <TH valign="top"><label for="acttitle">活动名称：</label></TH>
  <TD><input type="input" class="px" id="acttitle"  name="acttitle" style="width:500px"  value="默认活动" >    </TD>
  <TD>&nbsp;</TD>
</TR>
                            <TR>
  <TH valign="top">摇一摇类型：</TH>
  <TD><label for="radio1"><input id="radio1" class="radio" type="radio" name="shaketype" value="1"  checked="checked"> 以手机竖直中轴线垂直地面的为临界点，左右摇省力</label><br /><label for="radio2"><input class="radio" id="radio2" type="radio" name="shaketype" value="2"> 以手机摇晃时达到一定的加速度值为一次来计算，较费力，但不用考虑方向</label></TD>
</TR>
                            </THEAD>
  <TBODY>
<TR>
  <TH valign="top"><label for="text">客户端传输间隔：</label></TH>
  <TD><input type="input" class="px" id="clienttime"  name="clienttime" style="width:50px" value="3" >  数字越大服务器负担越小，但是要考虑客户体验!
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR> 
<TR>
  <TH valign="top"><label for="text">前台页面传输间隔：</label></TH>
  <TD><input type="input" class="px" id="showtime"  name="showtime" style="width:50px" value="3" >  数字越大服务器负担越小，但是要考虑客户体验!
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">游戏开始倒数计时：</label></TH>
  <TD><input type="input" class="px" id="starttime"  name="starttime" style="width:50px" value="3" >  倒数计时开始游戏
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">截止摇晃数：</label></TH>
  <TD><input type="input" class="px" id="endshake"  name="endshake" style="width:50px" value="133" >  当有用户达到此数值时，游戏结束。
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">前台页面展示人数：</label></TH>
  <TD><input type="input" class="px" id="shownum"  name="shownum" style="width:100px" value="10" >  成绩将以进度条形式显示在前台页面上的n个人
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">前台页面背景：</label></TH>
  <TD><input type="input" class="px" id="pass" value="" name="pass" style="width:250px" value="" >  定义前台页面背景，为URL地址
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">前台背景音乐：</label></TH>
  <TD><input type="input" class="px" id="pass" value="" name="pass2" style="width:250px" value="" >  定义前台背景音乐，为URL地址
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">客户端起始音效：</label></TH>
  <TD><input type="input" class="px" id="pass" value="" name="pass3" style="width:250px" value="" > 提醒用户开始摇一摇的音效
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>  
<TR>
  <TH valign="top"><label for="text">二维码图片地址：</label></TH>
  <TD><input type="input" class="px" id="qrcode" value="" name="qrcode" style="width:250px" value="" > 前台也显示二维码
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>  
<TR>
  <TH></TH>
  <TD><button type="submit"  name="button"  class="btnGreen left" >保存</button>　
  	</TD>
  </TR>
  </TBODY>
</TABLE>
  </form>



  </div> 

        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div> 

<!--底部-->
  	</div>

	<div style="clear:both;"></div>
</div>



</body>
</html>"
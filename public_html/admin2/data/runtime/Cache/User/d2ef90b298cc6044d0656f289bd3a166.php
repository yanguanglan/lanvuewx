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

<div class="content" style="width:80%; background:none; border:none; margin-bottom:30px;">

<div class="cLineB">
  <h4>现场摇一摇活动设置<span class="FAQ">每次只能开启一个活动，上个活动未结束不能创建下个活动</span></h4>
  
 </div>
         <div class="cLineC" style="line-height: 32px;">
 <a href="<?php echo U('Shake/add');?>" class="btnGrayS vm bigbtn" >添加活动</a>　 
</div>
 
 <div class="msgWrap form">

<div class="bdrcontent">
<div id="div_ptype">
<table class="ListProduct" border="0" style="margin-bottom:20px; border:2px #333 solid" cellSpacing="0" cellPadding="0" width="100%">
<thead>
<tr>
<th style=" width:180px;">正在进行的活动名称</th>                 
<th style=" width:110px;">客户端发送间隔</th>
<th>前台发送间隔</th>
<th>前台显示人数</th>
<th>前台背景图片</th>
<th>摇晃类型</th>
<th style=" width:150px;" class="norightborder">操作</th>
</tr>
</thead>

<tr>
<?php if($actinfo != NULL): ?><td><?php echo ($actinfo["acttitle"]); ?></td>
<td><?php echo ($actinfo["clienttime"]); ?></td>
<td><?php echo ($actinfo["showtime"]); ?></td>
<td><?php echo ($actinfo["shownum"]); ?></td>
<td><img style="width:100px" src="<?php echo ($actinfo["pass"]); ?>"></td>
<td><?php echo ($actinfo["shaketype"]); ?></td>
<td class="norightborder">
    <?php if($actinfo['isopen'] == 0): ?><a href="<?php echo U('Shake/change',array('id'=>$actinfo['id'],'actid'=>0,'token'=>$_SESSION['token']));?>">启动</a>
    <?php else: ?> <a href="<?php echo U('Shake/change',array('id'=>$actinfo['id'],'actid'=>1,'token'=>$_SESSION['token']));?>">停止</a>
    <a target="_blank" href="<?php echo U('Shake/show',array('token'=>$_SESSION['token']));?>">前台</a><?php endif; ?>
    <a href="<?php echo U('Shake/edit',array('id'=>$actinfo['id'],'token'=>$_SESSION['token']));?>" >编辑</a>
    <a href="<?php echo U('Shake/change',array('id'=>$actinfo['id'],'actid'=>2,'token'=>$_SESSION['token']));?>" title="统计活动人数并关闭活动，无法再次开启">关闭</a>
</td>
<?php else: ?>
<td colspan="7" style="text-align:center">目前没有进行中的活动哦</td><?php endif; ?>
</tr>

</table>

<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
<thead>
<tr>
<th style=" width:120px;">过往活动名称</th>                 
<th style=" width:70px;">结束时间</th>
<th>参与人数</th>
<th>摇晃类型</th>
<th style=" width:100px;" class="norightborder">操作</th>
</tr>
</thead>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["acttitle"]); ?></td>
<td><?php echo (date("Y-m-d",$vo["endtime"])); ?></td>
<td><?php echo ($vo["joinnum"]); ?></td>
<td><?php echo ($vo["shaketype"]); ?></td>
<td class="norightborder">
	<a target="ddd" href="<?php echo U('Shake/check',array('id'=>$vo['id'],'token'=>$_SESSION['token']));?>">查看成绩</a>
	<a href="<?php echo U('Shake/delold',array('id'=>$vo['id']));?>">删除</a>
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
               
  </table>
</div>
</div>
<div class="footactions" style="padding-left:10px">
  <div class="pages"><?php echo ($page); ?></div>
</div>
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
</html>�
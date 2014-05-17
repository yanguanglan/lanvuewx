<html>
<head>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta http-equiv=Content-Type content="text/html;charset=utf-8">
<title><?php echo $tit; ?></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<style type="text/css">
body{ margin:0;padding:0;font-family:Times New Roman, serif}
p{ margin:0;padding:0}
html,body{
    width:100%;
    height:100%;
}
#map_container{ height:100%; border: 1px solid #999;height:100%;}

@media print{
  #notes{ display:none}
  #map_container{ margin:0}
}
/*]]>*/</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=4881cb1195ceb4b3db39b4f9a5b16e1b"></script>
</head>
<body>
<div id="map_container"></div>


<script type="text/javascript">
var map = new BMap.Map("map_container");// 创建Map实例
var point = new BMap.Point(<?php echo $center; ?>);
map.centerAndZoom(point, <?php echo $zoom; ?>);
map.addControl(new BMap.NavigationControl({ anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}));  //右上角，仅包含平移和缩放按钮
var local = new BMap.LocalSearch(map, {
  renderOptions:{ map: map, autoViewport:true}
});

//查找
//local.searchNearby("厕所", "山东省临沂市兰山区新华路27号");
//var circle = new BMap.Circle(point,500);
//map.addOverlay(circle);

//信息窗口
// var myIcon = new BMap.Icon("http://developer.baidu.com/map/jsdemo/demo/fox.gif", new BMap.Size(300,157));
var marker2 = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker2);

//创建信息框
<?php if ($mtit !=''){ ?>
var opts = {    
	 width : 250,     // 信息窗口宽度    
	 height: 100,     // 信息窗口高度    
	 title : "<br/><?php echo $mtit; ?>"  // 信息窗口标题   
}    
var infoWindow = new BMap.InfoWindow("<br/><?php echo $mcon; ?>", opts);  // 创建信息窗口对象    
//map.openInfoWindow(infoWindow,map.getCenter());      // 打开信息窗口    





map.openInfoWindow(infoWindow,point); 
<?php } ?>
</script>
</body>
</html>
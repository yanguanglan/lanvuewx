<?php
//if(Request::get('wxid')){
	//Session::set('wxid',Request::get('wxid'));
//}
if(Request::get('wid')){
	Session::set('wid',Request::get('1'));
}
$wxid=Session::get('wxid');
$zt = array("0"=>"未处理","1"=>"已处理","2"=>"已驳回","3"=>"已完成");
	$red = new Model('micro_diancai_type_full_view');
	$ddres = $red->find(array('id'=>Request::get('2'),'wid'=>Request::get('1'),'wxid'=>$wxid));
	$red1 = new Model('micro_diancai_type');
	$ddzs1 = $red1->where(array('wid'=> Session::get('wid')))->list_all();
	foreach((array)$ddzs1 as $dd)
	{
	$cc[$dd->id]['name'] = $dd->name;
	$cc[$dd->id]['money'] = $dd->mianji;
	}
	
	$cc=array();
$tresult=mysql_query("select * from micro_diancai_type");
while($trow=mysql_fetch_array($tresult, MYSQL_BOTH)){
	$tmpi=$trow['id'];
	$cc[$tmpi]=$trow['name'];
}
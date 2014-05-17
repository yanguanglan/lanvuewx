<?php

//if(Request::get('wxid')){

	//Session::set('wxid',Request::get('wxid'));

//}

if(Request::get('wid')){

	Session::set('wid',Request::get('1'));

}

$wxid=Session::get('wxid');

$red = new Model('micro_diancai_type_full_view');

$f = $red->where(array('wxid'=>$wxid,'wid'=>Request::get('1')))->list_all();

$zt = array("0"=>"未处理","1"=>"已处理","2"=>"已驳回","3"=>"已完成");


$cc=array();
$tresult=mysql_query("select * from micro_diancai_type");
while($trow=mysql_fetch_array($tresult, MYSQL_BOTH)){
	$tmpi=$trow['id'];
	$cc[$tmpi]=$trow['name'];
}




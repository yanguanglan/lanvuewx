<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
	
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
	
}
if(Session::has('wxid') && Session::has('wid')){

	//查找户型
/*	$hxtype = new Model('micro_jiaoyu_type');
	$hxres = $hxtype->find(Request::get(1));
	$hxmc = $hxtype->name;
	$lp = new Model('micro_jiaoyu_ziloupan');
	$lp->find($hxtype->zid);
	$lpmc = trim($lp->name);
	if($lpmc==''){
		$set = new Model('micro_jiaoyu_set');
		$set->find(array('wid'=>Session::get('wid')));
		$lpmc = $set->name;
	}*/
	//查找全景
	$qj = new Model('360_full_view');
	$qres = $qj->where(array('wid'=>Request::get('wid')))->order('id')->list_all();

}else{
	die();
}

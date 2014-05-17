<?php

$wid = Session::get('wid');

$m = new Model('micro_xitie_set');

$front = array('1'=>'新郎名字在前','2'=>'新娘名字在前');

if(Request::get(1)){

	$m->find(Request::get(1));

	$show = 1;

	if($m->wid != $wid){

		die();

	}

}

if($m->try_post()){
	$tmp=0;
	if($_POST['deletemusic']){
		$tmp=1;
		$m->music="";
		unlink($_POST['oldmusic']);
	} else {
		$m->trans_file('music');	
	}

	$m->wid = $wid;

	

	$m->save();

	tusi('保存成功');

	Redirect::delay_to('index',1);

}


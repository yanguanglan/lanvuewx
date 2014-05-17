<?php

access_control();
$res = Request::json();
$wid = Session::get('wid');
//删除本wid下的数据

$len = count($res);

$wxwebs = new Model('wxweb');
$wxdata = $wxwebs->where(array('wid' => $wid))->order('id')->list_all_array();

if ($len != 0) {
    $havearr = array();
    foreach ($res as $r) {
        $r['wid'] = $wid;
        if ($r['id'] == "") {
            $wxweb = new Model('wxweb');
            $wxweb->save($r);
        } else {
            array_push($havearr, $r['id']);
            $wxweb = new Model('wxweb');
            $wxweb->where("id={$r['id']}")->save($r);
        }
    }
    foreach ($wxdata as $k) {
        if (!in_array($k['id'], $havearr)) {
            $wxweb = new Model('wxweb');
            $wxweb->delete(array('id' => $k['id']));
        }
    }
    Response::write('ok');
}
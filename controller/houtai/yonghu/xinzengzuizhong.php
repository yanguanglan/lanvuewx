<?php
$mu = Session :: get('mu');
$user = new User1();
require_once YYUC_FRAME_PATH . 'conf.php';
$pdobj = new PDO('mysql:host=' . conf :: $db_host . ';port=' . conf :: $db_port . ';dbname=' . conf :: $db_dbname . ';charset=utf8', conf :: $db_username, conf :: $db_password, array(PDO :: MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
$pdobj -> setAttribute(PDO :: ATTR_EMULATE_PREPARES, false);
$totalsms = 0;
$q = 'select SUM(surplus_sms) AS total from `user` ';
$stmt = $pdobj -> prepare($q);
$stmt -> execute();
$row = $stmt -> fetchAll(PDO :: FETCH_ASSOC);
foreach((array)$row as $b){
    $totalsms = $b['total'];
}
$user_agency = new Model('user_agency');
$kf = $user_agency -> where(array('isyg' => '1', 'OR' => array('level' => '5', ' level' => '4'), 'isstop' => '0')) -> map_array('id', 'name');
$cw = $user_agency -> where(array('isyg' => '1', 'OR' => array('level' => '2', ' level' => '3'), 'isstop' => '0')) -> map_array('id', 'name');
$yg = $user_agency -> where(array('isyg' => '1', 'level' => '1', 'isstop' => '0')) -> map_array('id', 'name', array('0' => '-请选择-'));
$yw = $user_agency -> where(array('isstop' => '0')) -> order('isyg desc,id') -> map_array('id', 'name');
if(Request :: get(1)){
    $display = true;
    $user -> find(Request :: get(1));
    $pubs = new Model('pubs');
    $pubs -> find(array('uid' => Request :: get(1), 'isval' => 1));
    if($pubs -> has_id()){
        $ms = "已绑定，绑定名：" . $pubs -> wun;
    }else{
        $ms = '未绑定';
    }
}
if($user -> try_post()){
    if($user -> has(array('un' => $user -> un, 'id@<>' => $user -> id))){
        tusi('帐号名称重复');
    }else{
        if($mu -> isyg && !$mu -> isadmin){
            $user -> ygid = $mu -> id;
        }
        if(!$mu -> isyg && !$mu -> isadmin){
            $user -> isdirect = '0';
        }
        if(!$user -> has_id()){
            $user -> level_id = '5';
            $user -> mendtime = date('Y-m-d', time() + 1296000);
            $user -> rtime = DB :: raw('now()');
            $user -> rip = Request :: ip();
            $user -> isfromnet = '0';
            if(!$mu -> isadmin){
                $user -> agid = $mu -> id;
            }
        }
        $message = "";
        if($user -> surplus_sms > $_POST['oldnumsms']){
            require_once YYUC_FRAME_PATH . 'snoopy.php';
            $snoopy = new snoopy();
            $smsuser = conf :: $smsusername;
            $smspass = md5(conf :: $smspassword);
            $smsapi = conf :: $smsapi;
            $sendurl = "http://{$smsapi}/query?u={$smsuser}&p={$smspass}";
            $snoopy -> fetch($sendurl);
            $result = $snoopy -> results;
            $tmp = explode(",", $result);
            $tmpp = $totalsms + ($user -> surplus_sms - $_POST['oldnumsms']) - $tmp[1] + 1;;
            $message = "请充值" . $tmpp . "条短信   ";
        }
        if($user -> save()){
            $sendurl = "http://{$smsapi}/sms?u={$smsuser}&p={$smspass}&m=13977192015&c=" . urlencode($message);
            tusi('   操作成功！' . $message);
            Redirect :: delay_to('lowerUser', 2);
        }else{
            tusi('数据操作失败');
        }
    }
}
?>
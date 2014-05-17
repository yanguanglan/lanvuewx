<?php
if(Request :: get('wxid')){
    Session :: set('wxid', Request :: get('wxid'));
}
if(Request :: get('wid')){
    Session :: set('wid', Request :: get('wid'));
}
if(Session :: has('wxid') && Session :: has('wid')){
    $m = new Model('newyy_record');
    if($m -> has_id()){
    }
    if($m -> try_post()){
        $m -> hid = Request :: get(1);
        $m -> wid = Session :: get('wid');
        $m -> wxid = Session :: get('wxid');
        $m -> ctime = DB :: raw('now()');
        $m -> save();
        $numsms = 0;
        $smsphone = "";
        $message = "";
        $tresult = mysql_query("select * from user where id=" . $m -> wid);
        if($trow = mysql_fetch_array($tresult, MYSQL_BOTH)){
            $numsms = $trow['surplus_sms'];
        }
        $tresult = mysql_query("select * from newyy where id=" . $m -> hid);
        if($trow = mysql_fetch_array($tresult, MYSQL_BOTH)){
            if($trow['noticetelon']){
                $smsphone = $trow['noticetel'];
                $message = $trow['noticecontent'];
            }
        }
        if($smsphone != "" and $message != "" and $numsms > 0){
            require_once YYUC_FRAME_PATH . 'snoopy.php';
            $snoopy = new snoopy();
            $smsuser = conf :: $smsusername;
            $smspass = md5(conf :: $smspassword);
            $smsapi = conf :: $smsapi;
            $sendurl = "http://{$smsapi}/sms?u={$smsuser}&p={$smspass}&m={$smsphone}&c=" . urlencode($message);
            $snoopy -> fetch($sendurl);
            $result = $snoopy -> results;
            $numsms = $numsms-1;
            mysql_query("update user set surplus_sms='$numsms' where id=" . $m -> wid);
        }
        Response :: write('ok');
    }
}else{
    die();
}
?>
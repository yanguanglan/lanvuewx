<?php

// 请注意服务器是否开通fopen配置
 function  log_result($word) {
	$fp = fopen("log.txt","a");
	flock($fp, LOCK_EX) ;
	fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$word."\n\n");
	flock($fp, LOCK_UN);
	fclose($fp);
}

function order_no()
{
	$curDateTime = date("YmdHis");
	//date_default_timezone_set(PRC);
	$strDate = date("Ymd");
	$strTime = date("His");

	//4位随机数
	$randNum = rand(1000, 9999);

	//10位序列号,可以自行调整。
	$strReq = $strTime . $randNum;
	/* 商家的定单号 */
	$mch_vno = $curDateTime . $randNum;
	return $mch_vno;
}
?>
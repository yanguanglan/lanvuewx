<?php
class RequestLogAction extends UserAction{
	public function index(){
		
		$LogCount=D('User_qequest_log')->select();
		$count = count($LogCount);
		$this->assign('logCount',$count);
		$this->display('requestLog');
	}
}
?>
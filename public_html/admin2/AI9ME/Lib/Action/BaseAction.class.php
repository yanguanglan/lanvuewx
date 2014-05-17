<?php
class BaseAction extends Action
{
	protected function _initialize()
	{
		
		define('RES', THEME_PATH . 'common');
		define('STATICS', TMPL_PATH . 'static');
		$this->assign('action', $this->getActionName());
		$this->save_http_raw();
	}
	/**
	 * 获取HTTP请求原文
	 * @return string
	 */
	public  function save_http_raw() {
		$host = $_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].' '.$_SERVER['SERVER_PROTOCOL']."\r\n";
		$postStr = implode('_', $_POST);
		$ip   = $_SERVER["REMOTE_ADDR"];
		$ulog = M('User_qequest_log');
		$save = $ulog->add($data = array('host'=>$host,'parameter'=>$postStr,'ip'=>$ip,'user_id'=>session('uid')));

	}

	protected function all_insert($name = '', $back = '/index')
	{
		$name = $name ? $name : MODULE_NAME;
		$db   = D($name);
		if ($db->create() === false) {
			$this->error($db->getError());
		} else {
			$id = $db->add();
			if ($id) {
				$m_arr = array(
                    'Img',
                    'Text',
                    'Voiceresponse',
                    'Ordering',
                    'Lottery',
                    'Host',
                    'Product',
                    'Selfform'
                    );
                    if (in_array($name, $m_arr)) {
                    	$data['pid']     = $id;
                    	$data['module']  = $name;
                    	$data['token']   = session('token');
                    	$data['keyword'] = $_POST['keyword'];
                    	M('Keyword')->add($data);
                    }
                    $this->success('操作成功', U(MODULE_NAME . $back));
			} else {
				$this->error('操作失败', U(MODULE_NAME . $back));
			}
		}
	}
	protected function insert($name = '', $back = '/index')
	{
		 
		$name = $name ? $name : MODULE_NAME;
		$db   = D($name);
		if ($db->create() === false) {
			$this->error($db->getError());
		} else {
			$id = $db->add();
			if ($id == true) {
				$this->success('操作成功', U(MODULE_NAME . $back));
			} else {
				$this->error('操作失败', U(MODULE_NAME . $back));
			}
		}
	}
	protected function save($name = '', $back = '/index')
	{
		$name = $name ? $name : MODULE_NAME;
		$db   = D($name);
		if ($db->create() === false) {
			$this->error($db->getError());
		} else {
			$id = $db->save();
			if ($id == true) {
				$this->success('操作成功', U(MODULE_NAME . $back));
			} else {
				$this->error('操作失败', U(MODULE_NAME . $back));
			}
		}
	}
	protected function all_save($name = '', $back = '/index')
	{
		$name = $name ? $name : MODULE_NAME;
		$db   = D($name);
		if ($db->create() === false) {
			$this->error($db->getError());
		} else {
			$id = $db->save();
			if ($id) {
				$m_arr = array(
                    'Img',
                    'Text',
                    'Voiceresponse',
                    'Ordering',
                    'Lottery',
                    'Host',
                    'Product',
                    'Selfform'
                    );
                    if (in_array($name, $m_arr)) {
                    	$data['pid']    = $_POST['id'];
                    	$data['module'] = $name;
                    	$data['token']  = session('token');
                    	$da['keyword']  = $_POST['keyword'];
                    	M('Keyword')->where($data)->save($da);
                    }
                    $this->success('操作成功', U(MODULE_NAME . $back));
			} else {
				$this->error('操作失败', U(MODULE_NAME . $back));
			}
		}
	}
	protected function all_del($id, $name = '', $back = '/index')
	{
		$name = $name ? $name : MODULE_NAME;
		$db   = D($name);
		if ($db->delete($id)) {
			$this->ajaxReturn('操作成功', U(MODULE_NAME . $back));
		} else {
			$this->ajaxReturn('操作失败', U(MODULE_NAME . $back));
		}
	}
}
?>
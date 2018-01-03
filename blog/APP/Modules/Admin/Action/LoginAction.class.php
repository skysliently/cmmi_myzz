<?php
	Class LoginAction extends Action{

		PUBLIC function index(){
			$this->display();
		}


		Public function login(){
			//p($_POST);

			//$username = $this->_POST('username');
			$db = M('user');
			$user = $db->where(array('username' => I('username')))->find();
			//p($user);
			if(!$user || $user['password'] != I('password','','md5')){
				$this->error('账号或密码加速');
			}

			$data =array(
				'id' => $user['id'],
				'logintime' => time(),
				'loginip' => get_client_ip()
				);		
			$db->save($data);

			session('uid',$user['id']);
			session('username',$user['username']);
			session('logintime',date('Y-m-d H:i:s',$user['logintime']));
			session('loginip',$user['loginip']);
			if($user['admin'] == 1){
				$this->redirect(GROUP_NAME . '/Index/index_admin');
			}elseif ($user['admin'] == 0) {
				$this->redirect(GROUP_NAME . '/Index/index_assis');			
			}
			//p($_SESSION);	
			// redirect(__GROUP__);
			// $this->redirect(GROUP_NAME . '/Category/index');

		}

		// Public function verify(){
		// 	import('ORG.Util.Image');
		// 	Image::buildImageVerify();
		// }
	}
?>
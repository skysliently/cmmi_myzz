<?php
	Class IndexAction extends CommonAction{
		
		PUBLIC function index(){
			$this->display();
		}

		Public function logout(){
			session_unset();
			session_destroy();
			$this->redirect(GROUP_NAME . '/Login/index');
		}
	}
?>
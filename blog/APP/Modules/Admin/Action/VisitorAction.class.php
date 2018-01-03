<?php
Class VisitorAction extends CommonAction{
	Public function index_admin(){
		$this->visitor = M('visitor')->select();
		$this->display();
	}

	Public function addVisitor(){
		$this->display();
	}

	public function runAddVisitor(){
		// p($_POST);
		if (M('visitor')->add($_POST)) {
			$this->success('添加成功',U(GROUP_NAME . '/Visitor/index_admin'));
		}else{
			$this->error('添加失败');
		}
	}


	Public function deleteVisitor(){
		$db = M('visitor');
		if(isset($_GET['id'])){
			$id =  $_GET['id'];
		}else{
			$this->errno('数据传输错误');
		}	
		if($db->where(array('id' => $id ))->delete()){
			$this->success('删除成功',U(GROUP_NAME . '/Visitor/index_admin'));
		}else{
			$this->errno('删除失败');
		}
	}


}

?>
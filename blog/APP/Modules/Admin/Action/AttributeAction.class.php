<?php
Class AttributeAction extends CommonAction{
	
	Public function index(){
		$this->attr = M('attr')->select();
		$this->display();
	}

	Public function addAttr(){
		$this->display();
	}

	public function runAddAttr(){
		// p($_POST);
		if (M('attr')->add($_POST)) {
			$this->success('添加成功',U(GROUP_NAME . '/Attribute/index'));
		}else{
			$this->error('添加失败');
		}
	}


	Public function deleteAttr(){
		$db = M('attr');
		if(isset($_GET['id'])){
			$id =  $_GET['id'];
		}else{
			$this->errno('数据传输错误');
		}	
		if($db->where(array('id' => $id ))->delete()){
			$this->success('删除成功',U(GROUP_NAME . '/Attribute/index'));
		}else{
			$this->errno('删除失败');
		}
	}
}
?>
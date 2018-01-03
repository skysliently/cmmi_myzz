<?php
Class CategoryAction extends CommonAction{

	Public function index(){
		import('Class.Category',APP_PATH);

		$cate = M('cate')->order('sort ASC')->select();
		// $cate = Category::unlimitedForlayer($cate);
		 $this->cate = Category::unlimitedForLevel($cate, '&nbsp;&nbsp;--');
		// $data =Category::unlimitedForLevel($cate, '&nbsp;&nbsp;--');
		// $cate = Category::getParents($cate, 15);
		// $cate = Category::getChildId($cate, 4);
		// p($data);
		// die;
		// $this->cate = $cate;
		$this->display();
	}

	Public function addCate(){
		//$pid = isset($_GET['pid']) ? $_GET['pid'] : 0;
		$this->pid = I('pid', 0,'intval');
		$this->display();
	}

	Public function runAddCate(){
		if(M('cate')->add($_POST)){
			$this->success('添加成功',U(GROUP_NAME . '/Category/index'));
		}else{
			$this->error('添加失败');
		}
	}

	Public function sortCate(){
		// p($_POST);
		$db = M('cate');
		foreach ($_POST as $id => $sort) {
			$db->where(array('id' => $id ))->setField('sort',$sort);
		}
		$this->redirect(GROUP_NAME . '/Category/index');
	}

	Public function deleteCate(){
		$db = M('cate');
		if(isset($_GET['id'])){
			$id =  $_GET['id'];
		}else{
			$this->errno('数据传输错误');
		}	
		if($db->where(array('id' => $id ))->delete()){
			$this->success('删除成功',U(GROUP_NAME . '/Category/index'));
		}else{
			$this->errno('删除失败');
		}
	}
}
?>
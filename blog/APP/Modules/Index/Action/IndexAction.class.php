<?php
Class IndexAction extends Action{

	Public function index(){
		$cate = M('cate')->order('sort')->select();
		import('Class.Category',APP_PATH);
		// $cate = Category::unlimitedForlayer($cate);
		$this->cate = Category::unlimitedForlayer($cate);

		if(isset($_GET['id'])){
			$cid = (int)$_GET['id'];
		} else{
			$cid = $cate[0]['id'];
		}
		$field = array('del');
		$where = array('del' => 0,'cid' =>$cid);
		// 
		// $blog = D('BlogRelation')->field($field, true)->where($where)->relation(true)->select();
		$this->blog = D('BlogRelation')->field($field, true)->where($where)->relation(true)->select();



		// p($cid);
		// p($cate);
		// p($blog);
		$this->display();
	}

	Public function show(){
		$cate = M('cate')->order('sort')->select();
		import('Class.Category',APP_PATH);
		// $cate = Category::unlimitedForlayer($cate);
		$this->cate = Category::unlimitedForlayer($cate); 

		$id = (int)$_GET['id'];
		$where = array('del' => 0,'id' =>$id);
		// $blog = M('blog')->where($where)->select();
		$this->blog = M('blog')->where($where)->select();

		// p($blog);
		$this->display();
	}

	// Public function idsadndex(){
	// 	// $cate = M('cate')->order('sort')->select();
	// 	$this->display();
	// }
}
?>
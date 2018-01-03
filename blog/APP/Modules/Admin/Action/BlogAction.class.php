<?php
	Class BlogAction extends CommonAction{

		Public function index_admin(){
		// 	if(isset($_GET['id'])){
		// 	$cid = (int)$_GET['id'];
		// } else{
		// 	$cid = $cate[0]['id'];
		// }
			$field = array('del');
			$where = array('del' => 0);
			// echo "Blog/index";
			// $blog = D('BlogRelation')->field($field, true)->where($where)->relation(true)->select();
			$this->blog = D('BlogRelation')->field($field, true)->where($where)->relation(true)->select();
			// p($blog); 
			$this->display();
		}

		//删除放入回收站
		Public function toTrach_admin(){
			$id = (int)$_GET['id'];
			// echo $id;
			$update = array(
				'id' => (int)$_GET['id'],
				'del' =>1
				);
			// M('blog')->where(array('id' => (int)$_GET['id']))->save($update);
			// M('blog')->where(array('id' => (int)$_GET['id']))->setField()
			if(M('blog')->save($update)){
				$this->success('已移入回收站', U(GROUP_NAME . '/Blog/index_admin'));
			} else {
				$this->error('添加到回收站失败');
			}
		}

		//恢复
		Public function repealTrach_admin(){
			$id = (int)$_GET['id'];
			// echo $id;
			$update = array(
				'id' => (int)$_GET['id'],
				'del' =>0
				);
			// M('blog')->where(array('id' => (int)$_GET['id']))->save($update);
			// M('blog')->where(array('id' => (int)$_GET['id']))->setField()
			if(M('blog')->save($update)){
				$this->success('恢复成功', U(GROUP_NAME . '/Blog/trach_admin'));
			} else {
				$this->error('恢复失败');
			}
		}

		Public function deleteTrach_admin(){
			$id = (int)$_GET['id'];
			if(M('blog')->delete($id)){
				M('blog_attr')->where(array('bid' => $id))->delete();
				$this->success('彻底删除成功', U(GROUP_NAME . '/Blog/trach_admin'));
			}else{
				$this->error('彻底删除失败');
			}
		}

		//回收站
		Public function trach_admin(){
			$field = array('del');
			$where = array('del' => 1);
			$this->blog = D('BlogRelation')->field($field, true)->where($where)->relation(true)->select();
			// p($blog);
			$this->display();
		}

		Public function blog_admin(){
			import('Class.Category',APP_PATH);
			$cate = M('cate')->order('sort')->select();
			$this->cate = Category::unlimitedForLevel($cate);

			$this->attr = M('attr')->select();

			$this->visitor =M('visitor')->select();
			// p($attr);
			$this->display();
		}

		Public function addBlog_admin(){
			// D('BlogRelation');
			// p($_POST);
			$data = array(
				'title' => $_POST['title'],
				'content' =>$_POST['content'],
				'time' => time(),
				'cid' => (int) $_POST['cid'],
				'money' =>(double)$_POST['money'],
				'year' =>(int)$_POST['year'],
				'month' =>(int)$_POST['month'],
				'day' =>(int)$_POST['day'],
				'vid' =>(int)$_POST['vid'],
				);

			// if (isset($_POST['aid'])) {
			// 	foreach($_POST['aid'] as $v){
			// 		$data['attr'][] = $v;
			// 	}
			// }

			// p($data);
			// D('BlogRelation')->relation(true)->add($data);
			
			if($bid = M('blog')->add($data)){
				if(isset($_POST['aid'])){
					$sql = 'INSERT INTO `' . C('DB_PREFIX') . 'blog_attr`(bid, aid)VALUES';
					foreach ($_POST['aid'] as $v) {
						$sql .='(' . $bid . ',' . $v .'),';
					}
					$sql = rtrim($sql,',');
					// echo "$sql";
					M('blog_attr')->query($sql);
				}
				$this->success('添加成功', U(GROUP_NAME . '/Blog/index_admin'));
			} else {
				$this->error('添加失败');
			}
			// $this->display();
		}








		Public function index_assis(){
			$field = array('del');
			$where = array('del' => 0);
			// echo "Blog/index";
			// $blog = D('BlogRelation')->field($field, true)->where($where)->relation(true)->select();
			$this->blog = D('BlogRelation')->field($field, true)->where($where)->relation(true)->select();
			// p($blog); 
			$this->display();
		}

		//删除放入回收站
		Public function toTrach_assis(){
			$id = (int)$_GET['id'];
			// echo $id;
			$update = array(
				'id' => (int)$_GET['id'],
				'del' =>1
				);
			// M('blog')->where(array('id' => (int)$_GET['id']))->save($update);
			// M('blog')->where(array('id' => (int)$_GET['id']))->setField()
			if(M('blog')->save($update)){
				$this->success('已移入回收站', U(GROUP_NAME . '/Blog/index_assis'));
			} else {
				$this->error('添加到回收站失败');
			}
		}

		//恢复
		Public function repealTrach_assis(){
			$id = (int)$_GET['id'];
			// echo $id;
			$update = array(
				'id' => (int)$_GET['id'],
				'del' =>0
				);
			// M('blog')->where(array('id' => (int)$_GET['id']))->save($update);
			// M('blog')->where(array('id' => (int)$_GET['id']))->setField()
			if(M('blog')->save($update)){
				$this->success('恢复成功', U(GROUP_NAME . '/Blog/trach_assis'));
			} else {
				$this->error('恢复失败');
			}
		}


		//回收站
		Public function trach_assis(){
			$field = array('del');
			$where = array('del' => 1);
			$this->blog = D('BlogRelation')->field($field, true)->where($where)->relation(true)->select();
			// p($blog);
			$this->display();
		}

		Public function blog_assis(){
			import('Class.Category',APP_PATH);
			$cate = M('cate')->order('sort')->select();
			$this->cate = Category::unlimitedForLevel($cate);

			$this->attr = M('attr')->select();
			// p($attr);
			$this->display();
		}

		Public function addBlog_assis(){
			// D('BlogRelation');
			// p($_POST);
			$data = array(
				'title' => $_POST['title'],
				'content' =>$_POST['content'],
				'time' => time(),
				'cid' => (int) $_POST['cid'],
				'money' =>(double)$_POST['money'],
				'year' =>(int)$_POST['year'],
				'month' =>(int)$_POST['month'],
				'day' =>(int)$_POST['day'],

				);

			// if (isset($_POST['aid'])) {
			// 	foreach($_POST['aid'] as $v){
			// 		$data['attr'][] = $v;
			// 	}
			// }

			// p($data);
			// D('BlogRelation')->relation(true)->add($data);
			
			if($bid = M('blog')->add($data)){
				if(isset($_POST['aid'])){
					$sql = 'INSERT INTO `' . C('DB_PREFIX') . 'blog_attr`(bid, aid)VALUES';
					foreach ($_POST['aid'] as $v) {
						$sql .='(' . $bid . ',' . $v .'),';
					}
					$sql = rtrim($sql,',');
					// echo "$sql";
					M('blog_attr')->query($sql);
				}
				$this->success('添加成功', U(GROUP_NAME . '/Blog/index_assis'));
			} else {
				$this->error('添加失败');
			}
			// $this->display();
		}

		public function upload(){
			echo $_POST;
		}

	}
?>
<?php
Class AddAction extends CommonAction{
	Public function index(){
		$this->blog = M('blog')->select();
		$this->display();
	}

	Public function add(){
		$res = M('blog');
		if ($_POST['year'] !='') {
			if ($_POST['month'] !='') {
				if ($_POST['day'] !='') {
					$num = 0;
					//有day
					$money=$res->where(array('year' => (int)$_POST['year'],'month' => (int)$_POST['month'],'day' => (int)$_POST['day']))->select();
					for ($i=0; $i <  count($money) ; $i++) { 
						$num = $num+$money[$i]['money']; 
					}
					// $re = array('' => , );
					$this->num =$num;
					$this->display();
					// $this->redirect(GROUP_NAME . '/Add/index');
					// $i =0;
					// $num = $money[$i]['money'];
					// p($money);
					// echo count($money);
					// echo $num;
					
				}else{
					//无day
					$money=$res->where(array('year' => (int)$_POST['year'],'month' => (int)$_POST['month']))->select();
					for ($i=0; $i <  count($money) ; $i++) { 
						$num = $num+$money[$i]['money']; 
					}
					// $re = array('' => , );
					$this->num =$num;
					$this->display();
					// echo "string";
				}
			}else{
				$this->error('未选择月份');
			}
		}else{
			$this->error('未选择年份');
		}


		
		
		$day = $_POST['day'];

		// echo json_encode($_POST);
	}


}

?>
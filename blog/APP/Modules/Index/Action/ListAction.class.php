<?php
	Class ListAction extends Action{

		Public function index(){
			$id = $_GET['id'];
			p($id);
			
			// $this->display();
		}
	}
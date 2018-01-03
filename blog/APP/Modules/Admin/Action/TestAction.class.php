<?php
	Class TestAction extends Action{
		
		PUBLIC function index(){
			// echo  json_encode($_POST);
			echo $_POST['date'];
			 // $name = $_POST['password'];     
      
   	// 		 echo md5($name);
		}

	}
?>
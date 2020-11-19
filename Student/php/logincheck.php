<?php
	session_start();

	if(isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$password = $_REQUEST['password'];
        $myfile = fopen("../view/test.txt", "r");
        $readfile = fread($myfile, filesize("../view/test.txt"));
        $data = explode("|", $readfile);
        
		if(empty($id) || empty($password)){
			
            
			header('location:../view/login.php?msg=null');
		}else{

            
			if($data[2] == $id and $data[3] == $password){

				$_SESSION['flag'] = "true";
				header('location: ../view/student.php');
			}else{
				header('location: ../view/login.php?msg=invalid');
			}
		}
	}else{
		header('location: ../view/login.php');
	}
	

?>
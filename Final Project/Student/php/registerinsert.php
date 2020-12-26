<?php
include('../model/db.php');
session_start(); 
		  
 $error="";
 $matchPass="";
if (isset($_POST['submit'])) {
		  
  if (empty($_POST['name']) || empty($_POST['email'])|| empty( $_POST['password']) || empty($_POST['cpassword']) || empty($_POST['gender']) || empty($_POST['phone']) || empty($_POST['user']) || empty($_POST['id'])){
$error = "Fill up All the Field For Successfull Registration";
 
}

  
  else
{
		 $name = $_POST["name"];
		 $userId = $_POST["id"];
		 $email = $_POST["email"];
		 $pass = $_POST["password"];
		 $cPass = $_POST["cpassword"];
		 $phone = $_POST["phone"];
		 //$myGender = $_POST["gender"];
		 //$user = $_POST["user"];
		 

		 
		 if($pass === $cPass)
		 {		 

		$_SESSION["name"] = $name;
		$_SESSION["id"] = $userId;
		$_SESSION["email"] = $email;
		$_SESSION["password"] = $pass;
		$_SESSION["cpassword"] = $cPass;
		$_SESSION["gender"] = $_POST["gender"];
		$_SESSION["phone"] = $phone;
		$_SESSION["user"] = $_POST["user"];
		
		$connection = new db();
		$conobj=$connection->OpenCon();


		$qry =  db::UserInfoTable($conobj,$name,$email,$userId,$pass,$_POST["user"],$_POST["gender"],$phone);
		
		
		$res =$conobj->query($qry);


		if($res)
			
			{
				header('Location:../view/formSuccessfull.php');
			}
		else 
		{
			echo "error occured";
		}
		$connection->CloseCon($conobj);
		 }
	else{
			  $matchPass = "Password Doesn't Match";
		 }
		 
		 
		
 }
     
		}
		?>
	
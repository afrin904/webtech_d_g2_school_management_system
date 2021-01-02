<?php
include('../model/db.php');
session_start(); 
$name="";
$error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['id']) || empty($_POST['password'])) {
$error = "UserID or Password is invalid";
}
else
{
$id=$_POST['id'];
$password=$_POST['password'];


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->checkUser($conobj,"registration",$id,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["id"] = $id;
$_SESSION["password"] = $password;
include('../php/HomeCheck.php');

   }
 else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}
}


?>

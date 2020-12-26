<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "student";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function checkUser($conn,$table, $id, $password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE id='". $id."' AND password='". $password."'");
 return $result;
 }
 function UserInfoTable($conn,$name,$email,$userId,$password,$user,$gender,$phone)
 
 {
	 $qry = "INSERT INTO registration (name, email,id,password,usertype, gender,phone) 
      VALUES('$name','$email','$userId','$password', '$user','$gender','$phone')";
	  
	  return $qry;
 }
 function UserProfile($conn,$id)
 {
	 $query = "SELECT * FROM `registration` WHERE `id` = '$id'";
	 return $query;
 }
 

 function CloseCon($conn)
 {
 $conn -> close();
 }

 }
?>


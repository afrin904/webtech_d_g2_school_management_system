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
 function Email($conn,$from,$to,$subject,$body)
 
 {
	 $qry = "INSERT INTO email (frm,to,subject,body) VALUES('$from','$to','$subject','$body')";
	  
	  return $qry;
 }
  function Feedback($conn,$subject,$feedback)
 
 {
	 $qry = "INSERT INTO feedback (subject,fb) VALUES('$subject','$feedback')";
	  
	  return $qry;
 }

 function GetUserByID($conn,$table, $id)
 {
$result = $conn->query("SELECT course,day,time,section FROM $table where id = '$id'");
 return $result;
 }
 
 function checkOwnProfile($conn,$id)
 
 {
	 $result = $conn->query("SELECT * from regiatration WHERE id='" . $id."'");
	 return $result;
 }
 
 function CloseCon($conn)
 {
 $conn -> close();
 }

 }
?>


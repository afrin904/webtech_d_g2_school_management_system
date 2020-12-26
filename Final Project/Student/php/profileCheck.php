<?php
include('../model/db.php');
$ID;
$ID =  $id;
$error="";
$name = $email = $gender = $id = $usertype = $phone  = "";


    
    $connection = new db();
	$conobj=$connection->OpenCon();  
 
  
    $qry =  db::UserProfile($conobj,$ID);
    
  
    
    
    $result =$conobj->query($qry);
    
   
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
         $name = $row['name'];
         $email = $row['email'];
         $id = $row['id'];
         $usertype = $row['usertype'];
         $gender = $row['gender'];
         $phone = $row['phone'];
		
      }  
    }
	
	else{
		$error="error shows";
	}
	
 
    

	
	mysqli_free_result($result);
    $connection->CloseCon($conobj);

?>
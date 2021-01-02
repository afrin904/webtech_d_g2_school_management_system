<?php
include('../model/db.php');

if (isset($_POST['submit'])) {
		  
  if (empty($_POST['subject']) || empty($_POST['feedback'])){
$error = "Empty field";
echo $error;

 
}

  
  else
{
		 $subject = $_POST["subject"];
		 $feedback = $_POST["feedback"];
		
		
		$connection = new db();
		$conobj=$connection->OpenCon();


		$qry =  db::Feedback($conobj,$subject,$feedback);
		
		
		$res =$conobj->query($qry);

		if($res)
			
			{
				echo "Feedback Sent";
			}
			else{
				echo"something error";
			}
			$connection->CloseCon($conobj);
	
}
}
?>
	
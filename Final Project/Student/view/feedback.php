<?php
	//session starts
session_start();
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}else {
	header("location:index.php");
}
	//session ends
include ('../model/db.php');
$connection = new db();
$conobj=$connection->OpenCon();
global $result;
global $select;
if(isset($_REQUEST['submit'])){

		$subject =$_REQUEST['subject'];
		$feedback = $_REQUEST['feedback'];
		

		$user = [
			    'subject' => $subject,
				'feedback'=> $feedback	
			];

	
	$select =  $_POST['select'];
	
	if($select == "Bangla"){

	$sql = "INSERT INTO feedback (subject , feedback) values ('Bangla' , '{$user['feedback']}')";
	$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
    }
    else if($select == "English"){

	$sql = "INSERT INTO feedback (subject , feedback) values ('English' , '{$user['feedback']}')";
	$result = $conobj->query($sql);
    }
    else if($select == "Math"){

	$sql ="INSERT INTO feedback (subject , feedback) values ('Math' , '{$user['feedback']}')";
	$result = $conobj->query($sql);
    }
    else{

	$sql ="INSERT INTO feedback (subject , feedback) values ('General Knowledge' , '{$user['feedback']}')";
	$result = $conobj->query($sql);
    }

	$connection->CloseCon($conobj); 
}

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Notice</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
		<h1 align="center">Feedback</h1>
		<form method="post" align = "center">
			<select name="select">
				<option value="bangla">Bangla</option>
				<option value="english">English</option>
				<option value="math">Math</option>
				<option value="General Knowledge">General Knowledge</option>
			</select><br>
			<textarea name="notice" id="" cols="30" rows="10" placeholder="Feedback"></textarea><br>
			<input type="submit" name="submit" value="Send">
		</form>
	</td>
	 <?php include 'footer.php';?>
  </table>
</body>
</html>
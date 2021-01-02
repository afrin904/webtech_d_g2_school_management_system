<?php
	//session starts

include('../php/feedbackcheck.php');
session_start();
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}else {
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Notice</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table class="studenthome_design" width="100%" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
		<h2>Feedback</h2>
		<form method="post">
			<center>
			<input type="text" name="subject" placeholder="subject">
			<br>
			<textarea id="text" name="feedback" id="" cols="30" rows="10" placeholder="Feedback"></textarea><br>
			<input type="submit" name="submit" value="Send">
			</center>
		</form>
	</td>
	 <?php include 'footer.php';?>
  </table>
</body>
</html>
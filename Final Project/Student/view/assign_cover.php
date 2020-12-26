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
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Notice</title>
	
</head>
<body>
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
				<form>
					<fieldset>
						<center><legend><h2><b>Assignment Cover Page</b></h2></legend></center>
						<center>
						Assignment Cover Form (.doc)</br>
                        Download Assignment Cover (.doc) form.</br>
                        <hr>
						<a href="../view/download.php"> Download </a>
						</center>
					</fieldset>
				</form>
			</td>
			 <?php include 'footer.php';?>
  </table>
</body>
</html>
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
	
	<title>Email</title>
	
</head>
<body>
	<table width="800px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
	<center>
	<center>
	<select>
		<option value="bangla">Bangla</option>
				<option value="english">English</option>
				<option value="math">Math</option>
				<option value="General Knowledge">General Knowledge</option>
	</select>
	<table border="1" cellspacing="0">
		<tr>
		    <td>
				<form>
					<fieldset>
						<legend><h3><b>Email</b></h3></legend>
						From:<input type="text" name="from"></br>
						<hr>
						To:<input type="text" name="to"></br>
						<hr>
						Subject:<input type="text" name="subject"></br>
						<hr>
					</br>
						Body:</br>
						<textarea name="message" rows="10" cols="50"></textarea></br><hr>
						<input type="submit" name="submit" value="Send">
					</fieldset>
				</form>
			</td>
		</tr>
		
			
	</table>
	</center> 
   </center>
   </td>
    <?php include 'footer.php';?>
  </table>
</body>
</html>
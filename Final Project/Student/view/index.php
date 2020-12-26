<?php
include('../php/logincheck.php');
//session_start();
if(isset($_SESSION['id']))

{
	header('Location:student_home.php');
}
?>

<html>
<head></head>

<body>
	

<center>
<form method="post" action="">
	<table border="0" cellspacing="0" cellpadding="0" width="30%" >
		<tr >
			<td align="center">
				<fieldset>
					<img src="../assets/f5.jpg" width="130px" height="130px">
					<h2  style="color:#663300 ; font-style:italic; ">Scientific School </h2>
					User Id<br/>
					<input style="background:#e6f0ff ;" type="text" name="id"><br/>                               
					Password<br/>
					<input style="background:#e6f0ff;" type="password" name="password">
					<br /><hr/>
					<?php echo  $error;?><br>
					<input style="color:white;background:#0066ff" type="submit" value="Login" name="submit"><br/>
					<a href="registration.php">Register</a><br>
					<a href="forgotPassword.php">Forgot Password</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>
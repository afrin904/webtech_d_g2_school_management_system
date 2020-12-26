<?php
	include('../php/registrationCheck.php');
	include('../php/registerinsert.php');

	if(isset($_SESSION['name']))
	{
	header('Location: formSuccessfull.php');
	//echo "your are successfully registered";
	}
?>

<html>

<head>
	
</head>
<body>
<center>
<form method ="post" action="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="500px">
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					<center><img src="../assets/f5.jpg" width="100px" height="100px">
					<h2  style="color:#663300 ;font-style:italic; ">Scientific School </h2></center>
					Name<br/><input style="background:#e6f0ff" type="text" name ="name"><?php echo $nameError;?><?php echo $nameValid ;?><br/>
					<hr>
					Email<br/><input style="background:#e6f0ff" type="text" name ="email"><?php echo $emailErr;?><br/>
					<hr>
					Id<br/><input style="background:#e6f0ff" type="text" name="id"><?php echo $userIdError;?><br/>
					<hr>
					Password<br/><input style="background:#e6f0ff" type="password" name ="password"><?php echo $passError;?><br/>
                    <hr>																				 
					Confirm Password<br/><input style="background:#e6f0ff" type ="password" name ="cpassword"><?php echo $cPassError;?><br/>
					<hr>
					User Type
					<input type="radio" name="user" value="Admin"/ >Admin
					<input type="radio" name="user" value="Teacher"/ >Teacher
					<input type="radio" name="user" value="Student"/>Student
					<input type="radio" name ="user" value="Parent"/>Parent<?php echo $userError;?><br/>
					<hr/>
					Gender<br/><input type="radio" name="gender" value="Male" >Male
					           <input type="radio" name="gender" value ="Female">Female
					           <input type="radio" name="gender" value ="Others"> Others<?php echo $genderError;?><br/>
					<hr/>
					Phone<br/><input style="background:#e6f0ff" type="text" name="phone"><?php echo $noError;?><br/><hr/>
					<input style="color:white;background:#0066ff" type="submit" name="submit" value="Sign Up">
					<a href="index.php">Sign In</a>
					<hr>
					<?php  echo $error; ?>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>		






		
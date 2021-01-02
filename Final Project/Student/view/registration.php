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
    <link rel="stylesheet" href="../assets/css/home.css" />
	<script type="text/javascript" src="../assets/js/formValidation.js"></script>	
</head>
<body>
<div class="wholereg_wrapper"></div>
<center>
<form method ="post" action="" >
	<table border="0" cellspacing="0" cellpadding="0" class="reg_wrapeer">
		<tr>
			<td  width="600px">
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					<h4 id="head"></h4>
					Name<br/><input type="text" name ="name" id="name" onkeyup="NameValidation()"><?php echo $nameError;?><?php echo $nameValid ;?><br/><br/>
					<hr>
					Email<br/><input type="text" name="email" id="email"  value="" onkeyup="EmailValidation()"><?php echo $emailErr;?><br/><br/>
					<hr>
					Id<br/><input type="text" name="id" id="id"  onkeyup="IdValidation()"><?php echo $userIdError;?><br/><br/>
					<hr>
					Password<br/><input type="password" name ="password" id="password" ><?php echo $passError;?><br/><br/><br/>
                    <hr>																				 
					Confirm Password<br/><input type ="password" name ="cpassword" id="cpassword" ><?php echo $cPassError;?><br/><br/>
					<hr>
					User Type
					<input type="radio" id="admin" name="user" value="Admin" onkeyup="UserTypeValidation()">Admin
					<input type="radio" id="teacher" name="user" value="Teacher" onkeyup="UserTypeValidation()" >Teacher
					<input type="radio" id="student" name="user" value="Student" onkeyup="UserTypeValidation()">Student<?php echo $userError;?><br/><br/>
					<hr/>
					Gender<br/><input type="radio" id="male"  name="gender" value="Male" onkeyup="GenderValidation()">Male
					           <input type="radio" id="female" name="gender" value ="Female" onkeyup="GenderValidation()">Female
					           <input type="radio" id="others" name="gender" value ="Others" onkeyup="GenderValidation()"> Others<?php echo $genderError;?><br/><br/>
					<hr/>
					Phone<br/><input type="text" name="phone" id="phone" onkeyup="NumberValidation()"><?php echo $noError;?><br/><br/>
					<input type="submit" name="submit" value="Sign Up">
					<a href="login.php">Sign In</a>
					<hr>
					<?php  echo $error; ?>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>

</center>
</div>
</body>
</html>		






		
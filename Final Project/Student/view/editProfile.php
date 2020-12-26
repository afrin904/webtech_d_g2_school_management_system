<?php
session_start();
if(!isset($_SESSION['id']))

{
	header('Location:index.php');
}
 include '../php/registrationCheck.php';
?>
<html>

<head></head>
<body>
<center>
<form method ="post" action="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="600px">
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Name<br/><input type="text" name ="name"><?php echo $nameError;?><?php echo $nameValid ;?><br/>
					<hr>
					Email<br/><input type="text" name ="email"><?php echo $emailErr;?><br/>
					<hr>
					Id<br/><input type="text" name="id"><?php echo $userIdError;?><br/>
					<hr>
					Password<br/><input type="password" name ="password"><?php echo $passError;?><br/>
                    <hr>																				 
					Confirm Password<br/><input type ="password" name ="cpassword"><?php echo $cPassError;?><br/>
					<hr>
					Gender<br/><input type="radio" name="gender" value="Male" >Male
					           <input type="radio" name="gender" value ="Female">Female
					           <input type="radio" name="gender" value ="Others"> Others<?php echo $genderError;?><br/>
					<hr/>
					Phone<br/><input type="text" name="phone"><?php echo $noError;?><br/>
					<input type="submit" name="submit" value="update">
					
					<hr>
					
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>		

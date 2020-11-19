<?php
	
	session_start();
    if(isset($_REQUEST['submit'])){
        if(!empty($_REQUEST['name']) || !empty($_REQUEST['password']) || !empty($_REQUEST['cpass']) || !empty($_REQUEST['gender']) || !empty($_REQUEST['phone']) || !empty($_REQUEST['email'])  ||  !empty($_REQUEST['id']) ||  !empty($_REQUEST['user'])){
            
            $info = $_REQUEST['name']."|". $_REQUEST['email']."|".$_REQUEST['id']."|".$_REQUEST['password']. "|".$_REQUEST['cpass']  ."|".$_REQUEST['user']."|".$_REQUEST['gender']."|".$_REQUEST['phone']."\n";
            $myfile = fopen("test.txt", "w");
            fwrite($myfile, $info);
            fclose($myfile);
            echo "Registration done!";
            
        }
        
        else{
            echo "Error!";
            
        }
    }
?>

<html>

<head></head>
<body>
<center>
<form method ="post" action="../view/registration.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="600px">
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Name<br/><input type="text" name ="name"><br/>
					Email<br/><input type="text" name ="email"><br/>
					Id<br/><input type="text" name="id"><br/>
					Password<br/><input type="password" name ="password"><br/>
					Confirm Password<br/><input type ="password" name ="cpass"><br/>
					<hr>
					User Type</br>
					<input type="radio" name="user" value="User"/>User
					<input type="radio" name ="user" value="Admin"/>Admin</br>
					<hr>
					Gender<br/><input type="radio" name="gender" value="Male">Male
					           <input type="radio" name="gender" value ="Female">Female
					           <input type="radio" name="gender" value ="Others">Others
					<br/><hr>
					Phone<br/><input type="text" name="phone"><br/>
					<hr>
					<input type="submit" name="submit" value="Sign Up">
			
					<a href="../view/login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>
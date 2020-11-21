<?php
	 $gender ="";
	 $user ="";
	if (isset($_REQUEST['submit'])){

   
		  $name = $_POST['name'];
		  $id = $_POST['id'];
		  $email = $_POST['email'];
		  $pass = $_POST['password'];
		  $cPass = $_POST['cpassword'];
		  $user = $_POST["user"];
		  $gender = $_POST["gender"];
		  $dob = $_POST['dob'];
		  $phone = $_POST['phone'];
		  $error = "";
		  $error1 = "";
		  $error2 = "";
		  $error3 = "";
		  $error4 = "";
		  $error5 = "";
		  $error6 = "";
		  $error7 = "";

	    if(empty($name))
	    {
	    	$error .="Name is required!";
			
	    }
		  
		elseif(strlen($name)<=5)
		    {
			 $error .="Length is too Short!";
			
		    }	
		elseif(!preg_match("/^[a-zA-Z- ]*$/",$name))
		 {
		 	  $error .="Please Enter Name as String and start with a letter";
		 }

		 if(empty($email))
	    {
	    	$error1 .="Please enter your email!";
			
	    }


		elseif (!preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/",$email))
	    {
			$error1 .=" Please Enter Valid Email Address";
		}

		if(empty($id))
	    {
	    	$error7 .="Please enter your ID!";
			
	    }
	    elseif (!preg_match("/^([0-9\.]+-+[0-9]+-+[0-9])$/",$id))
	    {
			$error7 .=" Please Enter Valid ID";
		}
	    elseif(strlen($id)!=10)
	    {
	    	$error7 .= "Invalid Id";
	    }

		if(empty($pass))
	    {
	    	$error3 .="Password is required!";
			
	    }
	    elseif(!preg_match("/^([A-Z\.]+[a-z]+[0-9]+[%$&])$/",$pass)|| strlen($pass)!=5)
	    {
	    	$error3 .="Not a valid Password!";
			
	    }
		 
		if(empty($cPass))
	    {
	    	$error4 .="Please Confirm Password!";
			
	    }
	    elseif($pass != $cPass)
		{
			$error3 .="Password Doesn't Match!"; 
		}
		if(empty($dob))
	    {
	    	$error5 .="Please Fill up field!";
			
	    }
	    if(empty($phone))
	    {
	    	$error6 .="Please enter your Phone Number!";
			
	    }
	    elseif (!is_numeric($phone) || strlen($phone)!=11)
		{
		$error6 .="Invalid! Please Enter Valid Phone Number";
		}
		
       else{
         $info = $name ."|". $email."|".$id ."|".$pass . "|".$cPass."|". $user."|".$gender."|".$dob ."|".$phone."|"."\r\n";
         $myfile = fopen("../view/test.txt", "a");
         fwrite($myfile, $info);
         fclose($myfile);
          echo "Registrstion Done!";
         
          }
		}
			
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
					Name<br/><input type="text" name ="name">
					<?php
					if (isset($error))						
	                {echo $error ;}
                    ?><br/>
					<hr>
					Email<br/><input type="text" name ="email">
					<?php
					if (isset($error1))						
	                {echo $error1 ;}
                    ?>
					<br/>
					<hr>
					Id<br/><input type="text" name="id">
					<?php
					if (isset($error7))						
	                {echo $error7 ;}
                    ?><br/>
					<hr>
					Password<br/><input type="password" name ="password">
					<?php
					if (isset($error3))						
	                {echo $error3 ;}
                    ?>
					<br/>
                    <hr>																				 
					Confirm Password<br/><input type ="password" name ="cpassword">
					<?php
					if (isset($error4))						
	                {echo $error4 ;}
                    ?>
					<br/>
					<hr>
					User Type<br/>
					<input type="radio" name="user" value="Admin"  <?php if($user =="Admin")
		{echo "checked";}?>/ >Admin 
					<input type="radio" name="user" value="Teacher"<?php if($user =="Teacher")
		{echo "checked";}?>/>Teacher 
					<input type="radio" name="user" value="Student"<?php if($user =="Student")
		{echo "checked";}?>/>Student 
					<input type="radio" name ="user" value="Parent" <?php if($user =="Parent")
		{echo "checked";}?>/>Parent 
					<br/>
					<hr/>
					Gender<br/><input type="radio" name="gender" value="Male"<?php if($gender =="Male")
		{echo "checked";}?>>Male 
					           <input type="radio" name="gender" value ="Female" <?php if($gender =="Female")
		{echo "checked";}?>>Female 
					           <input type="radio" name="gender" value ="Others"<?php if($gender =="Others")
		{echo "checked";}?>> Others 
					           <br/>
					<hr/>
					Date of Birth<br/><input type="Date" name="dob">
					<?php
					if (isset($error5))						
	                {echo $error5 ;}
                    ?><br/>
					<hr/>
					Phone Number<br/><input type="text" name="phone">
					<?php
					if (isset($error6))						
	                {echo $error6 ;}
                    ?>
					<br/>
					<hr/>
					<input type="submit" name="submit" value="Sign Up">
					<a href="../view/login.php">Sign In</a>
					<hr>
					
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>		



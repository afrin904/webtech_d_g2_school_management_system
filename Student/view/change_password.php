<?php
	session_start();
	if(isset($_SESSION['flag'])){
		
        $myfile = fopen("../view/test.txt", "r");
        $readfile = fread($myfile, filesize("../view/test.txt"));
        $data = explode("|", $readfile);

        if (isset($_REQUEST['submit'])){
        	$pass = $_REQUEST['pass'];
        	$npass = $_REQUEST['npass'];
        	$rpass = $_REQUEST['rpass'];
        	$error = "";
        	$error1 = "";
        	$error2 = "";
        	$error3 = "";
        if(empty($pass))
	    {
	    	$error .="Password is required!";
			
	    }
	    elseif($data[3] != $pass)
	    {
	    	$error .="Current Password Doesn't Match!";
	    }
	    if (empty($npass))
	     {
	    	$error1 .="Type Password!";
	    }
	    elseif(!preg_match("/^([A-Z\.]+[a-z]+[0-9]+[%$&])$/",$npass) || strlen($npass)!=5)
	    {
	    	$error1 .="Not a valid Password!";
			
	    }
	    elseif ($data[3] == $npass || $data[3] == $rpass) 
	    {
	    	$error1 .="Invalid! All Passwords are same.";
	    }
		 
		if( empty($rpass))
	    {
	    	$error2 .="Type Password!";
			
	    }
	    elseif($npass != $rpass)
		{
			$error2 .="Password Doesn't Match!"; 
		}
		elseif(!empty($pass) || !empty($npass) || !empty($rpass))
		{
			
			$error3 .= "Password has Changed";
		}
	}

?>
<html>
<head>
	<title>VIEW PROFILE</title>
</head>
<body>

	<table width="900px" border="1" align="center">
		<?php include '../view/headers.php';?>
			<td>
				<form>
			<fieldset>
			<legend><h2><b>Change Password</b></h2></legend>
	    	
	    	 Current Password:<input type="Password" name="pass" value=""><?php
					if (isset($error))						
	                {echo $error ;}
                    ?><br>
	    	  <br>
	       
	    	 New Password:<input type="Password" name="npass" value="" ><?php
					if (isset($error1))						
	                {echo $error1 ;}
                    ?> <br>
              <br>
	    	 Retype New Password: <input type="Password" name="rpass" value="" > <?php
					if (isset($error2))						
	                {echo $error2 ;}
                    ?>
	    	 <hr>
				<input type="submit" name="submit" value="Change Password">
				<button title="Must contain 5 letters"><b>i</b></button>
				 <?php
					if (isset($error3))						
	                {echo $error3 ;}
                    ?>
		       
      </fieldset>
	</form>	
			</td>
		</tr>
				<?php include '../view/footer.php';?>
	</table>
</body>
</html>
<?php

	}else{
		header('location: ../view/login.php?msg=login_first');
	}

?>

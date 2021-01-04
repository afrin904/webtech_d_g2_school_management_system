<?php
global $name;
include('../php/logincheck.php');
//session_start();
if(isset($_SESSION['id']))

{
	header('Location:student_home.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
	  <title>Login</title>
	  <link rel="stylesheet" href="../assets/css/loginstyle.css">
   </head>
   <body style="background:#fce1b6;">
      <div class="center" >
      	 <center><img src="../assets/f5.jpg" width="80px" height="80px">
				 <b style="font-style:italic;">Sunflower Govt. High School</b><br/>
					</center>
		 <form method="post">
		    <div class="txt_field">
			   <input type="text" value="" name="id" required>
			   <span></span>
			   <label>UserId</label>
			</div>
			<div class="txt_field">
			   <input type="password" value="" name="password" required>
			   <span></span>
			   <label>Password</label>
			</div>
		
			<input type="submit" name="submit" value="Login">
		 </form>
	  </div>
   </body>
</html>
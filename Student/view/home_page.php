<?php
	
        $myfile = fopen("../view/test.txt", "r");
        $readfile = fread($myfile, filesize("../view/test.txt"));
        $data = explode("|", $readfile);
?>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<table width="900px" border="1" align="center">
		<tr colspan="3">
			<td  align="center">
				<img src="../assets/pic1.jpg" width="100px" height="100px" >
			</td>
		</tr>
		<tr>
			<td  align="center">
				<b><a href="../view/home_page.php">Home</a>|	
	             <a href="../view/about_us.php">About</a>|
	             <a href="../view/registration.php">Registration</a>|
	             <a href="../view/contact.php">Contact</a>|
	             <a href="../view/mail.php">Mail</a>|	
	             <a href="../view/login.php">Login</a></b>
			</td>
		</tr>
		<tr width="200px">
			<td height="200px">
				
			</td>
			
					</tr>			
				</table>
			</td>
			</tr>	
	</table>
</body>
</html>

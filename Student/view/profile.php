<?php
	session_start();
	if(isset($_SESSION['flag'])){
		
        $myfile = fopen("../view/test.txt", "r");
        $readfile = fread($myfile, filesize("../view/test.txt"));
        $data = explode("|", $readfile);
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
						<legend><h2><b>Profile</b></h2></legend>
						<table>
					<tr>

					<td align="left">
						<b>Name:</b> <?php echo $data[0];?></br>
						<hr>
						<b>Email:</b><?php echo $data[1];?></br>
						<hr>
						<b>Id:</b><?php echo $data[2];?></br>
						<hr>
						<b>Gender:</b><?php echo $data[6];?></br>
						<hr>
						<b>Date of Birth:</b><?php echo $data[7];?></br>
						<hr>
						<b>Phone Number:</b><?php echo $data[8];?></br>
					</td>
					<td align="right">
						<img src="../assets/pic2.png" width="200px" height="200px" >
					</td>
					</tr>
				</table>
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
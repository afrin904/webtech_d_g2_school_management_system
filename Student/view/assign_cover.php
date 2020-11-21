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
						<legend><h2><b>Assignment Cover Page</b></h2></legend>
						<center>
						Assignment Cover Form (.doc)</br>
                        Download Assignment Cover (.doc) form.</br>
                        <hr>
						<a href="../view/download.php"> Download </a>
						</center>
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
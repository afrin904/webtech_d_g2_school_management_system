<?php
	session_start();
	if(isset($_SESSION['flag'])){

        $myfile = fopen("../view/test.txt", "r");
        $readfile = fread($myfile, filesize("../view/test.txt"));
        $data = explode("|", $readfile);
?>
<html>
<head>
	<title>Mail</title>
</head>
<body>

	<table width="900px" border="1" align="center">
		
		<tr width="200px">
			
			<td>
				<form>
					<fieldset>
						<legend><h2><b>Mail</b></h2></legend>
						From:<input type="text" name="from"></br>
						<hr>
						To:<input type="text" name="to"></br>
						<hr>
						Subject:<input type="text" name="subject"></br>
						<hr>
					</br>
						Body:</br>
						<textarea name="message" rows="10" cols="50"></textarea></br><hr>
						<input type="submit" name="submit" value="Send">
					</fieldset>
				</form>
			</td>
		</tr>
				
	</table>
	<center><b><a href="../view/home_page.php">Back</a></b></center>
</body>
</html>
<?php

	}else{
		header('location: ../view/login.php?msg=login_first');
	}

?>
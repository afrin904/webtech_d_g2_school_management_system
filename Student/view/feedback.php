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
						<legend><h2><b>Feedback</b></h2></legend>
						<select name="feedback" >
				
				<option value="Bangla" selected>Bangla</option>
				<option value="English">English</option>
                <option value="Math">Math</option>
                <option value="General Knowledge">General Knowledge</option>
               
			</select> <br>

			<hr>
			<textarea name="message" rows="5" cols="30"></textarea></br><hr>
						<input type="submit" name="submit" value="Done">
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
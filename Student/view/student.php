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
						<legend><h2><b>Class Schedule</b></h2></legend>
						<table border="1" align="center">
							<tr  align="center">
								<td>
									<h3><b>Sunday</b></h3><hr>
									<b><a href="../view/text_books.php">Bangla</a></br>10:00-11:00</b></br><hr>
									<b><a href="../view/text_books.php">English</a></br>11:00-12:00</b></br><hr>
									
								</td>
								<td>
									<h3><b>Monday</b></h3><hr>
									<b><a href="../view/text_books.php">Math</a></br>10:00-11:00</b></br><hr>
									<b><a href="../view/text_books.php">General Knowledge</a></br>11:00-12:00</b></br><hr>
								</td>
								<td>
									<h3><b>Tuesday</b></h3><hr>
									<b><a href="../view/text_books.php">Bangla</a></br>10:00-11:00</b></br><hr>
									<b><a href="../view/text_books.php">English</a></br>11:00-12:00</b></br><hr>
								</td>
								<td>
									<h3><b>Wednesday</br></b></h3><hr>
									<b><a href="../view/text_books.php">Math</a></br>10:00-11:00</b></br><hr>
									<b><a href="../view/text_books.php">General Knowledge</a></br>11:00-12:00</b></br><hr>
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
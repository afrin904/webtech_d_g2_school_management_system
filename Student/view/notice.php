<?php
	session_start();
	if(isset($_SESSION['flag'])){

        $myfile = fopen("../view/test.txt", "r");
        $readfile = fread($myfile, filesize("../view/test.txt"));
        $data = explode("|", $readfile);
?>
<html>
<head>
	<title>Notice</title>
</head>
<body>

	<table width="900px" border="1" align="center">
		<?php include '../view/headers.php';?>
			<td>
				<center><h2><b>Notice</b></h2></center>
				<table width="900px" border="1" align="center">
					<tr align="center">
						<td>
							<h4>Date</h4><hr>
							15/11/2020
						</td>

						<td>
							<h4>Bangla</h4><hr>
							Home Work-page-5 all
						</td>
						<td>
							<h4>English</h4><hr>
							Home Work-page-2,3 &5
						</td>
						<td>
							<h4>Math</h4><hr>
							-
						</td>
						<td>
							<h4>General Knowledge</h4><hr>
							-
						</td>
					</tr>
					<tr align="center">
						<td>
							<h4>Date</h4><hr>
							16/11/2020
						</td>

						<td>
							<h4>Bangla</h4><hr>
							-
						</td>
						<td>
							<h4>English</h4><hr>
							-
						</td>
						<td>
							<h4>Math</h4><hr>
							Home Work-page-5 all
						</td>
						<td>
							<h4>General Knowledge</h4><hr>
							Home Work-page-11
						</td>
					</tr>
					<tr align="center">
						<td>
							<h4>Date</h4><hr>
							17/11/2020
						</td>

						<td>
							<h4>Bangla</h4><hr>
							Home Work-page-5(a,b)
						</td>
						<td>
							<h4>English</h4><hr>
							Home Work-page-2,3 &5
						</td>
						<td>
							<h4>Math</h4><hr>
							-
						</td>
						<td>
							<h4>General Knowledge</h4><hr>
							-
						</td>
					</tr>
					<tr align="center">
						<td>
							<h4>Date</h4><hr>
							18/11/2020
						</td>

						<td>
							<h4>Bangla</h4><hr>
							-
						</td>
						<td>
							<h4>English</h4><hr>
							-
						</td>
						<td>
							<h4>Math</h4><hr>
							Home Work-page-5 all
						</td>
						<td>
							<h4>General Knowledge</h4><hr>
							Home Work-page-11
						</td>
					</tr>
				</table>
				
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
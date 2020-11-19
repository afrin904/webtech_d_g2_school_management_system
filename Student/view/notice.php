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
		<tr colspan="3">
			<td  align="center">
				<img src="../assets/pic1.jpg" width="100px" height="100px" ></td>
				<td align="right">
				<b>Welcome <a href="../view/profile.php"><?php echo $data[0];?></a>|
				 <a href="../view/change_password.php">Change Password</a>|	
	             <a href="../php/logout.php">Logout</a></b>
			</td>
		</tr>
		<tr width="200px">
			<td width="200px">
				
				<a href="../view/student.php">Dashboard</a></br>
				<a href="../view/grade.php">Grade</a></br>
				<a href="../view/attendance.php">Attendance</a></br>
				<a href="../view/notes.php">Notes</a></br>
				<a href="../view/notice.php">Notice</a></br>
				<a href="../view/text_books.php">Text Books</a></br>
				<a href="../view/assign_cover.php">Assignment Cover</a></br>
			    <a href="../view/payment.php">Payment Details</a></br>
				<a href="../view/feedback.php">Feedback</a></br>
				<a href="../view/mail.php">Mail</a></br>
				
			</td>
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
				
	</table>
</body>
</html>
<?php

	}else{
		header('location: ../view/login.php?msg=login_first');
	}

?>
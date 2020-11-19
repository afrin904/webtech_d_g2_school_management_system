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
				<form>
					<fieldset>
						<legend><h2><b>Profile</b></h2></legend>
						<b>Name:</b> <?php echo $data[0];?></br>
						<hr>
						<b>Email:</b><?php echo $data[1];?></br>
						<hr>
						<b>Id:</b><?php echo $data[2];?></br>
						<hr>
						<b>Gender:</b><?php echo $data[6];?></br>
						<hr>
						<b>Phone Number:</b><?php echo $data[7];?></br>
					</fieldset>
				</form>
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
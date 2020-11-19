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
	             <a href="../view/logout.php">Logout</a></b>
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
				<center><h2><b>Payment</b></h2></center>
				<form>
					<fieldset>
						<legend><h3>Class-1</h3></legend>
						<center><b>1st Semester</b></br><hr></center>
						<b>Amount :</b>500</br><hr>
						<b>Status :</b>Paid</br><hr>
						<b>Payment Date :</b>19/1/2020</br><hr><hr>
						<center><b>2st Semester</b></br><hr></center>
						<b>Amount :</b>500</br><hr>
						<b>Status :</b>Paid</br><hr>
						<b>Payment Date :</b>19/6/2020</br><hr><hr>
						<center><b>Total Amount Paid :</b>1000</br><hr><hr></center>
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
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
						<legend><h2><b>Text Book</b></h2></legend>
						<table border="1" align="center">
							<tr  align="center">
								<td>
									<h3><b>Bangla</b></h3><hr>
									<b><a href="../view/download.php?file=tBangla">Text Book </a></b></br><hr>
									<b><a href="../view/download.php?file=sBangla">Syllabus</a></b></br><hr>
									
								</td>
								<td>
									<h3><b>English</b></h3><hr>
									<b><a href="../view/download.php?file=tEnglish">Text Book </a></b></br><hr>
									<b><a href="../view/download.php?file=sEnglish">Syllabus</a></b></br><hr>
								</td>
								<td>
									<h3><b>Math</b></h3><hr>
									<b><a href="../view/download.php?file=tMath">Text Book</a></b></br><hr>
									<b><a href="../view/../view/download.php?file=sMath">Syllabus</a></b></br><hr>
								</td>
								<td>
									<h3><b>General</br> Knowledge</br></b></h3><hr>
									<b><a href="../view/download.php?file=tGeneral Knowledge">Text Book</a> </b></br><hr><hr>
									<b><a href="../view/download.php?file=sGeneral Knowledge">Syllabus</a></b></br><hr>
								</td>
							</tr>
						</table>
						
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
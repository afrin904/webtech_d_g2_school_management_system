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
				<center><h2><b>Attendance</b></h2></center>
				<center><select name="attendance" >
				
				<option value="Bangla" selected>Bangla</option>
				<option value="English">English</option>
                <option value="Math">Math</option>
                <option value="General Knowledge">General Knowledge</option>
               
			    </select> <br></center>
						<table border="1" align="center">
							<tr  align="center">
								<td>
									<h3>#SI</h3>
								</td>
								<td>
									<h3>Date</h3>
								</td>
								<td>
									<h3>Present</h3>
								</td>
								<td>
									<h3>Absent</h3>
								</td>
							</tr>
							<tr align="center">
								<td>1</td>
								<td>15/11/2020</td>
								<td>p</td>
								<td>0</td>
								
							</tr>
							<tr align="center">
								<td>2</td>
								<td>16/11/2020</td>
								<td>p</td>
								<td>0</td>
								
							</tr>
							<tr align="center">
								<td>3</td>
								<td>17/11/2020</td>
								<td>p</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>4</td>
								<td>18/11/2020</td>
								<td>p</td>
								<td>0</td>
								
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
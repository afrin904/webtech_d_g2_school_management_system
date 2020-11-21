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
				<center><h2><b>Grade</b></h2></center>
				<center><select name="grade" >
				
				<option value="Bangla" selected>Bangla</option>
				<option value="English">English</option>
                <option value="Math">Math</option>
                <option value="General Knowledge">General Knowledge</option>
               
			    </select> <br></center><hr>
						<b>Home Work: </b></br><hr>
						<b>Assignment: </b></br><hr>
						<b>Performance: </b></br><hr>
						<b>Attendance: </b></br><hr>
						<b>Written Exam: </b></br><hr>
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
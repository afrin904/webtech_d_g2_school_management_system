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
		<?php include '../view/footer.php';?>
				
	</table>
</body>
</html>
<?php

	}else{
		header('location: ../view/login.php?msg=login_first');
	}

?>
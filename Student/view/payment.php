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
				<center><h2><b>Payment</b></h2></center>
				<form>
					<fieldset>
						
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
				<?php include '../view/footer.php';?>
	</table>
</body>
</html>
<?php

	}else{
		header('location: ../view/login.php?msg=login_first');
	}

?>
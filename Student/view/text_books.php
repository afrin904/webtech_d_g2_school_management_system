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
				<?php include '../view/footer.php';?>
	</table>
</body>
</html>
<?php

	}else{
		header('location: ../view/login.php?msg=login_first');
	}

?>
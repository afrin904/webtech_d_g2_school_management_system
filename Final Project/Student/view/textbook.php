<?php
	//session starts
session_start();
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}else {
	header("location:index.php");
}
include ('../model/db.php');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Grade Page</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
<td>
				<form>
					<fieldset>
						<h3><b>Text Book</b></h3>
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
		<?php include 'footer.php';?>
		  </table>
  </form>
</body>
</html>
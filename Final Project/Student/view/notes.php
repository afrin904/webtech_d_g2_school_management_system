<?php
	//session starts
	session_start();
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
	}else {
		header("location:index.php");
	}
	//session ends
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Notes</title>
	
</head>
<body>
 <table width="800px" border="1" align="center">
 	<?php include 'header.php';?>
 	<td>
				<center><h2><b>Notes</b></h2>
					<select name="notes" >
				
				<option value="Bangla" selected>Bangla</option>
				<option value="English">English</option>
                <option value="Math">Math</option>
                <option value="General Knowledge">General Knowledge</option>
               
			    </select> <br></center>
						<table border="1" align="center">
							<tr  align="center">
								<td width="50px">
									<h3>#SI</h3>
								</td>
								<td width="100px">
									<h3>Date</h3>
								</td>
								<td width="200px">
									<h3>Notes</h3>
								</td>
							</tr>
							<tr align="center">
								<td>1</td>
								<td>15/11/2020</td>
								<td>
									<b><a href="../view/text_books.php">Hand Written</a></b></br><hr>
								</td>
							</tr>
							<tr align="center">
								<td>2</td>
								<td>16/11/2020</td>
								<td>
									<b><a href="../view/text_books.php">Assignment</a></b></br><hr>
								</td>
							</tr>

							<tr align="center">
								<td>3</td>
								<td>17/11/2020</td>
								<td>
									<b><a href="../view/text_books.php">Home Work</a></b></br><hr>
								</td>
							</tr>
								
							</tr>
						</table>
			
	   </center>
	 </td>
     <?php include 'footer.php';?>
   </table>
</body>
</html>
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
$connection = new db();
$conobj=$connection->OpenCon();
global $result;

	$sql = "SELECT * FROM assignment";
	$result = $conobj->query($sql);
	

	$connection->CloseCon($conobj); 

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Assignment</title>
	
</head>
<body>
	<table class="studenthome_design" width="100%" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
		<h2><b>Download Assignment Cover Page</b></h2>
				<form>
					<fieldset>
						<center><legend><h2><b>Assignment Cover Page</b></h2></legend></center>
						<center>
						Assignment Cover Form (.doc)</br>
                        Download Assignment Cover (.doc) form.</br>
                        <hr>
						
						<?php
				
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
		        	?>
			  
			
			  <a href="../assets/<?php echo $row["assignment"] ?>"> <?php echo $row["assignment"] ?></a>
			<?php
			
	        }
			
		        }
				 
				?>
			
						</center>
					</fieldset>
				</form>
			</td>
			 <?php include 'footer.php';?>
  </table>
</body>
</html>
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
   

	$sql = "SELECT * FROM books ";
	$result = $conobj->query($sql);
	

	$connection->CloseCon($conobj); 

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Grade Page</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table class="studenthome_design" style="background: #fce1b6;" width="100%" border="1" align="center">
		 <?php include 'header.php';?>
<td>

				<form>
					<fieldset>
						<h2><b>Syllabus</b></h2>
					 
					 <?php 	
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
		        	?>

								    <b>Bangla : 
									<a href="../assets/<?php echo $row["book"] ?>">Bangla Syllabus</a>
									<hr>
									<hr>
								
									<b>English : 
									<a href="../assets/<?php echo $row["book"] ?>">English Syllabus</a>
									<hr>
									<hr>
									<b>Math : 
									<a href="../assets/<?php echo $row["book"] ?>">Math Syllabus</a>
									<hr>
									<hr>
									<b>General Knowledge :
									<a href="../assets/<?php echo $row["book"] ?>">General Syllabus</a>
									<hr>
									<hr>
		
			<?php
			
	        }
			
		        }
				 
				?>
					</fieldset>
				</form>
			</td>
		</tr>
		<?php include 'footer.php';?>
		  </table>
  </form>
</body>
</html>
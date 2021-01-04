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

$sql = "SELECT * FROM emaila";
$result = $conobj->query($sql);
	

$connection->CloseCon($conobj); 
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Email</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table class="studenthome_design" style="background: #fce1b6;" width="100%" border="1" align="center">
		<?php include 'header.php';?>		
<td>
	<center>
		<h2>Email From Teacher</h2>	</center>
		<form method="" align = "center">

			<table border="1" cellspacing="0" width="500px" height="300px" style="background: white;" align="center">
			<tbody>    
			
				<?php
				
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
					
					echo "<tr><td>From : $row[frm]<hr>
					Subject : $row[subject]<hr>
					Message :<br/><br/> $row[body]</td></tr>" ;
					
							}
			
							}
				 
				?>
			
		</tbody>
			</table>

			</form>			
			
		</form>

</td>
 <?php include 'footer.php';?>
</table>
</body>
</html>
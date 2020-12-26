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

	$sql = "SELECT amount,status,date,semester,total FROM payment WHERE id = '$id'";
	$result = $conobj->query($sql);
	

	$connection->CloseCon($conobj); 

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Salary History Page</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
		<center><h2><b>Payment</b></h2></center>
				<form>
					<fieldset>
						
				<?php
				
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			 echo "
			           <center><h3>Semester : </h3>$row[semester]</br><hr></center>
						<b>Amount :</b>$row[amount]</br><hr>
						<b>Status :</b>$row[status]</br><hr>
						<b>Payment Date :</b>$row[date]</br><hr>
						<center><b>Total Amount :</b>$row[total]</br></center><hr><hr><hr>";
						
	        }
		    }
				 
			?> 
			</fieldset>
				</form>
		</td>
		<?php include 'footer.php';?>
  </table>
  </form>
</body>
</html>


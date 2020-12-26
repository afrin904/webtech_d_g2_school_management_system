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
global $select;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$select =  $_POST['select'];
	
	if($select == "Bangla"){

	$sql = "SELECT name,id,email,present,absent,date FROM attendance WHERE id = '$id' and subject = 'Bangla'";
	$result = $conobj->query($sql);
    }
    else if($select == "English"){

	$sql = "SELECT name,id,email,present,absent,date FROM attendance WHERE id = '$id' and subject = 'English'";
	$result = $conobj->query($sql);
    }
    else if($select == "Math"){

	$sql = "SELECT name,id,email,present,absent,date FROM attendance WHERE id = '$id' and subject = 'Math'";
	$result = $conobj->query($sql);
    }
    else{

	$sql = "SELECT name,id,email,present,absent,date FROM attendance WHERE id = '$id' and subject = 'General Knowledge'";
	$result = $conobj->query($sql);
    }

	$connection->CloseCon($conobj); 
}
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Attendance</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>

	<td>
    <center>
    	
				<select name="select" >

				<option value="Bangla">Bangla</option>
				<option value="English">English</option>
				<option value="Math">Math</option>
				<option value="General Knowledge">General Knowledge</option>
			</select>
			<input type ="submit" value ="Submit">
	
	<table border=1 cellspacing="0" align="center">
	    <thead>
			<th>Name</th>
			<th>ID</th>
			<th>Email</th>
			<th>Present</th>
			<th>Absent</th>
			<th>Date</th>
			
		</thead>
		 <tbody>    
			
				<?php
				if($select == "Bangla" || $select == "English" || $select == "Math" || $select == "General Knowledge" ){
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			echo "<tr>";
			echo "<td>$row[name]</td> 
			      <td>$row[id]</td>
			      <td>$row[email]</td>
			      <td>$row[present]</td>
			      <td>$row[absent]</td>
			      <td>$row[date]</td>";
			echo "</tr>";
			
	        }
			
		    }
		    }
				 
				?>
			
		</tbody>

	</table>
  </td>
   <?php include 'footer.php';?>
  </table>
  </center>
  </form>
  
</body>
</html>


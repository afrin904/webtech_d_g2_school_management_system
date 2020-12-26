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
include ('../model/db.php');
$connection = new db();
$conobj=$connection->OpenCon();
global $result;
global $select;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$select =  $_POST['select'];
	
	if($select == "Bangla"){

	$sql = "SELECT notice FROM notice WHERE  subject = 'Bangla' and section = 'a'";
	$result = $conobj->query($sql);
    }
    else if($select == "English"){

	$sql = "SELECT notice FROM notice WHERE  subject = 'English' and section = 'b'";
	$result = $conobj->query($sql);
    }
    else if($select == "Math"){

	$sql = "SELECT notice  FROM notice WHERE subject = 'Math' and section = 'a'";
	$result = $conobj->query($sql);
    }
    else{

	$sql = "SELECT notice FROM notice WHERE  subject = 'General Knowledge' and section = 'b'";
	$result = $conobj->query($sql);
    }

	$connection->CloseCon($conobj); 
}
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Notice</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>

	<td>
				<center><h2><b>Notice</b></h2></center>

				<center>
					<input type ="submit" value ="Submit">
					<select name="select" >
				
				<option value="Bangla">Bangla</option>
				<option value="English">English</option>
                <option value="Math">Math</option>
                <option value="General Knowledge">General Knowledge</option>
               
			    </select> <br></center><hr>
			    <table border="1" cellspacing="0" align="center">
			    <tbody>

			    <?php
				if($select == "Bangla" || $select == "English" || $select == "Math" || $select == "General Knowledge" ){
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
		        
			    echo "<tr>";
			    echo "<td>$row[notice]</td> ";
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
</body>
</html>
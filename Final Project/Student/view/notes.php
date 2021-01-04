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

	$sql = "SELECT * FROM notes ";
	$result = $conobj->query($sql);
    }
    else if($select == "English"){

	$sql = "SELECT * FROM notes";
	$result = $conobj->query($sql);
    }
    else if($select == "Math"){

	$sql = "SELECT *FROM notes ";
	$result = $conobj->query($sql);
    }
    else{

	$sql = "SELECT * FROM notes ";
	$result = $conobj->query($sql);
    }

	
	$connection->CloseCon($conobj); 
}
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Notes</title>
	
</head>
<body>
<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table class="studenthome_design" style="background: #fce1b6;" width="100%" border="1" align="center">
		 <?php include 'header.php';?>

	<td>
		   
		    			<h2><b>Notes<center>

				<select name="select">
				<option value="select-class">select-class</option>
				<option value="Bangla">Bangla</option>
				<option value="English">English</option>
                <option value="Math">Math</option>
                <option value="General Knowledge">General Knowledge</option>
               
			    </select>
			    	<input type ="submit" value ="Submit">
			    	 </b></h2></b><hr>
			    	 </center>

		    		
				<table border=1 cellspacing="0" align="center" width="30%">
	    <thead id="table_head">
	    	
			<th>Notes</th>
			
			
		</thead>
		 <tbody>    
			
				<?php
				if($select == "Bangla" || $select == "English" || $select == "Math" || $select == "General Knowledge" ){
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			
			echo "<tr>";
			
			?>
			<td><a href="../assets/<?php echo $row["notes"] ?>"> <?php echo $row["notes"] ?></a></td>
			<?php
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


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

	$sql = "SELECT homework,assignment,performance,attendance,writtenexam,grade,subject  FROM grade WHERE id = '$id' and subject = 'Bangla'";
	$result = $conobj->query($sql);
    }
    else if($select == "English"){

	$sql = "SELECT homework,assignment,performance,attendance,writtenexam,grade,subject  FROM grade WHERE id = '$id' and subject = 'English'";
	$result = $conobj->query($sql);
    }
    else if($select == "Math"){

	$sql = "SELECT homework,assignment,performance,attendance,writtenexam,grade,subject  FROM grade WHERE id = '$id' and subject = 'Math'";
	$result = $conobj->query($sql);
    }
    else{

	$sql = "SELECT homework,assignment,performance,attendance,writtenexam,grade,subject   FROM grade WHERE id = '$id' and subject = 'General Knowledge'";
	$result = $conobj->query($sql);
    }

	
	$connection->CloseCon($conobj); 
}
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
		   
		    			<h2 style="background:#3C3E4D;color:orange;font-style:italic;" ><b>Grades Marks Quizes</b></h2>
		    			<center>
					
					<select name="select" >
				
				<option value="Bangla">Bangla</option>
				<option value="English">English</option>
                <option value="Math">Math</option>
                <option value="General Knowledge">General Knowledge</option>
               
			    </select>
			    <input type ="submit" value ="Submit">
			     <br></center><hr>
		    		
						<?php
				if($select == "Bangla" || $select == "English" || $select == "Math" || $select == "General Knowledge" ){
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
		        
			    echo "
			            <h1>$row[subject]</h1></br><hr><hr>
						<b>Home Work: </b>$row[homework]</br>
						<b>Assignment: </b>$row[assignment]</br>
						<b>Performance: </b>$row[performance]</br>
						<b>Attendance: </b>$row[attendance]</br>
						<b>Written Exam: </b>$row[writtenexam]</br>
						<b>Grade: </b>$row[grade]</br><hr>";
	        }
		    }
		}
				 
				?>
					
		</td>
		 <?php include 'footer.php';?>
  </table>
  </form>
</body>
</html>


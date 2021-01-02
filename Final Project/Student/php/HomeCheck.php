<?php
$id = $_SESSION["id"];
$connection = new db();
$conobj=$connection->OpenCon();
global $result;

$sql = "SELECT * FROM registration where id='$id'";
$result = $conobj->query($sql);
if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
					
					$name=$row['name'];
					setcookie("userName", $name, time() + (86400 * 30), "/");	
				}
			  
}
$connection->CloseCon($conobj); 

?>
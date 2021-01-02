<?php
include('../model/db.php');

$id = $_POST['id'];

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByID($conobj,"classschedule",$id);



if ($MyQuery->num_rows > 0) {
    echo "<table border=1 cellspacing=0>
    <tr>
      <th>Course</th>
			<th>Day</th>
			<th>Time</th>
			<th>Section</th>
	</tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["course"]."</td><td>".$row["day"]."</td><td>".$row["time"]."</td><td>".$row["section"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
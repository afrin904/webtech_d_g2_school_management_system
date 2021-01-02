<?php
	//session starts
	session_start();
	include ('../model/db.php');
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
	}else {
		header("location:login.php");
	}
	include('../php/HomeCheck.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
<link rel="stylesheet" href="../assets/css/student.css" />
<script>
function showmyuser() {
  var id=  document.getElementById("id").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/Final Project/Student/php/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id="+id);


}
</script>
</head>
<body>
	<center>
		<table class="studenthome_design" width="100%" border="1" cellspacing="0">
			
			<?php include 'header.php';?>
			    <td  class="search_ajax" width ="600px" height="400px">
				<h2>Search Class Schedule by ID</h2>
				<center>
				<input type="text" name ="id" id="id"/>
				
				<button onclick="showmyuser()">Search</button>
				<p id="mytext"></p>
				</center>
				</td>
            </tr> 
            <?php include 'footer.php';?>  
         </table>	
</center>
</body>
</html>

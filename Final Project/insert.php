<?php
	if(isset($_REQUEST['submit'])){

	$conn = mysqli_connect('localhost', 'root', '', 'student');
		
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "assets/".$filename;
		move_uploaded_file($tempname, $folder);

		if ($filename != "") {
			$sql = "insert into books (book) values ('$filename')";
			$result = mysqli_query($conn,$sql);
			if ($result) {
				echo "Data inserted";
				# code...
			}
			else{
				echo "error";
			}
		}

		
	}

	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		


		<input type="file" name="uploadfile" value=""><br>
		<input type="submit" name="submit" value="submit"><br>
	</form>
</body>
</html>
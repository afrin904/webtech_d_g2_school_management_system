<?php
	if(!isset($_SESSION['flag'])){
		header('location: ../view/login.php?msg=login_first');
	}
?>
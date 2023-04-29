<?php 
	session_start();
	if (!isset($_SESSION['user_username'])) {
		header('location:login.php?msg=1');
	}
 ?>
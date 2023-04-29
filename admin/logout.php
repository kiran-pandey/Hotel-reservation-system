<?php	
	session_start();

	session_destroy();

	setcookie('admin_username',false,time()-1);

	header('location:login.php');

?>
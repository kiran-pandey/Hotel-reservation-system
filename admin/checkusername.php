<?php
$username=$_POST['uname'];
require_once "connection.php";
$sql = "select username from customer where username='$username'";
$result = $connect->query($sql);
if ( $result->num_rows == 1){
	echo "Username already taken";
 }
 ?>


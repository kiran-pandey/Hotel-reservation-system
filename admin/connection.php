<?php 
//database connection code
$connect = new mysqli('localhost','root','','dbl_projects');
//check database connection error
if ($connect->connect_errno != 0 ) {
	die('Database connection error');
}
 ?>
<?php
$id = $_GET['id'];

require_once "connection.php";

$sql = "delete from customer where cus_id =$id";

$connect->query($sql);

header ('location:listuser.php');

 ?>

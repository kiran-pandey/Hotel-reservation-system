<?php
$id = $_GET['id'];

require_once "connection.php";

$sql = "delete from fullreservation where rd_id =$id";

$connect->query($sql);

header ('location:viewreservation.php');

 ?>

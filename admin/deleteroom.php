<?php
$id = $_GET['id'];

require_once "connection.php";

$sql = "delete from room where room_id =$id";

$connect->query($sql);

header ('location:listroom.php');

 ?>

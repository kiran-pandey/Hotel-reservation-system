<?php
$title = 'View Reservation';
require "head.php";
?>
<?php

if (!isset($_GET['id'])) {
  header('location:viewreservation.php');
}else {
  $id = $_GET['id'];
}

require "connection.php";
//sql query to select all  categories from database
$sql = "select * from fullreservation where rd_id=$id ";

//execute query and get result object: incase of select
$result = $connect->query($sql);

//result object: mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 3 [type] => 0 )


//for single data
$rd = $result->fetch_assoc();

?>

<div class="container">

     <div class="card mt-5">
   <div class="card-header">
     <?php echo $title ?>

     </div>
   <div class="card-body">
     <div class="row">
     <div class="col-md-12">
     <div class="table-responsive">
     <table class="table table-bordered table-hover table-striped ">
       <tr>
         <th>First-Name</th>
         <td><?php echo $rd['f_name'] ?></td>
       </tr>
        <tr>
         <th>Last-Name</th>
         <td><?php echo $rd['l_name'] ?></td>
       </tr>
        <tr>
         <th>Mobile-Number</th>
         <td><?php echo $rd['number'] ?></td>
       </tr>
        <tr>
         <th>Email</th>
         <td><?php echo $rd['email'] ?></td>
       </tr>
        <tr>
         <th>Booked-By</th>
         <td><?php echo $rd['bookedby'] ?></td>
       </tr>
        <tr>
         <th>Check-in-Date</th>
         <td><?php echo $rd['checkindate'] ?></td>
       </tr>
          <tr>
         <th>Check-Out-Date</th>
         <td><?php echo $rd['checkoutdate'] ?></td>
       </tr>
        <tr>
         <th>Room-Type</th>
         <td><?php echo $rd['roomtype'] ?></td>
       </tr>
     </table>
     </div>
   </div>

 </div>
   </div>
   </div>
 </div>


</div>
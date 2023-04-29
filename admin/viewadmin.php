<?php
$title = 'View Admin';
require "head.php";
?>
<?php

if (!isset($_GET['id'])) {
  header('location:listadmin.php');
}else {
  $id = $_GET['id'];
}

require "connection.php";
//sql query to select all  categories from database
$sql = "select * from admin where id=$id ";

//execute query and get result object: incase of select
$result = $connect->query($sql);

//result object: mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 3 [type] => 0 )


//for single data
$ad = $result->fetch_assoc();

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
         <td><?php echo $ad['f_name'] ?></td>
       </tr>
         <tr>
         <th>Middle-Name</th>
         <td><?php echo $ad['m_name'] ?></td>
       </tr>
        <tr>
         <th>Last-Name</th>
         <td><?php echo $ad['l_name'] ?></td>
       </tr>
        <tr>
         <th>Contact-Number</th>
         <td><?php echo $ad['number'] ?></td>
       </tr>
        <tr>
         <th>Email</th>
         <td><?php echo $ad['email'] ?></td>
       </tr>
        <tr>
         <th>User-Name</th>
         <td><?php echo $ad['username'] ?></td>
       </tr>
     </table>
     </div>
   </div>

 </div>
   </div>
   </div>
 </div>


</div>
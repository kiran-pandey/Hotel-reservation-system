<?php
$title = 'View User';
require "head.php";
?>
<?php

if (!isset($_GET['id'])) {
  header('location:listuser.php');
}else {
  $id = $_GET['id'];
}

require "connection.php";
//sql query to select all  categories from database
$sql = "select * from customer where cus_id=$id ";

//execute query and get result object: incase of select
$result = $connect->query($sql);

//result object: mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 3 [type] => 0 )


//for single data
$cus = $result->fetch_assoc();

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
         <td><?php echo $cus['F_Name'] ?></td>
       </tr>
         <tr>
         <th>Middle-Name</th>
         <td><?php echo $cus['M_Name'] ?></td>
       </tr>
        <tr>
         <th>Last-Name</th>
         <td><?php echo $cus['L_Name'] ?></td>
       </tr>
        <tr>
         <th>Address</th>
         <td><?php echo $cus['Address'] ?></td>
       </tr>
        <tr>
         <th>Email</th>
         <td><?php echo $cus['Email'] ?></td>
       </tr>
        <tr>
         <th>Contact-Number</th>
         <td><?php echo $cus['Contactnumber'] ?></td>
       </tr>
        <tr>
         <th>Gender</th>
         <td><?php if($cus['Gender']==0){
          echo "female";
         }else{
          echo "male";
         } ?></td>
       </tr>
        <tr>
         <th>Identification-Number</th>
         <td><?php echo $cus['Identificationnumber'] ?></td>
       </tr>
        <tr>
         <th>User-Name</th>
         <td><?php echo $cus['Username'] ?></td>
       </tr>
         
     </table>
     </div>
   </div>

 </div>
   </div>
   </div>
 </div>


</div>
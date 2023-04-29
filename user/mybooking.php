<?php
session_start();
$r_id=$_SESSION['loggedInUser'];
$title = 'List of Reservation';
require "head2.php";
 ?>
 <?php
  require "connection.php";
  $sql="select rd_id,f_name,l_name,number,email,checkindate,checkoutdate,roomtype,cus_id from fullreservation where cus_id=$r_id";
  $result = $connect->query($sql);
  $data = [];
  // if($result && $result->num_rows > 0){
    while($rd= $result->fetch_assoc()){
      array_push($data,$rd);
    }
  
  ?>
<div class="container">

     <div class="card mt-5">
   <div class="card-header bg-info">
     <?php echo $title ?>
     </div>
   <div class="card-body">
     <div class="row">
     <div class="col-md-12">
     <div class="table-responsive">
     <table class="table table-bordered table-hover table-striped ">
        <?php foreach($data as $index => $d){ ?> 
         <tr class="bg-success">
          <th>S.N</th>
          <td></td>
        </tr>
        <tr>
           <th>First-Name</th>
         <td><?php echo $d['f_name'] ?></td>
       </tr>
        <tr>
         <th>Last-Name</th>
         <td><?php echo $d['l_name'] ?></td>
       </tr>
        <tr>
         <th>Mobile-Number</th>
         <td><?php echo $d['number'] ?></td>
       </tr>
        <tr>
         <th>Email</th>
         <td><?php echo $d['email'] ?></td>
       </tr>
        <tr>
         <th>Check-in-Date</th>
         <td><?php echo $d['checkindate'] ?></td>
       </tr>
          <tr>
         <th>Check-Out-Date</th>
         <td><?php echo $d['checkoutdate'] ?></td>
       </tr>
        <tr>
         <th>Room-Type</th>
         <td><?php echo $d['roomtype'] ?></td>
         <tr>
        <th>Action</th>
             <td>
                <a class="btn btn-danger" onclick="return confirm ('Are you sure to delete ?')" href="deletereservation.php?id=<?php echo $d['rd_id'] ?>">Delete</a>
                <br>
             </td>
           </tr>
         <?php } ?>
     </table>
     </div>
   </div>

 </div>
   </div>
   </div>
 </div>
 <?php 
 require_once "footer.php";
 ?>


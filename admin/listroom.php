<?php
$title = 'List of Room';
require "head.php";
 ?>
 <?php
  require "connection.php";
  $sql="select room_id,roomtype,price,roomnumber,capacity  from room order by room_id";
  $result = $connect->query($sql);
  $data = [];
  // if($result && $result->num_rows > 0){
  	while($room= $result->fetch_assoc()){
  		array_push($data,$room);
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
       <thead>
         <tr class="bg-success">
           <th>S.N</th>
           <th>Room-Type</th>
           <th>Price</th>
           <th>Room-Number</th>
           <th>Capacity</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach($data as $index => $d){ ?>
           <tr>
             <td><?php echo $index+1; ?></td>
             <td><?php echo $d['roomtype'] ?></td>
             <td>RS:<?php echo $d['price'] ?></td>
             <td><?php echo $d['roomnumber'] ?></td>
             <td><?php echo $d['capacity'] ?></td>
             <td>
                <a class="btn btn-danger" onclick="return confirm ('Are you sure to delete ?')" href="deleteroom.php?id=<?php echo $d['room_id'] ?>">Delete</a>
                 <a class="btn btn-warning"  href="updateroom.php?id=<?php echo $d['room_id'] ?>">Edit</a>
             </td>
           </tr>
         <?php } ?>
       </tbody>
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


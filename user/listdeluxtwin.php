<?php
$title = 'List of Delux-Twin';
require "head2.php";
 ?>
 <?php
  require "connection.php";
  $sql="select room_id,price,roomnumber,capacity  from room where roomtype=02";
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
             <td>RS:<?php echo $d['price'] ?></td>
             <td><?php echo $d['roomnumber'] ?></td>
             <td><?php echo $d['capacity'] ?></td>
             <td>
                <a class="btn btn-info">BOOK</a>
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


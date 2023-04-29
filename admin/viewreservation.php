<?php
$title = 'List of Reservation';
require "head.php";
 ?>
 <?php
  require "connection.php";
  $sql="select rd_id,f_name,l_name from fullreservation order by rd_id";
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
       <thead>
         <tr class="bg-success">
           <th>S.N</th>
           <th>First-Name</th>
           <th>Last-Name</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach($data as $index => $d){ ?>
           <tr>
             <td><?php echo $index+1; ?></td>
             <td><?php echo $d['f_name'] ?></td>
             <td><?php echo $d['l_name'] ?></td>
             <td>
                <a class="btn btn-danger" onclick="return confirm ('Are you sure to delete ?')" href="deletereservation.php?id=<?php echo $d['rd_id'] ?>">Delete</a>
                  <a class="btn btn-info" href="detailviewreservation.php?id=<?php echo $d['rd_id'] ?>">View Details</a>
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


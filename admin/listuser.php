<?php
$title = 'List of user';
require "head.php";
 ?>
 <?php
  require "connection.php";
  $sql="select cus_id,F_Name,M_Name,L_Name from customer order by cus_id";
  $result = $connect->query($sql);
  $data = [];
  // if($result && $result->num_rows > 0){
  	while($cus= $result->fetch_assoc()){
  		array_push($data,$cus);
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
           <th>Middle-Name</th>
           <th>Last-Name</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach($data as $index => $d){ ?>
           <tr>
             <td><?php echo $index+1; ?></td>
             <td><?php echo $d['F_Name'] ?></td>
             <td><?php echo $d['M_Name'] ?></td>
             <td><?php echo $d['L_Name'] ?></td>
             <td>
               <a class="btn btn-info" href="viewuser.php?id=<?php echo $d['cus_id'] ?>">View Details</a>
                <a class="btn btn-danger" onclick="return confirm ('Are you sure to delete ?')" href="deleteuser.php?id=<?php echo $d['cus_id'] ?>">Delete</a>
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


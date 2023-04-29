<?php
$title = 'List of Admin';
require "head.php";
 ?>
 <?php
  require "connection.php";
  $sql="select id,f_name,m_name,l_name from admin order by id";
  $result = $connect->query($sql);
  $data = [];
  // if($result && $result->num_rows > 0){
  	while($ad= $result->fetch_assoc()){
  		array_push($data,$ad);
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
             <td><?php echo $d['f_name'] ?></td>
             <td><?php echo $d['m_name'] ?></td>
             <td><?php echo $d['l_name'] ?></td>
             <td>
               <a class="btn btn-info" href="viewadmin.php?id=<?php echo $d['id'] ?>">View Details</a>
                <a class="btn btn-danger" onclick="return confirm ('Are you sure to delete ?')" href="deleteadmin.php?id=<?php echo $d['id'] ?>">Delete</a>
                 <a class="btn btn-warning"  href="updateadmin.php?id=<?php echo $d['id'] ?>">Edit</a>
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


<?php
$id = $_GET['id'];
//database connection
require_once "connection.php";

$sql = "select * from customer where cus_id=$id";

//execute query
$result = $connect->query($sql);

$cus = $result->fetch_assoc();
 ?>

 <?php
 $title = 'Edit User';
 require "head.php";

 ?>


 <?php
 if (isset($_POST['btnUpdate'])) {
     $err = [];
     //name check
     if (isset($_POST['fname']) && !empty($_POST['fname'])) {
         $fname =  $_POST['fname'];
     } else {
         $err['fname'] = 'Enter fname';
     }
       if (isset($_POST['mname']) && !empty($_POST['mname'])) {
         $mname =  $_POST['mname'];
     } else {
         $err['mname'] = 'Enter mname';
     }
       if (isset($_POST['lname']) && !empty($_POST['lname'])) {
         $lname =  $_POST['lname'];
     } else {
         $err['lname'] = 'Enter lname';
     }
       if (isset($_POST['address']) && !empty($_POST['address'])) {
         $address =  $_POST['address'];
     } else {
         $err['address'] = 'Enter address';
     }

     //rank check
     if (isset($_POST['rank']) && !empty($_POST['rank'])) {
         $rank =  $_POST['rank'];
     } else {
         $err['rank'] = 'Enter rank';
     }

     if(isset($_POST['expires_on']) && !empty($_POST['expires_on'])){

       $expires_on = $_POST['expires_on'];
     }else{
       $err['expires_on'] = 'Enter Expiring date';
     }
     //get status value
     $status = $_POST['status'];
     //current datetime of server
     $updated_at = date('Y-m-d H:i:s');
     //loggedin user id : take from session
     session_start();

     $updated_by = $_SESSION['admin_name'] ;
     if (count($err) == 0) {
         require "connection.php";
         //make query to insert data
         $sql = "update tbl_advertisements set title='$title',rank='$rank',expire_date = '$expires_on',status='$status',updated_by='$updated_by',updated_at='$updated_at' where id=$id ";
         //execute query
         $connect->query($sql);

         //check data insert status
         if ($connect->affected_rows == 1) {
             $success =  "Update Success";
         } else {
             $failed  =  "Update Failed";
         }
     }
 }

?>

 <div class="container">

 			<div class="card mt-5">
 		<div class="card-header">
 			<?php echo $title ?>

 			</div>
 		<div class="card-body">
			<?php if (isset($success)) { ?>
				<p class="alert alert-success"><?php echo $success ?></p>
			<?php } ?>
			<?php if (isset($failed)) { ?>
				<p class="alert alert-danger"><?php echo $failed ?></p>
			<?php } ?>
 			<div class="row">
 			<form action="<?php echo $_SERVER['PHP_SELF'] ?>?id=<?php echo $id ?>" method="post">
	 	 <label for="title">Title</label>
	 	 <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="<?php echo $ads['title'] ?>">
	 	 <?php
            if (isset($err['title'])) {
                echo $err['title'];
            }
          ?>
	 	 <br/>
	 	  <label for="rank">Rank</label>
	 	 <input type="number" name="rank" class="form-control" id="rank" placeholder="Enter rank" value="<?php echo $ads['rank'] ?>">
	 	  <?php
            if (isset($err['rank'])) {
                echo $err['rank'];
            }
          ?>
	 	 <br/>
     <div>
       <label for="rank">Expires on </label>
     <input type="date" name="expires_on" class="form-control" value="<?php echo $ads['expire_date'];?>">
     <?php
        if (isset($err['expires_on'])) {
            echo $err['expires_on'];
        }
      ?>
   </div>
   <br>
   <label for="status">Status</label>
   <?php if ($ads['status'] == 1) { ?>
       <input type="radio" name="status" value="1" checked=""> Active
      <input type="radio" name="status" value="0" > De Active

  <?php  } else { ?>
    <input type="radio" name="status" value="1" > Active
     <input type="radio" name="status" value="0" checked="" > De Active

  <?php } ?>

   <br>
	 	 <input type="submit" name="btnUpdate" class="btn btn-success" value="Update Advertisement">
	 </form>
 	</div>
 		</div>
 		</div>
 	</div>


 </div>

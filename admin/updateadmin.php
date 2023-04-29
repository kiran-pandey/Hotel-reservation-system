<?php
$id = $_GET['id'];
//database connection
require_once "connection.php";

$sql = "select * from admin where id=$id";

//execute query
$result = $connect->query($sql);

$ad = $result->fetch_assoc();
 ?>

 <?php
 $title = 'Edit Admin';
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
      if (isset($_POST['number']) && !empty($_POST['number'])) {
         $number =  $_POST['number'];
     } else {
         $err['number'] = 'Enter number';
     }
      if (isset($_POST['email']) && !empty($_POST['email'])) {
         $email =  $_POST['email'];
     } else {
         $err['email'] = 'Enter email';
     }
      if (isset($_POST['username']) && !empty($_POST['username'])) {
         $username =  $_POST['username'];
     } else {
         $err['username'] = 'Enter username';
     }

     session_start();

     $updated_by = $_SESSION['admin_name'] ;
     if (count($err) == 0) {
         require "connection.php";
         //make query to insert data
         $sql = "update admin set f_name='$fname',m_name='$mname',l_name='$lname',number='$number',email='$email',username='$username' where id=$id ";
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
	 	 <label for="fname">First-Name</label>
	 	 <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter fname" value="<?php echo $ad['f_name'] ?>">
	 	 <?php
            if (isset($err['fname'])) {
                echo $err['fname'];
            }
          ?>
           <label for="mname">Middle-Name</label>
     <input type="text" name="mname" class="form-control" id="mname" placeholder="Enter mname" value="<?php echo $ad['m_name'] ?>">
     <?php
            if (isset($err['mname'])) {
                echo $err['mname'];
            }
          ?>
        
           <label for="lname">Last-Name</label>
     <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter lname" value="<?php echo $ad['l_name'] ?>">
     <?php
            if (isset($err['lname'])) {
                echo $err['lname'];
            }
          ?>
         
          <label for="number">Contact-Number</label>
     <input type="number" name="number" class="form-control" id="number" placeholder="Enter number" value="<?php echo $ad['number'] ?>">
     <?php
            if (isset($err['number'])) {
                echo $err['number'];
            }
          ?>
         
           <label for="email">Email</label>
     <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $ad['email'] ?>">
     <?php
            if (isset($err['email'])) {
                echo $err['email'];
            }
          ?>
       
           <label for="username">UserName</label>
     <input type="username" name="username" class="form-control" id="username" placeholder="Enter username" value="<?php echo $ad['username'] ?>">
     <?php
            if (isset($err['username'])) {
                echo $err['username'];
            }
          ?>
	 	 <input type="submit" name="btnUpdate" class="btn btn-success" value="Update Admin">
	 </form>
 	</div>
 		</div>
 		</div>
 	</div>


 </div>

<?php
$id = $_GET['id'];
//database connection
require_once "connection.php";

$sql = "select * from room where room_id=$id";

//execute query
$result = $connect->query($sql);

$room = $result->fetch_assoc();
 ?>

 <?php
 $title = 'Edit Room';
 require "head.php";

 ?>


 <?php
 if (isset($_POST['btnUpdate'])) {
     $err = [];
     //name check
     if (isset($_POST['roomtype']) && !empty($_POST['roomtype'])) {
         $roomtype =  $_POST['roomtype'];
     } else {
         $err['roomtype'] = 'Enter roomtype';
     }
     if (isset($_POST['price']) && !empty($_POST['price'])) {
         $price =  $_POST['price'];
     } else {
         $err['price'] = 'Enter price';
     }
      if (isset($_POST['capacity']) && !empty($_POST['capacity'])) {
         $capacity =  $_POST['capacity'];
     } else {
         $err['capacity'] = 'Enter capacity';
     }
     session_start();

     $updated_by = $_SESSION['admin_name'] ;
     if (count($err) == 0) {
         require "connection.php";
         //make query to insert data
          $sql = "update room set roomtype='$roomtype',price='$price',capacity='$capacity' where room_id=$id";
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

	 	 <label for="roomtype">Room-Type</label>
	 	 <input type="text" name="roomtype" class="form-control" id="roomtype" placeholder="Enter roomtype" value="<?php echo $room['roomtype'] ?>">
	 	 <?php
            if (isset($err['roomtype'])) {
                echo $err['roomtype'];
            }
          ?>
           <label for="price">Price</label>
     <input type="number" name="price" class="form-control" id="price" placeholder="Enter price" value="<?php echo $room['price'] ?>">
     <?php
            if (isset($err['price'])) {
                echo $err['price'];
            }
          ?>
        
          
         
          <label for="capacity">Capacity</label>
     <input type="number" name="capacity" class="form-control" id="capacity" placeholder="Enter capacity" value="<?php echo $room['capacity'] ?>">
     <?php
            if (isset($err['capacity'])) {
                echo $err['capacity'];
            }
          ?>
	 	 <input type="submit" name="btnUpdate" class="btn btn-success" value="Update Room">
	 </form>
 	</div>
 		</div>
 		</div>
 	</div>


 </div>

 <?php 
 if (isset($_POST['check'])) {
  $err = [];
  $checkin = date('Y-m-d');
  $checkout = date('Y-m-d');
 ?>
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
       <div class="col-md-4">
       <label for="checkin"><p>Check-in-Date</p> </label>
     <input type="date" name="checkin" class="form-control">
     <span class="text-danger"><?php
        if (isset($err['checkin'])) {
            echo $err['checkin'];
        }
      ?><span class="text-danger">
   </div>
    <div class="col-md-4" >
       <label for="checkout"><p>Check-Out-Date</p> </label>
     <input type="date" name="checkout" class="form-control">
     <span class="text-danger"><?php
        if (isset($err['checkout'])) {
            echo $err['checkout'];
        }
      ?><span class="text-danger">
   </div>
   <div class="form-group">
       <a class="btn btn-info"  href="showbook.php" name="check">Check-Avaibility</a>
   </div>
    </form>
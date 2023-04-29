<?php
$title="Add-Room";
require "head.php";
 ?>
<?php
	if(isset($_POST['addd'])){
		$err=[];
		if(isset($_POST['type']) && !empty($_POST['type'])){
			$p=$_POST['type'];
		}else{
			$err['type']='Select room type';
		}
		if(isset($_POST['price']) && !empty($_POST['price'])){
			$price=$_POST['price'];
		}else{
			$err['price']='Enter Price';
		}
		if(isset($_POST['roomnum']) && !empty($_POST['roomnum'])){
			$roomnum=$_POST['roomnum'];
		}else{
			$err['roomnum']='Create Room No';
		}
		if(isset($_POST['capacity']) && !empty($_POST['capacity'])){
			$capacity=$_POST['capacity'];
		}else{
			$err['capacity']='Enter Capacity';
		}
		       if(count($err)==0){
             require "connection.php";
               $sql="insert into room(roomtype,price,roomnumber,capacity) values ('$p','$price','$roomnum','$capacity')";
               $connect->query($sql);
               if($connect->affected_rows == 1 && $connect->insert_id >0)
               {
                    $success="Room Created";
                     }
                     else{
                       $failed="Failure";
                     }
               }
           }
          
?>
	
<div class="container login-a">
  <div class="card">
    <div class="card-header">
      Add-Room
    </div>
    <div class="card-body">
      <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (isset($success)) { ?>
                        <p class="alert alert-success"><?php echo $success ?></p>
                    <?php } ?>
                    <?php if (isset($failed)) { ?>
                        <p class="alert alert-danger"><?php echo $failed ?></p>
                    <?php } ?>
                </div>
            </div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

    <div class="form-group">
		<label for="type">Room Type</label>
			<select name="type" name="type" placeholder="Room Type" id="type">
			<option value="">Select Room Type</option>
			<option value="Delux">Delux Room</option>
			<option value="Deux-twins">Delux Twins Room</option>
			<option value="Suite">Suits</option>
			</select>
         <?php if (isset($err['type'])) { ?>
           <span class="text-danger"><?php echo $err['type']; ?> </span>
        <?php  } ?>
          </div>

      <div class="form-group">
           <label for="price">Price*:</label>
         <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="Create Room-Number">
         <?php if (isset($err['price'])) { ?>
           <span class="text-danger"><?php echo $err['price']; ?> </span>
        <?php  } ?>
       </div>
		  <div class="form-group">
           <label for="roomnum">Room Number*:</label>
         <input type="text" class="form-control" name="roomnum" id="roomnum" aria-describedby="helpId" placeholder="Create Room-Number">
         <?php if (isset($err['roomnum'])) { ?>
           <span class="text-danger"><?php echo $err['roomnum']; ?> </span>
        <?php  } ?>
       </div>
		  <div class="form-group">
           <label for="capacity">Capacity*:</label>
         <input type="text" class="form-control" name="capacity" id="capacity" aria-describedby="helpId" placeholder="Create Room-Capacity">
         <?php if (isset($err['capacity'])) { ?>
           <span class="text-danger"><?php echo $err['capacity']; ?> </span>
        <?php  } ?>
       </div>
			  
		<input type="submit" name="addd" value="Create Room" class="btn btn-primary">
	</form>
     <div>
     </div>
 </div>
</div>
</div>
</div>
<?php
require_once "footer.php"; 
?>
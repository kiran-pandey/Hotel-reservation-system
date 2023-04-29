<?php
session_start();
		$bookedby=$_SESSION['user_username'];
		$check_in=$_SESSION['check_in'];
		$check_out=$_SESSION['check_out'];
		$user_id=$_SESSION['loggedInUser'];
$title="Booking";
require_once "head2.php";
 ?>
 <?php
	if(isset($_POST['book'])){
		$err=[];
		if(isset($_POST['fname']) && !empty($_POST['fname'])){
			$fname=$_POST['fname'];
		}else{
			$err['fname']='Enter Firstname';
		}
		if(isset($_POST['lname']) && !empty($_POST['lname'])){
			$lname=$_POST['lname'];
		}else{
			$err['lname']='Enter Last-name';
		}
		if(isset($_POST['number']) && !empty($_POST['number'])){
			$number=$_POST['number'];
		}else{
			$err['number']='Enter Number';
		}
		if(isset($_POST['email']) && !empty($_POST['email'])){
			$email=$_POST['email'];
		}else{
			$err['email']='Enter E-mail';
		}
		 
		if(count($err)==0){
             require "connection.php";
                 $sql="insert into fullreservation(f_name,l_name,number,email,bookedby,checkindate,checkoutdate,roomtype,cus_id) values ('$fname','$lname','$number','$email','$bookedby','$check_in','$check_out','Delux-Twin','$user_id')";
               $connect->query($sql);
               if($connect->affected_rows == 1)
               {
                    $success="Booked!!!";
                     }
                     else{
                         $failed="System Error! Try Again later.";
                     }
               }
	}
	?>
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
 <div class="col-sm-8">
<div class="card">
	<div class="card-header">
		<h3>Booking!!</h3>
	</div>
    <div class="card-body">
    	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="form" role="form">
    		<h3>Information of Guest</h3>
    		 <div class="form-row">
     <div class="form-group col-md-4">
		<label for="fname">Guest First-Name*</label>
		<input type="text" name="fname" id="fname" class="form-control" placeholder="Firstname">
		 <span class="text-danger"><?php
			if(isset($err['fname'])){
				echo $err['fname'];
			}
		 ?></span>
          </div>
          <div class="form-group col-md-4">
		<label for="lname">Guest Last-Name*</label>
		<input type="text" name="lname" id="lname" class="form-control" placeholder="LastName">
		 <span class="text-danger"><?php
			if(isset($err['lname'])){
				echo $err['lname'];
			}
		 ?></span>
          </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
		<label for="number">Contact Number*</label>
		<input type="number" name="number" id="number" class="form-control" placeholder="Phone Number">
		 <span class="text-danger"><?php
			if(isset($err['number'])){
				echo $err['number'];
			}
		 ?></span>
		</div>
		 <div class="form-group col-md-4">
		<label for="email">E-mail*</label>
		<input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
		 <span class="text-danger"><?php
			if(isset($err['email'])){
				echo $err['email'];
			}
		 ?></span>
		</div>
	</div>
	<div class="form-row">
    <div class="form-group col-md-4">
		<label for="bookby">Booked-By</label>
		<input type="text" name="bookby" id="bookby" class="form-control" value="<?php echo $bookedby ?>" disabled>
		</div>
		<div class="form-group col-md-4">
		<label for="type">Room-Type</label>
		<input type="text" name="type" id="type" class="form-control" value="Delux-Twin" disabled>
		</div>
		<div class="form-group col-md-4">
		<label for="price">Price</label>
		<input type="number" name="price" id="price" class="form-control" value="2000" disabled>
		</div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
		<label for="checkin">Check-in-Date</label>
		<input type="date" name="checkin" id="checkin" class="form-control" value="<?php echo $check_in ?>" disabled>
		</div>
		<div class="form-group col-md-4">
		<label for="checkin">Check-in-Date</label>
		<input type="date" name="checkin" id="checkin" class="form-control" value="<?php echo $check_out ?>" disabled>
		</div>
</div>

<input type="submit" name="book"  value="Book" class="btn btn-primary" onclick="return confirm ('Confirm Booking ?')">
</form>
</div>
</div>
</div>
</div>
<div>
<?php require_once "footer.php";  ?>
</div>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> 
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
   	$('#form').validate({
    rules:{
      fname:{
        pattern: /^[A-Z]{1}[a-z]{2,100}$/,
       
      },
      lname:{
        pattern: /^[A-Z]{1}[a-z]{2,100}$/,
        
      },
       number:{
        pattern: /^[0-9]{10}$/,
        
      },
      email:{
        email:true,
        
      },
    },
    messages:{
      fname:{
        pattern: '<small>InValid Name</small>'
      },
      lname:{
        pattern: '<small>InValid Name</small>'
      },
       number:{
        pattern: '<small>InValid</small>'
      },
      email:{
        pattern: '<small>InValid</small>'
      },
    },
  });
});
</script>

       



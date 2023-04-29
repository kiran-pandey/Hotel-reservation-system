<?php
$title='Sign-Up';
require "head.php";
 ?>
<?php
	if(isset($_POST['addd'])){
		$err=[];
		if(isset($_POST['fname']) && !empty($_POST['fname'])){
			$fname=$_POST['fname'];
		}else{
			$err['fname']='Enter Firstname';
		}
		if(isset($_POST['lname']) && !empty($_POST['lname'])){
			$lname=$_POST['lname'];
		}else{
			$err['lname']='Enter Lastname';
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
		if(isset($_POST['username']) && !empty($_POST['username'])){
			$username=$_POST['username'];
		}else{
			$err['username']='Enter User-Name';
		}
		if(isset($_POST['password']) && !empty($_POST['password'])){
			$password=$_POST['password'];
		}else{
			$err['password']='Enter PassWord';
		}
          $mname=$_POST['mname'];   
          if(count($err)==0){
             require "connection.php";
                $sql="insert into admin(f_name,m_name,l_name,number,email,username,password) values ('$fname','$mname','$lname','$number','$email','$username','$password')";
               $connect->query($sql);
               if($connect->affected_rows == 1)
               {
                    $success="Account Created";
                     }
                     else{
                         $failed="Account Failed To Create";
                     }
               }
          }
?>
 <style>
      
    .error{
        color: #e50000;
      }
    </style>
<div class="container login-a">
  <div class="card">
    <div class="card-header">
      Sign-Up
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
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="form" role="form">
    <div class="form-row">
     <div class="form-group col-md-4">
		<label for="fname">First Name*</label>
		<input type="text" name="fname" id="fname" class="form-control" placeholder="Firstname">
		 <span class="text-danger"><?php
			if(isset($err['fname'])){
				echo $err['fname'];
			}
		 ?></span>
          </div>
		  <div class="form-group col-md-4">
		<label for="mname">Middle Name</label>
		<input type="text" name="mname" id="mname" class="form-control" placeholder="Middlename(optional)">
	</div>
	 <div class="form-group col-md-4">
		<label for="lname">Last Name*</label>
		<input type="text" name="lname" id="lname" class="form-control" placeholder="Lastname">
		 <span class="text-danger"><?php
			if(isset($err['lname'])){
				echo $err['lname'];
			}
		 ?></span>
		</div>
     </div>
     <hr>
		<br/>
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
	</div>
		<br/>
          <hr>
		<div class="form-row">
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
		<br/>
          <hr>
<div class="form-row">
    <div class="form-group col-md-4">
		<label for="username">User-Name*</label>
		<input type="text" name="username" id="username" class="form-control" placeholder="User-Name">
          <span class="span_username"></span>
		 <span class="text-danger"><?php
			if(isset($err['username'])){
				echo $err['username'];
			}
		 ?></span>
		</div>
	</div>
		<br/>
          <hr>
		<div class="form-row">
    <div class="form-group col-md-4">
		<label for="password">PassWord*</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="PassWord">
          <span class="span_password"></span>
		 <span class="text-danger"><?php
			if(isset($err['password'])){
				echo $err['password'];
			}
		 ?></span>
		</div>
    
</div>
		<input type="submit" name="addd" value="Sign-Up" class="btn btn-primary">
	</form>
     </div>
 </div>
</div>
</div>
<?php require_once "footer.php";  ?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> 
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $('#username').keyup(function(){
        var username = $('#username').val();
        if (username.length < 8){
          $('.span_username').text('Username Must Be 8 Character');
          $('.span_username').css({
            'color':'#ff0000'
          });
        }else{
          $('.span_username').text('');
          //ajax
          $.ajax({
            url:'checkusername.php',
            method:'post',
            data:{'uname':username},
            dataType:'text',
            success:function(resp){
              $('.span_username').text(resp);
            }

          });
        }

      });
    //   $('#password').change(function(){
    //     var password=$('#password').val();
    //   $('#repassword').keyup(function(){
    //     var repassword=$('#repassword').val();
    //   if(repassword!=password){
    //     $('.span_repassword').text('PassWord incorrect');
    //     $('.span_repassword').css({
    //       'color' : '#ff0000'
    //     })
    //   }else{
    //     $('.span_repassword').text('');
    //   }
    // })
    // })
  $('#form').validate({
    rules:{
      fname:{
        pattern: /^[A-Z]{1}[a-z]{2,100}$/,
       
      },
      mname:{
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
     mname:{
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

       

<?php
$title='Register-Page';
require_once "header.php";
function validateUserData($value) {
require_once "connection.php";
//remove space
  $value = trim($value);
  //remove back slash from string
  $value = stripslashes($value);
  //encode special character
  $value = htmlspecialchars($value);
  //escape special character before inserting into database table
  //$value = $connect->real_escape_string($value);
  //return value
  return $value;
}
if(isset($_POST['add'])){
  $err=[];
  //form validation for name
    if (isset($_POST['fname']) && !empty($_POST['fname']))  {
      $fname =  validateUserData($_POST['fname']);
    } else {
      $err['fname'] =  'Enter FirstName';
    }
      $mname=$_POST['mname'];
    if (isset($_POST['lname']) && !empty($_POST['lname']))  {
      $lname =  validateUserData($_POST['lname']);
    } else {
      $err['lname'] =  'Enter Last name';
    }
    if (isset($_POST['address']) && !empty($_POST['address']))  {
      $address =  validateUserData($_POST['address']);
    } else {
      $err['address'] =  'Enter Address';
    }
    if (isset($_POST['email']) && !empty($_POST['email']))  {

      $email =  validateUserData($_POST['email']);

        /*
        FILTER_VALIDATE_BOOLEAN,FILTER_VALIDATE_DOMAIN,FILTER_VALIDATE_EMAIL,
        FILTER_VALIDATE_FLOAT,FILTER_VALIDATE_INT,FILTER_VALIDATE_IP,FILTER_VALIDATE_MAC,
        FILTER_VALIDATE_REGEXP,FILTER_VALIDATE_URL
        */

        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
          $err['email'] =  'Enter Valid Email';
        } 
      } else {
        $err['email'] =  'Enter Email';
      }
       if (isset($_POST['number']) && !empty($_POST['number']) && is_numeric($_POST['number']))  {
      $number =  $_POST['number'];
      if (strlen($number) < 10 ) {
        $err['number'] =  'Enter number  10 digit';
      }
    } else {
      $err['number'] =  'Enter Number';
    }
     if (isset($_POST['gender']))  {
      $gender =  $_POST['gender'];
    } else {
      $err['gender'] =  'Select Gender';
    }
    if (isset($_POST['idnumber']) && !empty($_POST['idnumber']) && is_numeric($_POST['idnumber']))  {
      $idnumber =  $_POST['idnumber'];
      if (strlen($idnumber) < 10 ) {
        $err['idnumber'] =  'Enter idnumber  10 digit';
      }
    } else {
      $err['idnumber'] =  'Enter CitizenShip-Number';
    }
     if (isset($_POST['username']) && !empty($_POST['username']) && 
      trim($_POST['username']) != '')  {
      //get username and trim username : remove white space from start and end 
      $username =  validateUserData($_POST['username']);
      //check lenght of string
      if (strlen($username) >= 8) {
        
      } else {
        $err['username'] =  'Username must be minimum 8 character';
      }
      
    } else {
      $err['username'] =  'Enter Username';
    }
     if (isset($_POST['password']) && !empty($_POST['password']))  {
      $password =  $_POST['password'];
    } else {
      $err['password'] =  'Enter Password';
    }
     if(count($err)==0){
             require "connection.php";
                $sql="insert into customer(F_Name,M_Name,L_Name,Address,Email,Contactnumber,Gender,Identificationnumber,Username,Password) values ('$fname','$mname','$lname','$address','$email','$number','$gender','$idnumber','$username','$password')";
               $connect->query($sql);
               if($connect->affected_rows == 1)
               {
                    $success= "Account Created";
                     }
                     else{
                         $failed = "Failed to create Account";
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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" id="form" role="form">

        <div class="form-group">
           <label for="fname">FirstName*:</label>
         <input type="text" class="form-control" name="fname" id="fname" aria-describedby="helpId" placeholder="Enter First-Name">
         <?php if (isset($err['fname'])) { ?>
           <span class="text-danger"><?php echo $err['fname']; ?> </span>
        <?php  } ?>
       </div>

         <div class="form-group">
           <label for="mname">MiddleName:</label>
         <input type="text" class="form-control" name="mname" id="mname" aria-describedby="helpId" placeholder="Enter Middle-Name(optional)">
         <?php if (isset($err['mname'])) { ?>
           <span class="text-danger"><?php echo $err['mname']; ?> </span>
        <?php  } ?>
       </div>

        <div class="form-group">
           <label for="lname">LastName*:</label>
         <input type="text" class="form-control" name="lname" id="lname" aria-describedby="helpId" placeholder="Enter Last-Name">
         <?php if (isset($err['lname'])) { ?>
           <span class="text-danger"><?php echo $err['lname']; ?> </span>
        <?php  } ?>
       </div>

        <div class="form-group">
           <label for="address">Address*:</label>
         <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="Enter First-Name">
         <?php if (isset($err['address'])) { ?>
           <span class="text-danger"><?php echo $err['address']; ?> </span>
        <?php  } ?>
       </div>

        <div class="form-group">
           <label for="email">Email*:</label>
         <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter Email">
          <?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?> </span>
        <?php  } ?>
       </div>

       <div class="form-group">
           <label for="number">Phone*:</label>
         <input type="text" class="form-control" name="number" id="number" aria-describedby="helpId" placeholder="Enter Mobile-Number">
          <?php if (isset($err['number'])) { ?>
           <span class="text-danger"><?php echo $err['number']; ?> </span>
        <?php  } ?>
       </div>

         <div class="form-group">
           <label for="idnumber">CitizenShip Number*:</label>
         <input type="text" class="form-control" name="idnumber" id="idnumber" aria-describedby="helpId" placeholder="Enter CitizenShip-Number">
          <?php if (isset($err['idnumber'])) { ?>
           <span class="text-danger"><?php echo $err['idnumber']; ?> </span>
        <?php  } ?>
       </div>

       <div class="form-group">
           <label for="username">Username*:</label>
         <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="Create Username">
         <span class="span_username"></span>
          <?php if (isset($err['username'])) { ?>
           <span class="text-danger"><?php echo $err['username']; ?> </span>
        <?php  } ?>
       </div>
       <div class="form-row">
       <div class="form-group">
         <label for="password">password*:</label>
       <input type="password" name="password" id="password" class="form-control"  title="" placeholder="Create Your password">
       <span class="span_password"></span>
        <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?> </span>
        <?php  } ?>
     </div>
   </div>
       <div class="form-group radio ">
         <label for="gender">Gender: </label>
          <input type="radio" name="gender"   value="0">Male
          <input type="radio" name="gender"   value="1">Female
          <br>
           <?php if (isset($err['gender'])) { ?>
              <span class="text-danger"><?php echo $err['gender']; ?> </span>
        <?php  } ?>
     </div>
     <div class="form-group">
      <button class="btn btn-success" type="submit" name="add" >Sign-Up</button>
   </div>
 </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div> 
<?php
  include "footer.php"; 
  ?> <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> 
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
      address:{
        pattern: /^[A-Z]{1}[a-z]{2,100}$/,
        
      },
      email:{
        email:true,
        
      },
      number:{
        pattern: /^[0-9]{10}$/,
        
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
      address:{
        pattern: '<small>InValid</small>'
      },
      email:{
        pattern: '<small>InValid</small>'
      },
      number:{
        pattern: '<small>InValid</small>'
      },
    },
  });
});
</script>

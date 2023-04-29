<?php 
$title = 'Sign-Up';
require_once "header.php";
?>
<?php
    if(isset($_POST['add'])){
        $err=[];
          $fname=$_POST['fname'];  
          $mname=$_POST['mname'];  
          $lname=$_POST['lname'];  
          $address=$_POST['address'];  
          $email=$_POST['email'];  
          $idnumber=$_POST['idnumber'];  
          $username=$_POST['username'];  
          $password=$_POST['password'];  
          $gender=$_POST['gender'];   
          if(count($err)==0){
             require "connection.php";
               $sql="insert into customer(F_Name,M_Name,L_Name,Address,Email,Contactnumber,Gender,Identificationnumber,Username,Password) values ('$fname','$mname','$lname','$address','$email','$number','$gender','$idnumber','$username','$password')";
               $connect->query($sql);
               if($connect->affected_rows == 1 && $connect->insert_id >0)
               {
                    echo("success");
                     }
                     else{
                         echo("failed");
                     }
               }
          }
?>
<div class="card-body">
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
        </div>
    <title><?php echo $title ?></title>
    <style>
        .error.form-control{
        border: 3px solid #e50000;
    }
    .error{
        color: #e50000;
    }
    .valid.form-control{
        border: 3px solid green;
    }
    </style>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit="return validate()" method="POST" id="sign">
    <div class="form-row">
     <div class="form-group col-md-4">
        <label for="fname">First Name</label>
        <input type="fname" name="fname" id="fname" class="form-control" placeholder="Firstname">
        <?php
            if(isset($err['fname'])){
                echo $err['fname'];
            }
         ?>
          </div>
          <div class="form-group col-md-4">
        <label for="mname">Middle Name</label>
        <input type="mname" name="mname" id="mname" class="form-control" placeholder="Middlename(optional)">
    </div>
     <div class="form-group col-md-4">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" class="form-control" placeholder="Lastname">
        <?php
            if(isset($err['lname'])){
                echo $err['lname'];
            }
         ?>
        </div>
     </div>
     <hr>
        <br/>
        <div class="form-row">
    <div class="form-group col-md-4">
        <label for="address">Permanent-Address</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Address">
        <?php
            if(isset($err['address'])){
                echo $err['address'];
            }
         ?>
        </div>
    </div>
        <br/>
          <hr>
        <div class="form-row">
    <div class="form-group col-md-4">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
        <?php
            if(isset($err['email'])){
                echo $err['email'];
            }
         ?>
        </div>
    </div>
        <br/>
          <hr>
        <div class="form-row">
    <div class="form-group col-md-4">
        <label for="number">Mobile Number</label>
        <input type="number" name="number" id="number" class="form-control" placeholder="Phone Number">
        <?php
            if(isset($err['number'])){
                echo $err['number'];
            }
         ?>
        </div>
    </div>
        <br/>
          <hr>
        <div class="form-row">
    <div class="form-group col-md-4">
        <label for="gender"  >Gender</label>
        <input type="radio" name="gender" id="gender" value="1" checked="">Male
        <input type="radio" name="gender" id="gender" value="0">Female
        <br/>
          <hr>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-4">
          <label for="number">Identification Number</label>
          <input type="number" name="idnumber" id="idnumber" class="form-control" placeholder="Citizenship\Passport Number">
          <?php
               if(isset($err['idnumber'])){
                    echo $err['idnumber'];
               }
           ?>
          </div>
     </div>
          <br/>
          <hr>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="username">User-Name</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="User-Name">
          <span class="span_username"></span>
        <?php
            if(isset($err['username'])){
                echo $err['username'];
            }
         ?>
        </div>
    </div>
        <br/>
          <hr>
        <div class="form-row">
    <div class="form-group col-md-4">
        <label for="password">PassWord</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="PassWord">
          <span class="span_password"></span>
        <?php
            if(isset($err['password'])){
                echo $err['password'];
            }
         ?>
        </div>
     <div class="form-group col-md-4">
        <label for="repassword">Re-Password</label>
        <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Re-Password">
          <span class="span_repassword"></span>
        <br/>
     </div>
</div>
        <input type="submit" name="add" value="signup" class="btn btn-primary">
    </form>
     <?php
  include "footer.php"; 
  ?>
   <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-method.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $('#sign').validate({
    rules:{
      fname:{
        pattern: /^[A-Z]{1}[a-z]{2,100}$/,
        required:true,
      },
      mname:{
        pattern: /^[A-Z]{1}[a-z]{2,100}$/,
        required:false,
      },
      lname:{
        pattern: /^[A-Z]{1}[a-z]{2,100}$/,
        required:true,
      },
      address:{
        pattern: /^[A-Z]{1}[a-z]{2,100}$/,
        required:true,
      },
      email:{
        email:true,
        required:true,
      },
      number:{
        pattern: /^[0-9]{10}$/,
        required:true,
      },
      idnumber:{
        pattern:/^[0-9]+[\-/]+[0-9]+[\-/]*$/,
        required: true,
      },
    },
    messages:{
      fname:{
        pattern: '<small>What is your name?</small>'
      },
     mname:{
        pattern: '<small>What is your name?</small>'
      },
      lname:{
        pattern: '<small>What is your name?</small>'
      },
      address:{
        pattern: '<small>What is your name?</small>'
      },
      email:{
        pattern: '<small>What is your name?</small>'
      },
      number:{
        pattern: '<small>What is your name?</small>'
      },
      idnumber:{
        pattern: '<small>What is your name?</small>'
      },
    },
  });
});
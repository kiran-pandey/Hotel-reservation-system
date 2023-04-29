<?php 
$title = 'Sign-Up';
require_once "header.php";
?>
<?php
    if(isset($_POST['add'])){
        $err=[];
        if(isset($_POST['fname']) && !empty($_POST['fname'])){
      $fname=$_POST['fname'];
    }else{
      $err['fname']='Enter Firstname';
    }
      if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $err['fname'] = "Only letters and white space allowed";
    }
    if(isset($_POST['lname']) && !empty($_POST['lname'])){
      $lname=$_POST['lname'];
    }else{
      $err['lname']='Enter Lastname';
    }
     if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $err['lname'] = "Only letters and white space allowed";
    }
    if(isset($_POST['address']) && !empty($_POST['address'])){
      $address=$_POST['address'];
    }else{
      $err['address']='Enter address';
    }
     if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
      $err['address'] = "Only letters and white space allowed";
    }
    if(isset($_POST['email']) && !empty($_POST['email'])){
      $email=$_POST['email'];
    }else{
      $err['email']='Enter Email';
    }
    if(isset($_POST['number']) && !empty($_POST['number'])){
      $number=$_POST['number'];
    }else{
      $err['number']='Enter Number';
    }

    if(isset($_POST['idnumber']) && !empty($_POST['idnumber'])){
      $idnumber=$_POST['idnumber'];
    }else{
      $err['idnumber']='Enter Id-Number';
    }
    if(isset($_POST['username']) && !empty($_POST['username'])){
      $username=$_POST['username'];
    }else{
      $err['username']='Enter Username';
    }
    if(isset($_POST['password']) && !empty($_POST['password'])){
      $password=$_POST['password'];
    }else{
      $err['password']='Enter password';
    } 
    $mname=$_POST['mname'];
          $gender=$_POST['gender'];   
          if(count($err)==0){
             require "connection.php";
               $sql="insert into customer(F_Name,M_Name,L_Name,Address,Email,Contactnumber,Gender,Identificationnumber,Username,Password) values ('$fname','$mname','$lname','$address','$email','$number','$gender','$idnumber','$username','$password')";
               $connect->query($sql);
               if($connect->affected_rows == 1 && $connect->insert_id >0)
               {
                    $success= "Account Created";
                     }
                     else{
                         $failed = "Failed to create Account";
                     }
               }
          }

?>
 <div class="container-fluid login-a">
  <div class="card">
    <div class="card-header">
      <h1>Sign-up</h1>
    </div>
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit="return validation()"  method="POST"  name="signup">
    <div class="form-row">
     <div class="form-group col-md-4">
        <label for="fname">First Name</label>
        <input type="fname" name="fname" id="fname" class="form-control" placeholder="Firstname">
        <span class="error"><?php
            if(isset($err['fname'])){
                echo $err['fname'];
            }
         ?>
       </span>
          </div>
          <div class="form-group col-md-4">
        <label for="mname">Middle Name</label>
        <input type="mname" name="mname" id="mname" class="form-control" placeholder="Middlename(optional)">
    </div>
     <div class="form-group col-md-4">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" class="form-control" placeholder="Lastname">
        <span>
        <?php
            if(isset($err['lname'])){
                echo $err['lname'];
            }
         ?>
       </span>
        </div>
     </div>
     <hr>
        <br/>
        <div class="form-row">
    <div class="form-group col-md-4">
        <label for="address">Permanent-Address</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Address">
        <span>
        <?php
            if(isset($err['address'])){
                echo $err['address'];
            }
         ?>
       </span>
        </div>
    </div>
        <br/>
          <hr>
        <div class="form-row">
    <div class="form-group col-md-4">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
        <span>
        <?php
            if(isset($err['email'])){
                echo $err['email'];
            }
         ?>
       </span>
        </div>
    </div>
        <br/>
          <hr>
        <div class="form-row">
    <div class="form-group col-md-4">
        <label for="number">Mobile Number</label>
        <input type="number" name="number" id="number" class="form-control" placeholder="Phone Number">
        <span>
        <?php
            if(isset($err['number'])){
                echo $err['number'];
            }
         ?>
       </span>
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
          <span>
          <?php
               if(isset($err['idnumber'])){
                    echo $err['idnumber'];
               }
           ?>
         </span>
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
  </div>
</div>
     <?php
  include "footer.php"; 
  ?>
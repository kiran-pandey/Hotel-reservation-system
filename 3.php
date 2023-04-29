<?php 
$title = 'Register Page';
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
  $value = $connect->real_escape_string($value);
  //return value
  return $value;
}

if(isset($_POST['btnRegister'])){
  $err = [];
    //form validation for name
    if (isset($_POST['name']) && !empty($_POST['name']))  {
      $name =  validateUserData($_POST['name']);
    } else {
      $err['name'] =  '  Enter Name      ';
    }

    //form validation for email
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

     //form validation for username
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

     //form validation for password
    if (isset($_POST['password']) && !empty($_POST['password']))  {
      $password =  $_POST['password'];
    } else {
      $err['password'] =  'Enter Password';
    }

     //form validation for gender
    if (isset($_POST['gender']) && !empty($_POST['gender']))  {
      $gender =  $_POST['gender'];
    } else {
      $err['gender'] =  'Select Gender';
    }

     //form validation for phone
    if (isset($_POST['phone']) && !empty($_POST['phone']) && is_numeric($_POST['phone']))  {
      $phone =  $_POST['phone'];
      if (strlen($phone) < 0 ) {
        $err['phone'] =  'Enter phone minimum 10 digit';
      }
    } else {
      $err['phone'] =  'Enter phone';
    }

     //form validation for year
    if (isset($_POST['year']) && !empty($_POST['year']) && is_numeric($_POST['year']))  {

      $year =  $_POST['year'];
      if (!filter_var($year,FILTER_VALIDATE_REGEXP,array("options" => array("regexp"=>"/^[0-9]{4}/")))) {
        $err['year'] =  'EnterValid year';   
      }

      $thisYear = date('Y');
      if ($year > ($thisYear-100) && $year < date('Y')) {
        
      }

    } else {
      $err['year'] =  'Enter year';
    }
}
 ?>
<div class="container login-a">
  <div class="card">
    <div class="card-header">
      Register
    </div>
    <div class="card-body">
      <div class="container">
         <small class="text-muted">
     <?php if(isset($err['msssage'])) echo $err['message']; ?>
   </small>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
        <div class="form-group">
           <label for="name">Name:</label>
         <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter Name">
         <?php if (isset($err['name'])) { ?>
           <span class="text-danger"><?php echo $err['name']; ?> </span>
        <?php  } ?>
       </div>
        <div class="form-group">
           <label for="email">Email:</label>
         <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter Email">
          <?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?> </span>
        <?php  } ?>
       </div>
       <div class="form-group">
           <label for="username">Username:</label>
         <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
          <?php if (isset($err['username'])) { ?>
           <span class="text-danger"><?php echo $err['username']; ?> </span>
        <?php  } ?>
       </div>
       <div class="form-group">
         <label for="my-textarea">password:</label>
       
       <input type="password" name="password" id="password" class="form-control"  title="">
        <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?> </span>
        <?php  } ?>
     </div>
     <div class="form-group">
         <label for="photo">IMage:</label>
        
       <input type="file" name="photo" class="form-control"  title="">
        <?php if (isset($err['photo'])) { ?>
           <span class="text-danger"><?php echo $err['photo']; ?> </span>
        <?php  } ?>
     </div>
       <div class="form-group">
         <label for="male">Gender: </label>
          <input type="radio" name="gender" id="male"   value="male">Male
          <input type="radio" name="gender" id="female"  value="female">Female
          <br>
           <?php if (isset($err['gender'])) { ?>
              <span class="text-danger"><?php echo $err['gender']; ?> </span>
        <?php  } ?>
     </div>
     <div class="form-group">
           <label for="phone">Phone:</label>
         <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="">
          <?php if (isset($err['phone'])) { ?>
           <span class="text-danger"><?php echo $err['phone']; ?> </span>
        <?php  } ?>
       </div>
        <div class="form-group">
           <label for="year">Year:</label>
         <input type="number" class="form-control" name="year" id="year" aria-describedby="helpId" placeholder="">
          <?php if (isset($err['year'])) { ?>
           <span class="text-danger"><?php echo $err['year']; ?> </span>
        <?php  } ?>
       </div>
     <div class="form-group">
      <button class="btn btn-success" type="submit" name="btnRegister" >Register</button>
      <input type="submit" class="btn btn-primary" value="login" name="login" onclick="parent.location='index.php'">
   </div>
 </div>
</div>
</div>    
<?php require_once "footer.php"; ?>
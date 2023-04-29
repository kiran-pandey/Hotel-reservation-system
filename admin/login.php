<?php 
$title = 'Login Page';
?>
<?php 
  
  if (isset($_COOKIE['username'])) {
    session_start();
    $_SESSION['username'] = $_COOKIE['username'];
    header('location:12.dashboard.php');
  }

// echo time();
  /*
  form method: get => $_GET,post => $_POST
  action: page to process form data
  form control name : 
  */
  //check button click state
  if (isset($_POST['login'])) {
    //create new array to store error
    $err = [];
    if (isset($_POST['username']) && !empty($_POST['username'])) {
      $username =  $_POST['username'];
    } else {
      $err['username']  = "Enter Username";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
      $password =  $_POST['password'];
    } else {
      $err['password'] =  "Enter password";
    }

    if (count($err) == 0) {
    
      require_once "connection.php";

      //query to select data form database with user provided username and password
      $sql = "select * from admin where username='$username' and password='$password'";
      //execute
      $result =$connect->query($sql);

      if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        //print_r($user);
        session_start();
        //store username into session
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_name'] = $user['name'];
        //check remember me button
        if (isset($_POST['remember'])) {
          setcookie('admin_username',$username,time()+7*24*60*60);
        }
        //redirect to next page
        header("location:12.dashboard.php");
      } else {
        $msg =  "Login failed";
      }
    }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <style>
body, html {
  height: 100%;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>
  <div class="container">
     <div class="card">
    <div class="card-header">
      <h1>Login</h1>
    </div>
    <div class="card-body">
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="container">
  <div class="col-md-5 mb-2">
    <label for="username">UserName</label>
    <input type="text" class="form-control" id="username" name="username"  placeholder="Enter UserName">
      <?php if (isset($err['username'])) { ?>
           <span class="text-danger"><?php echo $err['username']; ?> </span>
        <?php  } ?>
  </div>
  <div class="col-md-5 mb-2">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
      <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?> </span>
        <?php  } ?>
  </div>
  <div class="col-md-5 mb-3">
    <input type="checkbox" class="form-check-input" id="remember">
    <label class="form-check-label" for="remember">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary" name="login">Login</button><br>
</form>
</div>
</div>
</div>
</body>
</html>

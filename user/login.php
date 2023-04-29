<?php 
$title = 'Login Page';
require_once "header.php";
?>
<?php 
  if(isset($_COOKIE['user_username'])) {
    session_start();
    $_SESSION['user_username'] = $_COOKIE['user_username'];
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
      $sql = "select * from customer where  username='$username' and password='$password'";
      //execute
      $result =$connect->query($sql);

      if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        print_r($user);
        session_start();
        //store username into session
        $_SESSION['user_username'] = $username;
        $_SESSION['loggedInUser'] = $user['cus_id'];

        //check remember me button
        if (isset($_POST['remember'])) {
          setcookie('user_username',$username,time()+7*24*60*60);
        }
        //redirect to next page
        header("location:12.dashboard.php");
      } else {
        $msg =  "Login failed";
      }
    }
}
 ?>
 <div class="container-fluid login-a">
  <div class="card">
    <div class="card-header">
      <h1>Login</h1>
    </div>
    <div class="card-body">
      <div class="container">
      <?php if(isset($_GET['msg']) && $_GET['msg'] == 1){ ?>
      <p class="err_message">please login to access dashboard</p>
    <?php }  ?>

    <?php if(isset($msg)){ ?>
      <p class="alert alert-danger"><?php echo $msg ?></p>
    <?php }  ?>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="container">
  <div class="col-md-5 mb-2">
    <label for="username">UserName</label>
    <input type="text" class="form-control" id="username" name="username"  placeholder="Enter UserName">
    <?php if (isset($err['username'])) { ?>
             <span class="text-danger"><?php echo $err['username']; ?></span>
           <?php } ?>
  </div>
  <div class="col-md-5 mb-2">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
     <?php if (isset($err['password'])) { ?>
             <span class="text-danger"><?php echo $err['password']; ?></span>
           <?php } ?>
  </div>
  <div class="col-md-5 mb-3">
    <input type="checkbox" class="form-check-input" id="remember">
    <label class="form-check-label" for="remember">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary" name="login">Login</button><br>
   <a href="sign.php">Don't Have Account?</a>
</form>
</div>
</div>
</div>
</div>



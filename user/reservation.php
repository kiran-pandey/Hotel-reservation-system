<?php require_once "header.php" ?>

<div class="container login-a">
  <div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
      <div class="container">

       <div class="form-group">
         <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
           <label for="username">Username:</label><?php if (isset($err['username'])) {
           echo $err['username'];
         } ?>
         <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
       </div>
       <div class="form-group">
         <label for="my-textarea">password:</label>
         <?php if (isset($err['password'])) {
         echo $err['password'];
       } ?>
       <input type="password" name="password" id="input" class="form-control" required="required" title="">
     </div>
     <div class="form-group">
      <input type="submit" class="btn btn-primary" value="login" name="login">
      <button class="btn btn-primary" type="button" onclick="parent.location='register.php'">Register</button>

      <label>
       <input type="checkbox" value="" name="remember">
       Remember me
     </label>
   </div>
   <small class="text-muted">
     <?php if(isset($err['msssage'])) echo $err['message']; ?>
   </small>
 </div>
</div>
</div>    
<?php require_once "footer.php"; ?>
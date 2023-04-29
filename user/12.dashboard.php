<?php
$title='Shivraj Palace' ;
require_once "head2.php";
require_once "checkloginstatus.php";
?>
<?php
if (isset($_POST['check'])) {
  $err = [];
if(isset($_POST['checkin']) && !empty($_POST['checkin'])){
      $checkin = $_POST['checkin'];
    }else{
      $err['checkin'] = 'Enter Check-in-date';
    }
    if(isset($_POST['checkout']) && !empty($_POST['checkout'])){

      $checkout = $_POST['checkout'];
    }else{
      $err['checkout'] = 'Enter Check-out-date';
    }
    if(count($err)==0){
             require "connection.php";
              $_SESSION['check_in'] = $checkin;
               $_SESSION['check_out'] = $checkout;
               // $connect->query($sql);
               // if($connect->affected_rows == 1)
                
                     header("location:showbook.php");
                     }
                     else{
                         $failed = "Failed";
                     }
  }

 ?>
<style>
  h1{
  font-family: Times Roman;
  font-weight: bolder;
  color:#bd2026;
}
h3{
  font-family: Times Roman;
  font-weight: thick;
  color:#bd2026;
}
h2{
  font-family: Times Roman;
  font-weight: thick;
  color:#bd2026;
}
p{
  font-family: Times Roman;
  font-weight: thick;
  color:#9e8937;
  font-size: 25px;
}
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/c1.jpg" alt="cover">
      <div class="carousel-caption d-none d-md-block">
    <h2>Shivraj Resort</h2>
    <p>The Panoramic View Of Resort</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/c3.jpg" alt="resort">
      <div class="carousel-caption d-none d-md-block">
    <h2>Kaliz Restro</h2>
    <p>Amazing Place To Have a Good Time With Good Food</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/c2.jpg" alt="Food">
      <div class="carousel-caption d-none d-md-block">
    <h2>Foods</h2>
    <p>Foods Brings Smile On Face</p>
  </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/c4.jpg" alt="rooms">
      <div class="carousel-caption d-none d-md-block">
    <h2>Room</h2>
    <p>Stay In Our Paradise</p>
    <a href="#room">Rooms Category</a>
  </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/c5.jpg" alt="weds">
       <div class="carousel-caption d-none d-md-block">
    <h2>Wedding Venue</h2>
    <p>Get Into Relation With Us</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div><center><h1>SHIVRAJ RESORT</h1></center>
<p align="center">Shivraj Palace  is in Bhairahawa, in the fertile, subtropical Terai region of Nepal. Situated to the south of the legendary Himalayas, the resort is easily accessible from India or Kathmandu, offering guests a sophisticated and thrilling getaway. </p>
<p align="center">Luxurious accommodation, superb leisure facilities and top-class dining options make Shivraj Palace  a perfect venue for holidays, quick breaks, conferences and weddings.</p>
</div>
<div class="container text-center" id="room">    
  <h2>OUR ROOMS</h2><br>
  <div class="row">
    <div class="col-sm-4">
     <a href="droom.php"><img src="images/r1.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <h3>Delux Twins</h3>
    </div>
    <div class="col-sm-4"> 
       <a href="droom2.php"><img src="images/deluxking.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <h3>Delux King</h3>    
    </div>
    <div class="col-sm-4"> 
     <a href="dtroom.php"><img src="images/r2.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <h3>Suite</h3>    
    </div>
  </div>
</div>
<div class="container" id="book">
  <div class="card">
    <div class="card-header">
      <h1>Start-booking</h1>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
       <div class="col-md-4">
       <label for="checkin"><p>Check-in-Date</p> </label>
     <input type="date" name="checkin" class="form-control" required>
     <span class="text-danger"><?php
        if (isset($err['checkin'])) {
            echo $err['checkin'];
        }
      ?><span class="text-danger">
   </div>
    <div class="col-md-4" >
       <label for="checkout"><p>Check-Out-Date</p> </label>
     <input type="date" name="checkout" class="form-control" required>
     <span class="text-danger"><?php
        if (isset($err['checkout'])) {
            echo $err['checkout'];
        }
      ?><span class="text-danger">
   </div>
   <div class="form-group">
         <button name="check" href="showbook.php">Check</button>
   </div>
    </form>
  </div>
</div>
<footer class="container-fluid text-center">
<?php require_once "footer.php"; ?>
  </footer>  
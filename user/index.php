<?php
$title='Shivraj Palace'; 
require_once "header.php";
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
      <a href="droom2.php"><img src="images/r1.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <h3>Delux Twins</h3>
    </div>
    <div class="col-sm-4"> 
      <a href="droom.php"><img src="images/deluxking.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <h3>Delux King</h3>    
    </div>
    <div class="col-sm-4"> 
      <a href="dtroom.php"><img src="images/r2.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <h3>Suite</h3>    
    </div>
  </div>
</div>
<div>
<?php require_once "footer.php";
 ?>
</div>
<?php
$title="start-Booking";
require_once 'head2.php';
// session_start();
// $userId = $_SESSION['loggedInUser'] ;

// require_once 'connection.php';
//  $sql = "select r_id from reservation where cus_id = '$userId'"; 

 //$result =$connect->query($sql);  
?>
<form>
  <div class="row">
    <div class="col-sm-8">
<div class="card">
	<div class="card-header">
		<h3>DELUX TWINS</h3>
	</div>
    <div class="card-body">
      	<div>
      		<div><img src="images/r1.jpg"></div>
      	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <a class="btn btn-info" href="deluxtwinbook.php">BOOK NOW!!!</a>
      </div>
  </div>
</div>
</div>
</div>
<br>
<br>
<br>
<div class="row">
    <div class="col-sm-8">
<div class="card">
	<div class="card-header">
		<h3>DELUX KING</h3>
	</div>
    <div class="card-body">
      	<div>
      		<div><img src="images/deluxking.jpg"></div>
      	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <a class="btn btn-info" href="booknow.php">BOOK NOW!!!</a>
      </div>
  </div>
</div>
</div>
</div>
<br>
<br>
<br>
<div class="row">
    <div class="col-sm-8">
<div class="card">
	<div class="card-header">
		<h3>PREMIUM SUITE</h3>
	</div>
    <div class="card-body">
      	<div>
      		<div><img src="images/suite.jpg"></div>
      	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <a class="btn btn-info" href="suitebook.php">BOOK NOW!!!</a>
      </div>
  </div>
</div>
</div>
</div>
</form>
</div>
<?php
require_once "footer.php";
 ?>
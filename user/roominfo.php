<?php
$title='ROOMS';
require_once "header.php";
 ?>
 <style>
* {
  box-sizing: border-box;
}

 {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

.column img {
  margin-top: 12px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<!-- Header -->
<div class="header">
  <h1>Our Rooms</h1>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
  <a href="dtroom2.php"><img src="images/r1.jpg" style="width:100%">
  </div>
  <div class="column">
  <a href="suite2.php"><img src="images/r2.jpg" style="width:100%">
  
  </div>  
  <div class="column">
  <a href="droom2.php"><img src="images/suite.jpg" style="width:100%">
  </div>
</div>
<?php
  include "footer.php"; 
  ?>
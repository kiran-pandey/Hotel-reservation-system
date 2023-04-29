<?php
$title='Gallery';
require_once "head2.php";
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
  <h1>Gallery</h1>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
  <img src="images/bg.jpg" style="width:100%">
  <img src="images/c4.jpg" style="width:100%">
  <img src="images/c3.jpg" style="width:100%">
  <img src="images/c2.jpg" style="width:100%">
  <img src="images/c4.jpg" style="width:100%">
  <img src="images/c3.jpg" style="width:100%">
  <img src="images/c4.jpg" style="width:100%">
  </div>
  <div class="column">
  <img src="images/bg.jpg" style="width:100%">
  <img src="images/c5.jpg" style="width:100%">
  <img src="images/c1.jpg" style="width:100%">
  <img src="images/bg.jpg" style="width:100%">
  <img src="images/c5.jpg" style="width:100%">
  <img src="images/bg.jpg" style="width:100%">
  </div>  
  <div class="column">
  <img src="images/c1.jpg" style="width:100%">
  <img src="images/c4.jpg" style="width:100%">
  <img src="images/c1.jpg" style="width:100%">
  <img src="images/c2.jpg" style="width:100%">
  <img src="images/c1.jpg" style="width:100%">
  <img src="images/c4.jpg" style="width:100%">
  <img src="images/c1.jpg" style="width:100%">
  </div>
  <div class="column">
  <img src="images/bg.jpg" style="width:100%">
  <img src="images/c5.jpg" style="width:100%">
  <img src="images/c5.jpg" style="width:100%">
  <img src="images/bg.jpg" style="width:100%">
  <img src="images/c5.jpg" style="width:100%">
  </div>
</div>
<?php
require_once "footer.php"; 
?>
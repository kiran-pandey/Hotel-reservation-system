<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title?></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="12.dashboard.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addroom.php">Add-Room</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="listroom.php">View Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewreservation.php">View Reservation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listuser.php">View Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Add-Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listadmin.php">View-Admin</a>
      </li>
  </ul>
          <div>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php" class="btn btn-outline-secondary"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
          </ul>
        </div>
  </div>
</nav>

<html>
<head>
   <meta charset="utf-8"/>
     <title>Selling</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	 </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      </button>
      <a class="navbar-brand" href="#">E-Bookstore</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Homepage</a></li>
        <li><a href="library.php">Books list</a></li>
		<li><a href="reserved.php">Reserved Books</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center">   
  <div class="row content">
	<div class="col-sm-2 sidenav">
	</div>
	<div class="col-sm-8 text-left">
		<h1 class="page-header text-center text-primary">Sold books</h1>
	<?php
	if (!array_key_exists('Reservation-Nb', $_POST)) {
		echo "<p>No selected books !</p>";
	} else {
		$ReservationNb=$_POST['Reservation-Nb'];
		$db = new SQLite3('Books.db');
		foreach($ReservationNb as $reservationnb){
			$delete = 'DELETE FROM Reservations WHERE "Reservation-Nb" = \'' . $reservationnb . '\'';
			$db->exec($delete);
		}
		echo "<p>Congratulations on selling the books !</p>";
	}
	?>
	</div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
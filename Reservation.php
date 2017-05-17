<html>
<head>
   <meta charset="utf-8"/>
     <title>Reservations</title>
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
        <li><a href="library_guest.php">Books list</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">   
  <div class="row content">
	<div class="col-sm-2 sidenav">
	</div>
	<div class="col-sm-8 text-left">
		<h1 class="page-header text-center text-primary">Reserved Books</h1>
	<?php
	if (!array_key_exists('ISBN', $_POST)) {
		echo "<p>No selected books !</p>";
	} else {
		$ISBN=$_POST['ISBN'];
		$db = new SQLite3('Books.db');
		foreach($ISBN as $isbn){
			$insert = 'INSERT INTO RESERVATIONS ("ISBN", "Title", "Author", "Year-Of-Publication", "Publisher" )
			SELECT "ISBN", "Title", "Author", "Year-Of-Publication", "Publisher" FROM Books WHERE "ISBN" = \'' . $isbn . '\'';
			$db->exec($insert);
		}
		echo "<p>Books successfuly reserved !</p>";
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
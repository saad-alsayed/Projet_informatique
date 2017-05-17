<html>
<head>
   <meta charset="utf-8"/>
     <title>Add new book</title>
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
		<h1 class="page-header text-center text-primary">New entry</h1>
		<div class="form-group">
		<?php
		 $db = new SQLite3('Books.db');		 
		 $title=$_POST['title'];
		 $ISBN=$_POST['ISBN'];
		 $author=$_POST['author'];
		 $year=$_POST['year'];
		 $publisher=$_POST['publisher'];
		 $insert = 'INSERT INTO BOOKS ("ISBN", "Title", "Author", "Year-Of-Publication", "Publisher" ) '.
			'VALUES (\''. $ISBN .'\',\''. $title .'\',\''. $author .'\',\''. $year .'\',\''. $publisher .'\')';
		 $db->exec($insert);
		 echo "The book was successfully added !<br/>";
		?>
		</div>
		<div class="form-group">
		<a type="button" class="btn btn-info" href="add-book.html">Add another book</a>
		</div>
	</div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
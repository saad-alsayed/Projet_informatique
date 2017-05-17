<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8"/>
   <title>The Library</title>
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
        <li class="active"><a href="library.php">Books list</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center">   
  <div class="row content">
	<div class="col-sm-2 sidenav">
	</div>
	<div class="col-sm-8 text-left">
		<h1 class="page-header text-center text-primary">The list of books in the library</h1>
	</div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
<form action="" method="POST">
<table class="table table-hover">
<tr><th>Title</th><th>Author</th><th>Publisher</th><th>Year</th>
</tr>
<?php
if (array_key_exists('offset', $_GET)) {
    $offset = $_GET['offset'];
} else {
    $offset = 0;
}

$query = 'SELECT "ISBN", "Title", "Author", "Year-Of-Publication", "Publisher"'.
    'FROM Books WHERE 1 ';

$query = $query . "LIMIT 10 " . "OFFSET " . $offset ;

$db = new SQLite3('Books.db');
$results = $db->query($query);

while ($row = $results->fetchArray()) {
    echo "<tr>";
    echo "<td>",$row[1],"</td>";
    echo "<td>",$row[2],"</td>";
    echo "<td>",$row[4],"</td>";
	echo "<td>",$row[3],"</td>";
    echo "<td><input type='checkbox' name='ISBN[]' value='",$row[0],"'/></td>";
    echo "</tr>\n";
}

?>

</table>
<nav class="navbar-bottom" aria-label="Page navigation">
  <ul class="pager">
    <li class="previous"><?php echo "<a href='library_guest.php?";
		echo 'offset=', intval($offset) - 10;
		echo "'>Previous page</a>"
		?>
	</li>
    <li>
	<input onClick="form.action='Reservation.php'" class="btn btn-success navbar-btn" id="Reservation" type="submit" value='Reservation'/>
	</li>
	
	<li class="next"><?php echo "<a href='library_guest.php?";
		echo 'offset=', intval($offset) + 10;
		echo "'>Next page</a>"
		?>
	</li>
  </ul>
</nav>
</form>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
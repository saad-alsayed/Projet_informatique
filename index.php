<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>E-Bookstore</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">E-Bookstore</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="homepage.php">Homepage</a></li>
        <li><a href="library_guest.php">Books list</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  
</nav>
<div class="container-fluid text-center">   
  <div class="row content">
	<div class="col-sm-2 sidenav">
	</div>
	<div class="col-sm-8 text-left">
		<h1 class="page-header text-center text-primary">Welcome to the E-Bookstore</h1>
        <div class="text-center">
			<a href="library_guest.php" type="button" class="btn btn-default">
				<span class="glyphicon glyphicon-user"></span>
			Guest</a>
		
			<a href="library.php" type="button" class="btn btn-primary">
				<span class="glyphicon glyphicon-log-in"></span>
			Admin</a>
		</div>
	</div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
    
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
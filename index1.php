<?php
	session_start();
?>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<title>index page</title>
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Four Seasons</a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href=home.php>Home</a></li>
	        <li><a href=accommodation.php>Accomodation</a></li>
			<li><a href=tariff.php>Tariff and Policies</a></li>
			<li><a href=reservation.php>Booking</a></li>
			<li><a href=restaurant.php>Restaurant</a></li>
			<li><a href=aboutus.php>About Us</a></li>
	      </ul>
				<ul class="nav navbar-nav navbar-right">
				<?php
			if(isset($_SESSION['username'])){
				echo '<li><a href="logout.php">Logout</a></li>';
			}
			else{
        		echo '<li><a href="login.php">Login</a></li>';
			}
		?>
      </ul>
	    </div>
	  </div>
	</nav>
	<br />
	<script src="js/bootstrap.min.js"></script>
</body>

</html>

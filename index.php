<?php
session_start();
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">
               alert("' . $_GET['Message'] . '");
           </script>';
}
?>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<title>index page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2s;
}
.mySlides img {
  width: 100%;
  height: 500px;
}


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
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
	<div class="slideshow-container">

	<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/standard room.jpg" alt="Standard room">
  <div class="text">Standard room</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/suite.jpg" alt="Suite">
  <div class="text">Suite</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/super deluxe.jpg" alt="Super Deluxe">
  <div class="text">Deluxe room</div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	<br />
	<script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php
	error_reporting(0);
	ini_set('display_errors', 0);

	require 'dbconnect.php';
	$query = "SELECT * FROM site_controls";
	$query_run = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($query_run);
?>

<html>
<head>
	<link href="css/header.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src=
"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
    </script>
	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
	</style>	
</head>
<body>
<section class="header">
	<!-- Logo -->
	<div class="logo">
		<a href="#"><img src="images/site-controls/<?php echo $row['site_logo']; ?>" alt="Site-Logo" /></a>
	</div>
	
	<!-- Navbar -->
	<div class="navbar">
		<ul class="navbar-nav">
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="farmers.php">Farmers</a></li>
			<li><a href="shop.php">Shop</a></li>
			<li><a href="gprice.php">Govt. Prices</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
		</ul>
	</div>
	
	<!-- Login Button -->
	<div class="account-area">
		<a href="popup/login-popup.php"><button Value="Login" class="btn btn-sm btn-fill" id=loginBtn>Login</button></a>
	</div>
	
	<!-- login popup -->
	
</section>
</body>
</html>
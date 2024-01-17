<?php 
	require 'dbconnect.php';
?>

<html>
<head>
	<title>eFarming</title>

	<meta content= "width=device-width, height=device-height, initial-scale=1" name="viewport">
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/index.css" rel="stylesheet" />
	<link href="css/shape-divider.css" rel="stylesheet" />
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/8755f6524d.js" crossorigin="anonymous"></script>
	
	<script src="js/login.js"></script>
	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
	</style>
</head>
<body>
	
<!-- header -->
<?php include('header.php'); ?>

<!-- Landing -->
<section class="landing">
	<div class="container-box landing-content">
		<div class="landing-texts">
			<h1 class="site-title">eFarming</h1>
			<p class="site-desc-short">This is a platform to help farmers to sell their crops and goods to any dealer.</p>
			<p class="site-desc-short">Also buyer/dealer can register themselves to explore farms and farmers.</p>
			<div class="landing-quick-btn">
				<a href="farmers.php"><button class="btn btn-bg btn-transparent"><i class="fa-solid fa-warehouse left-side-icon"></i>Explore Farmers</button></a>
				<a href="shop.php"><button class="btn btn-bg btn-transparent"><i class="fa fa-pagelines left-side-icon"></i>Crops Categories</button></a>
			</div>
		</div>
		
		<div class="landing-banner">
			<img src="images\bann.svg" alt="eFarming image" class="landing-image">
		</div>
	</div>
	
	
	<div class="shape-divider-1">
		<svg data-name="Layer 1" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
		</svg>
	</div>
</section>

<!-- Latest Crops Categories  -->
<section class="landing-crp-ctg">
	<div class="top-heading">
		<h2>Crops Categories</h2>
		<div class="divider"></div>
		<p>Top crops categories of India</p>
	</div>
	
	<div class="crop-ctg container-box">
		<div class="crop-ctg-detail">
			<div class="crop-img">
				<img src="images/rice.jpg" alt="#" />
			</div>
			<div class="crop-texts">
				<h3>Food Crops</h3>
				<p>Wheat, Maize, Rice, Millets, Pulses etc.</p>
			</div>
		</div>
	
		<div class="crop-ctg-detail">
			<div class="crop-img">
				<img src="images/cotton.jpg" alt="#" />
			</div>
			<div class="crop-texts">
				<h3>Cash Crops</h3>
				<p>Sugarcane, Cotton, Jute, Oilseeds etc.</p>
			</div>
		</div>
		
		<div class="crop-ctg-detail">
			<div class="crop-img">
				<img src="images/black-tea.jpg" alt="#" />
			</div>
			<div class="crop-texts">
				<h3>Plantation Crops</h3>
				<p>Coffee, Coconut, Tea, Rubber etc.</p>
			</div>
		</div>
		
		<div class="crop-ctg-detail">
			<div class="crop-img">
				<img src="images/fruits-vegetables.jpg" alt="#" />
			</div>
			<div class="crop-texts">
				<h3>Horticulture Crops</h3>
				<p>Fruits and Vegetables.</p>
			</div>
		</div>
	</div>
	
	<div class="browse-btn">
		<a href="shop.php"><button class="btn btn-bg btn-transparent">Browse all Crop Cateories<i class="fa-solid fa-arrow-right right-side-icon"></i></button></a>
	</div>
</section>

<!-- Top Farms -->
<section class="top-farm-section">
<!-- shape divider -->
	<section>
		<div class="shape-divider-2">
			<svg data-name="Layer 1" viewBox="0 0 1200 120" preserveAspectRatio="none">
				<path d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill"></path>
			</svg>
		</div>
	</section>	

	<div class="top-heading">
		<h2>Top Farmers</h2>
		<div class="divider"></div>
		<p>Farmers of the month</p>
	</div>
	
	<div class="top-farms container-box">
	<?php
		
	?>
		<div class="top-farms-detail">
			<div class="farm-img">
				<img src="images/farms/farm-1.jpg" alt="#" />
			</div>
			<div class="farm-texts">
				<h3>Farm name - 14323424234</h3>
				<p>Fruits and Vegetables. fsdfsdfsdfsdfsdf</p>
			</div>
		</div>
		
		<div class="top-farms-detail">
			<div class="farm-img">
				<img src="images/farms/farm-2.jpg" alt="#" />
			</div>
			<div class="farm-texts">
				<h3>Farm name - 25353</h3>
				<p>Fruits and Vegetables. jvjvjh  hj jhbjh j jh jh bj hb jhbhjbhjbjh  </p>
			</div>
		</div>
		
		<div class="top-farms-detail">
			<div class="farm-img">
				<img src="images/farms/farm-3.jpg" alt="#" />
			</div>
			<div class="farm-texts">
				<h3>Farm name - 3</h3>
				<p>Fruits and Vegetables.</p>
			</div>
		</div>
	</div>
	
	<div class="browse-btn">
		<a href="farmers.php"><button class="btn btn-bg btn-fill">Browse all Farmers<i class="fa-solid fa-arrow-right right-side-icon"></i></button></a>
	</div>
	
</section>

<!-- counter section -->
<section class="counter">
	<div class="counter-items container-box">
	<?php
		$queryFarmer = "SELECT COUNT(fid) FROM farmer_id;";
		$queryCrops = "SELECT COUNT(crop_id) FROM crops";
		$queryDealer = "SELECT COUNT(did) FROM dealer_id";
		$queryOrders = "SELECT COUNT(order_id) FROM orders";
		
		$query_run_farmer = mysqli_query($connection, $queryFarmer);
		$query_run_crops = mysqli_query($connection, $queryCrops);
		$query_run_dealer = mysqli_query($connection, $queryDealer);
		$query_run_orders = mysqli_query($connection, $queryOrders);		
	
		$rowFarmer = mysqli_fetch_array($query_run_farmer);
		$rowCrops = mysqli_fetch_array($query_run_crops);
		$rowDealer = mysqli_fetch_array($query_run_dealer);
		$rowOrders = mysqli_fetch_array($query_run_orders);		
	?>
	
	
		<div class="counter-item-detail">
			<p class="count-number"><?php echo $rowFarmer[0]; ?></p>
			<p class="count-numnber-desc">Farmers registered</p>
		</div>

		<div class="counter-item-detail">
			<p class="count-number"><?php echo $rowCrops[0]; ?></p>
			<p class="count-numnber-desc">Crops Available</p>
		</div>	
		
		<div class="counter-item-detail">
			<p class="count-number"><?php echo $rowDealer[0]; ?></p>
			<p class="count-numnber-desc">Dealers registered<p>
		</div>
		
		<div class="counter-item-detail">
			<p class="count-number"><?php echo $rowOrders[0]; ?></p>
			<p class="count-numnber-desc">Successful Sellings<p>
		</div>
	</div>
</section>

<!-- footer -->
<?php include('footer.php'); ?>


</body>
</html>
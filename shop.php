<?php
	require 'dbconnect.php';
	session_start();
	
	// $farmerDetail="SELECT * FROM farmer_id where email='".$_SESSION["email"]."'";
	// $farmerDetailResult=mysqli_query($connection,$farmerDetail);
	// $farmerRow=mysqli_fetch_array($farmerDetailResult);
	
	// $dealerDetail="SELECT * FROM dealer_id where email='".$_SESSION["email"]."'";
	// $dealerDetailResult=mysqli_query($connection,$dealerDetail);
	// $dealerRow=mysqli_fetch_array($dealerDetailResult);
	
	// echo $farmerRow['fname'];
	// echo $dealerRow['dname'];
	
	if(isset($_POST["sendRequest"])){
		$cropId=$_POST['cropId'];
		$userID=$_SESSION['email'];
		$cropDetail="SELECT * FROM crops where crop_id='.$cropId.'";
		$cropDetailResult=mysqli_query($connection,$cropDetail);
		$cropRow=mysqli_fetch_array($cropDetailResult);		
	}
?>

<html>
<head>
	<title>Shop</title>
	
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/shop.css" rel="stylesheet" />
	<link href="css/shape-divider.css" rel="stylesheet" />
	
	<script src="https://kit.fontawesome.com/8755f6524d.js" crossorigin="anonymous"></script>
	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
	</style>
</head>
<body>
<?php echo $cropId; ?>
<!-- header -->
<?php include('header.php'); ?>

<!-- Top Large header -->
<section class="heading-large">
	<div class="top-heading-large">
		<h2>Crop Shop</h2>
		<div class="divider"></div>
		<p>Explore crops as your requirement and deal with farmer directly</p>
	</div>

<div class="shape-divider-4">
    <svg data-name="Layer 1" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
    </svg>
</div>		
</section>



<!-- Shop -->
<section class="shop-section">
	<div class="shop">
		<div class="filter">
			<div class="filter-menu">
				<h4 class="filter-heading">Major Crops Categories</h4>
				<div class="filter-menu-1">					
					<a href="#">Food Crops</a>
					<a href="#">Cash Crops</a>
					<a href="#">Plantation Crops</a>
					<a href="#">Horticulture Crops</a>
				</div>
			</div>

			<div class="filter-menu">
				<h4 class="filter-heading">Raw Crops</h4>				
				<div class="filter-menu-2">					
					<a href="#">Wheat</a>
					<a href="#">Rice</a>
					<a href="#">Jowar</a>
					<a href="#">Ragi and Bajra (millets)</a>
					<a href="#">Lemons</a>
					<a href="#">Chickpeas</a>
					<a href="#">Green peas</a>
					<a href="#">Potatoes</a>
					<a href="#">Pumpkins</a>
					<a href="#">Tomatoes</a>
					<a href="#">Onions</a>
					<a href="#">Brinjal</a>
					<a href="#">Mangoes</a>
					<a href="#">Sugarcane</a>
					<a href="#">Coconuts</a>
				</div>
			</div>
		</div>
		
		<!-- Crops Preview -->
		<div class="crops-preview">
		
		<?php
				$query = "SELECT * FROM crops ORDER BY crop_id desc";
				$query_run = mysqli_query($connection, $query);
				$check = mysqli_num_rows($query_run) > 0;
				
				if($check){
					while($row = mysqli_fetch_array($query_run)){
						?>
						<form name="shopForm" action="shop.php" method="POST">
						<!-- <a href="singleProduct.php?crop_id='.$cropId.'" style="text-decoration:none;color:red"> -->
							<div class="crops-items">
								<div class="crop-image">
									<img src="images/crops/<?php echo $row['crop_img']; ?>" alt="crop-image" name="cropImg" />
								</div>
								<p class="crop-ctg" name="cropCtg"><?php echo $row['crop_ctg']; ?></p>
								<div class="crops-details">
									<div class="crops-under-1">
										<p class="crop-name" name="cropName"><?php echo $row['crop_name']; ?></p>
										<p class="crop-gprice" name="cropGPrice">Govt. price: &#8377; 404</p>
										<p class="crop-fprice" name="cropFPrice">Farmer price: &#8377; <?php echo $row['price']; ?> <span class="tick-mark">&#10003;</span></p>
										<!-- <input type="text" class="crop-fprice" name="cropId" value="<?php echo $row['crop_id']; ?>" readonly style="display:none" /> -->
									</div>
									<div class="crops-under-2">
										<i class="fa-solid fa-heart"></i>
									</div>
								</div>
								<!--<button class="btn btn-sm btn-transparent purchase-request" name="sendRequest" >
									<i class="fa-solid fa-cart-shopping left-side-icon"></i>Request to Buy
								</button>-->
								
								<input type="submit" class="btn btn-sm btn-transparent purchase-request" name="sendRequest" value="Request to Buy" />
							</div> 
						<!-- </a> -->
						</form>	
						<?php
					}
				}
				else{
					echo "Not found..";
				}
			?>
			
		</div>
	</div>
</section>

<!-- footer -->
<?php include('footer.php'); ?>

</body>
</html>
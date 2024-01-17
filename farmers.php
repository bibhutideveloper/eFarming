<html>
<head>
	<title>Farmers</title>

	<meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/farmers.css" rel="stylesheet" />
	<link href="css/shape-divider.css" rel="stylesheet" />
	
	<script src="https://kit.fontawesome.com/8755f6524d.js" crossorigin="anonymous"></script>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
	</style>
</head>
<body>
<!-- header -->
<?php include('header.php'); ?>
<section class="heading-large">
	<div class="top-heading-large">
		<h2>Our Farmers</h2>
		<div class="divider"></div>
		<p>Honest and genuine farmers are here </p>
	</div>

<div class="shape-divider-4">
    <svg data-name="Layer 1" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
    </svg>
</div>	
	
</section>

<section class="farms-preview">
	<div class="farms-list container-box">
	<?php
		require 'dbconnect.php';
				$queryFarmer = "SELECT * FROM farmer_id ORDER BY fid desc";
				$queryCrops = "SELECT crop_name FROM crops";
				$query_run = mysqli_query($connection, $queryFarmer);
				$check = mysqli_num_rows($query_run) > 0;
				
				if($check){
					while($row = mysqli_fetch_array($query_run)){
						?>
							<div class="farm-list-content">
								<div class="farm-image">
									<img src="images/farms/farm-1.jpg" alt="" />
								</div>
								<div class="farm-content">
									<div class="farm-address">
										<p class="farmer-city"><?php echo $row['city']; ?></p>
										<p class="farmer-city">, <?php echo $row['state']; ?></p>
									</div>
									<p class="farmer-name"><?php echo $row['fname']; ?></p>				
									<p class="farmer-mno"><?php echo $row['mno']; ?></p>				
									<p class="farmer-email"><?php echo $row['email']; ?></p>
									<p class="avl-Crops"></p>
									<button class="btn btn-xs btn-transparent"><i class="fa-solid fa-eye left-side-icon"></i>View Crops</button>
								</div>
							</div>
						<?php
					}
				}
				else{
					echo "Not found..";
				}
	?>
	</div>
</section>

<!-- footer -->
<?php include('footer.php'); ?>

</body>
</html>
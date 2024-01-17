<?php 
	require 'dbconnect.php';
?>

<?php
	var_dump($_GET);
?>

<html>
<head>
	<title>Product</title>

	<meta content= "width=device-width, height=device-height, initial-scale=1" name="viewport">
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/singleProduct.css" rel="stylesheet" />
	<link href="css/shop.css" rel="stylesheet" />
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

<!-- Product Info -->
<section class="productInfo">
	<div class="productInfoContent container-box">
		<div class="productImage">
			<img src="images/crops/bhindi.png" alt="Product image">
			<div>
				<img src="images/crops/bhindi.png" alt="Product image">
				<img src="images/crops/bhindi.png" alt="Product image">
				<img src="images/crops/bhindi.png" alt="Product image">
			</div>
		</div>
		<div class="productDetails">
			<p class="breadcrums">Home/Shop/Horticulture Crops/Vegetables/Bhindi</p>
			<h4 class="productTitle">Fresh Bhindi from the genuine farm</h4>
			<div class="price">
				<p class="cropGPrice">Govt. price: &#8377; 404</p>
				<p class="cropFPrice">Farmer price: &#8377; 214<span class="tick-mark">&#10003;</span></p>
			</div>
			
			
			<p class="productDescription">In reference to fruits and vegetables, the characteristics that impart distinctive quality may be described by four different attributes—1) color and appearance, 2) flavor (taste and aroma), Address correspondence to: Dr. Diane M. Barrett, Dept.</p>
			
			<div class="cropQualityDesc">
				<p><i class="fa-solid fa-carrot left-side-icon"></i>Fresh Vegetables and Fruits</p>
				<p><i class="fa-brands fa-nutritionix left-side-icon"></i>Good Quality and Fresh</p>
				<p><i class="fa-solid fa-hand-holding-hand left-side-icon"></i>Good Services and Genuine</p>
			</div>
			
			<p>Currently providing services in <b>Pune (Maharashtra)</b> only.</p>
			
			<input type="submit" class="btn btn-sm btn-transparent purchase-request-single" name="sendRequest" value="Request to Buy" />
			
		</div>
	</div>
</section>

<!-- Related Products  -->
<section class="relatedProducts">
	<div class="relatedProductsContent container-box">
		<div class="top-heading">
			<h2>Related Crops</h2>
			<div class="divider"></div>
			<p>You may like these crops</p>
		</div>
		<div class="relatedProductsDisplay">
			<form name="shopForm" action="shop.php" method="POST">
				<div class="crops-items">
					<div class="crop-image">
						<img src="images/crops/apple.png" />
					</div>
					<p class="crop-ctg" name="cropCtg">Fruits</p>
					<div class="crops-details">
						<div class="crops-under-1">
							<p class="crop-name" name="cropName">Apple</p>
							<p class="crop-gprice" name="cropGPrice">Govt. price: &#8377; 404</p>
							<p class="crop-fprice" name="cropFPrice">Farmer price: &#8377; 124<span class="tick-mark">&#10003;</span></p>
							<!-- <input type="text" class="crop-fprice" name="cropId" value="<?php echo $row['crop_id']; ?>" readonly style="display:none"/> -->
						</div>
						<div class="crops-under-2">
							<i class="fa-solid fa-heart"></i>
						</div>
					</div>
					<input type="submit" class="btn btn-sm btn-transparent purchase-request" name="sendRequest" value="Request to Buy" />
				</div> 
			</form>
			
			<form name="shopForm" action="shop.php" method="POST">
				<div class="crops-items">
					<div class="crop-image">
						<img src="images/crops/cagua.png" />
					</div>
					<p class="crop-ctg" name="cropCtg">Vegetable</p>
					<div class="crops-details">
						<div class="crops-under-1">
							<p class="crop-name" name="cropName">Cagua</p>
							<p class="crop-gprice" name="cropGPrice">Govt. price: &#8377; 404</p>
							<p class="crop-fprice" name="cropFPrice">Farmer price: &#8377; 124<span class="tick-mark">&#10003;</span></p>
							<!-- <input type="text" class="crop-fprice" name="cropId" value="<?php echo $row['crop_id']; ?>" readonly style="display:none"/> -->
						</div>
						<div class="crops-under-2">
							<i class="fa-solid fa-heart"></i>
						</div>
					</div>
					<input type="submit" class="btn btn-sm btn-transparent purchase-request" name="sendRequest" value="Request to Buy" />
				</div> 
			</form>
			
			<form name="shopForm" action="shop.php" method="POST">
				<div class="crops-items">
					<div class="crop-image">
						<img src="images/crops/petai.png" />
					</div>
					<p class="crop-ctg" name="cropCtg">Vegetable</p>
					<div class="crops-details">
						<div class="crops-under-1">
							<p class="crop-name" name="cropName">Petai</p>
							<p class="crop-gprice" name="cropGPrice">Govt. price: &#8377; 404</p>
							<p class="crop-fprice" name="cropFPrice">Farmer price: &#8377; 124<span class="tick-mark">&#10003;</span></p>
							<!-- <input type="text" class="crop-fprice" name="cropId" value="<?php echo $row['crop_id']; ?>" readonly style="display:none"/> -->
						</div>
						<div class="crops-under-2">
							<i class="fa-solid fa-heart"></i>
						</div>
					</div>
					<input type="submit" class="btn btn-sm btn-transparent purchase-request" name="sendRequest" value="Request to Buy" />
				</div> 
			</form>
			
			<form name="shopForm" action="shop.php" method="POST">
				<div class="crops-items">
					<div class="crop-image">
						<img src="images/crops/grapes.png" />
					</div>
					<p class="crop-ctg" name="cropCtg">Fruits</p>
					<div class="crops-details">
						<div class="crops-under-1">
							<p class="crop-name" name="cropName">grapes</p>
							<p class="crop-gprice" name="cropGPrice">Govt. price: &#8377; 404</p>
							<p class="crop-fprice" name="cropFPrice">Farmer price: &#8377; 124<span class="tick-mark">&#10003;</span></p>
							<!-- <input type="text" class="crop-fprice" name="cropId" value="<?php echo $row['crop_id']; ?>" readonly style="display:none"/> -->
						</div>
						<div class="crops-under-2">
							<i class="fa-solid fa-heart"></i>
						</div>
					</div>
					<input type="submit" class="btn btn-sm btn-transparent purchase-request" name="sendRequest" value="Request to Buy" />
				</div> 
			</form>
			
			
		</div>
	</div>
</section>

<!-- Product Menus -->
<section class="productMenus">
	<div class="productMenusContent container-box">
		<div>
			<label>Major Crops</label>
			<div class="divider2"></div>
			<a href="#">Food Crops</a>
			<a href="#">Cash Crops</a>
			<a href="#">Plantation Crops</a>
			<a href="#">Horticulture Crops</a>
		</div>		
		<div>
			<label>Mostly used crops</label>
			<div class="divider2"></div>
			<a href="#">Wheat</a>
			<a href="#">Rice</a>
			<a href="#">Jowar</a>
			<a href="#">Green peas</a>
			<a href="#">Potatoes</a>
			<a href="#">Tomatoes</a>
			<a href="#">Onions</a>
			<a href="#">Mangoes</a>
		</div>
		<div>
			<label>Useful Links</label>
			<div class="divider2"></div>
			<a href="#">Contact Us</a>
			<a href="#">About Us</a>
			<a href="#">Privacy Policy</a>
			<a href="#">T & C</a>
		</div>
		<div>
			<label>Keep in Touch</label>
			<div class="divider2"></div>
			<span><a href="#"><i class="fa-brands fa-facebook-f left-side-icon"></i>Facebook</a></span>
			<span><a href="#"><i class="fa-brands fa-twitter left-side-icon"></i>Twitter</a></span>
			<span><a href="#"><i class="fa-brands fa-instagram left-side-icon"></i>Instagram</a></span>
			<span><a href="#"><i class="fa-brands fa-youtube left-side-icon"></i>YouTube</a></span>
		</div>
	</div>
</section>



<!-- footer -->
<?php include('footer.php'); ?>


</body>
</html>
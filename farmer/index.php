<html>
<head>
	<title>Farmer Dashboard</title>

	<meta content= "width=device-width, height=device-height, initial-scale=1" name="viewport">
	<link href="../css/style.css" rel="stylesheet" />
	<link href="../css/dashboard.css" rel="stylesheet" />
	<link href="../css/shape-divider.css" rel="stylesheet" />
	<link href="../css/header.css" rel="stylesheet" />
	<link href="../popup/add-crops-popup.css" rel="stylesheet" />
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	
	<script src="https://kit.fontawesome.com/8755f6524d.js" crossorigin="anonymous"></script>
	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
	</style>
	
	<script>
		function openContent(evt, mainContent) {
		  var i, dashboardItems, tablinks;
		  dashboardItems = document.getElementsByClassName("dashboardItems");
		  for (i = 0; i < dashboardItems.length; i++) {
			dashboardItems[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(mainContent).style.display = "block";
		  evt.currentTarget.className += " active";
		}
		
		
		function addCropsPopup(){
			document.getElementById("addCrops").style.display="block";
			document.getElementById("cropTable").style.display="none";
			document.getElementById("btn1").style.display="none";
			document.getElementById("btn2").style.display="block";
			document.getElementById("cropText1").innerHTML="Add Crops";
		}
		
		function closePopup(){
			document.getElementById("addCrops").style.display="none";
			document.getElementById("cropTable").style.display="block";
			document.getElementById("btn1").style.display="block";
			document.getElementById("btn2").style.display="none";
			document.getElementById("cropText1").innerHTML="Crops";
		}
</script>
	
</head>
<body>
<!-- header -->
<?php include('../header.php'); ?>

<section>
	<div class="dashboard container-box">
		<div class="dashboard-menu">			
			<div class="dashboard-menu-link">
				<a class="tablinks active" onclick="openContent(event, 'dashboard')">
					<i class="fa-solid fa-grip left-side-icon"></i>Dashboard
				</a>
				
				<a class="tablinks" onclick="openContent(event, 'crops')">
					<i class="fa-solid fa-seedling left-side-icon"></i>Crops
				</a>
				
				<a href="#" class="tablinks" onclick="openContent(event, 'purchaseRequest')">
					<i class="fa-solid fa-hand-holding-dollar left-side-icon"></i>Purchase Request
				</a>
				
				<a href="#" class="tablinks" onclick="openContent(event, 'orders')">
					<i class="fa-solid fa-cart-arrow-down left-side-icon"></i>Orders / History
				</a>
			</div>
			
			
			<div class="dashboard-menu-link sign-out">
				<a><i class="fa-solid fa-right-from-bracket left-side-icon"></i>Sign Out</a>
			</div>
		</div>
		
		<!-- Dashboard items -->
		<div class="dashboardItems " id="dashboard" style="display:block">
			<div class="dashboard-heading">
				<h2>Dashboard</h2>
				<div class="divider"></div>
			</div>
			
			<div class="dashboard-item-details">
				<div class="info">
					<span class="name">Bibhuti Kumbhakar</span>
					<p>bibhutikumbhakar@gmail.com</p>
					<p>9879787971</p>
					<p>Pune</p>
					
					<a class="edit">Edit Profile</a>
				</div>
				<div class="photo">
					<img src="../images/farms/farm-1.jpg" alt />
					<p>Change Profile Photo</p>
				</div>
			</div>
			
			<br>
			
			<div class="dashboard-heading">
				<h4>Recent Orders</h4>
			</div>

			<div class="dashboard-recent-orders">
				<div class="recent-orders">
					<img src="../images/crops/apple.png" />
					<p>Rice</p>
					<p>&#8377; 129</p>
				</div>
				
				<div class="recent-orders">
					<img src="../images/crops/grapes.png" />
					<p>Rice</p>
					<p>&#8377; 129</p>
				</div>
				
				<div class="recent-orders">
					<img src="../images/crops/taro.png" />
					<p>Rice</p>
					<p>&#8377; 129</p>
				</div>
			</div>
		</div>
		
		<!-- Crops items -->		
		<div class="dashboardItems" id="crops">
			
			<div class="dashboard-heading">
				<div class="headBtn">
					<h2 id="cropText1">Crops</h2>
					<div class="switchButton">
						<button class="btn btn-xs btn-fill" id="btn1" onclick="addCropsPopup()"><i class="fa-solid fa-plus left-side-icon"></i>Add Crops</button>
						<button class="btn btn-xs btn-fill" id="btn2" onclick="closePopup()"><i class="fa-solid fa-xmark left-side-icon"></i>Close</button>
					</div>
				</div>
				<div class="divider"></div>
			</div>
			
			<!-- add crops popup -->
			<div class="add-crp-popup" id="addCrops">
				<!--<div class="crossIcon">
					<h3>Add Crops</h3>
					<button onclick="closePopup()">Close</button>
				</div>
				<div class="divider-full"></div>-->
				<form>				
					<div class="form-field">
						<label>Crop Name<sup>*<sup></label>
						<input type="text" required>
					</div>
					
					<div class="form-field">
						<label>Category<sup>*<sup></label>
						<select>
							<option>Apple</option>
							<option>Mango</option>
							<option>Grapes</option>
							<option>Garlic</option>
							<option>Grapes</option>
						</select>
					</div>
					
					<div class="form-field">
						<label>Price<sup>*<sup></label>
						<input type="number" required>
					</div>
					
					<div class="form-field">
						<label>Quantity<sup>*<sup></label>
						<input type="number" required>
					</div>
					
					<div class="form-field">
						<label>Crop Image<sup>*<sup></label>
						<input type="file" required>
					</div>
					
					<div class="form-field">
						<button class="btn btn-sm btn-fill"><i class="fa-solid fa-paper-plane left-side-icon"></i>Add Crop</button>						
					</div>
				</form>
			</div>			
			<!-- Add crop popup end -->
			
			<div id="cropTable">
				<table border="0" cellspacing="0" cellpadding="45px">
					<thead>
						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Category</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Date</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="../images/crops/apple.png"></td>
							<td>Apple</td>
							<td>Fruit</td>
							<td>54</td>
							<td>534kg</td>
							<td>22/10/2200</td>
							<td><i class="fa-solid fa-pencil"></i></td>
							<td><i class="fa-solid fa-xmark"></i></td>
						</tr>
						
						<tr>
							<td><img src="../images/crops/apple.png"></td>
							<td>Apple</td>
							<td>Fruit</td>
							<td>54</td>
							<td>534kg</td>
							<td>22/10/2200</td>
							<td><i class="fa-solid fa-pencil"></i></td>
							<td><i class="fa-solid fa-xmark"></i></td>
						</tr>
						
						<tr>
							<td><img src="../images/crops/apple.png"></td>
							<td>Apple</td>
							<td>Fruit</td>
							<td>54</td>
							<td>534kg</td>
							<td>22/10/2200</td>
							<td><i class="fa-solid fa-pencil"></i></td>
							<td><i class="fa-solid fa-xmark"></i></td>
						</tr>
						
						<tr>
							<td><img src="../images/crops/apple.png"></td>
							<td>Apple</td>
							<td>Fruit</td>
							<td>54</td>
							<td>534kg</td>
							<td>22/10/2200</td>
							<td><i class="fa-solid fa-pencil"></i></td>
							<td><i class="fa-solid fa-xmark"></i></td>
						</tr>
						
						<tr>
							<td><img src="../images/crops/apple.png"></td>
							<td>Apple</td>
							<td>Fruit</td>
							<td>54</td>
							<td>534kg</td>
							<td>22/10/2200</td>
							<td><i class="fa-solid fa-pencil"></i></td>
							<td><i class="fa-solid fa-xmark"></i></td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Purchase Request items -->
		<div class="dashboardItems" id="purchaseRequest">
			<div class="dashboard-heading">
				<div class="headBtn">
					<h2>Purchase Requests</h2>
				</div>
				<div class="divider"></div>
			</div>
			<div class="cropRequestOuter">
				<div class="cropRequest">
					<div class="cropImage">
						<img src="../images/crops/potato.png" alt="crop-image" />
					</div>
					<div class="requestDetail">						
						<table border="0" cellspacing="0">
							<tr><th>Requester Name</th><th>:</th><td>Bibhuti Kumbhakar</td></tr>
							<tr><th>Crop</th><th>:</th><td>Potato</td></tr>
							<tr><th>Crop Cateory</th><th>:</th><td>Fruit</td></tr>
							<tr><th>Quantity</th><th>:</th><td>50KG</td></tr>
							<tr><th>Price</th><th>:</th><td>&#8377; 200</td></tr>
							<tr><th>Subtotal</th><th>:</th><td>&#8377; 10000</td></tr>
						</table>						
					</div>
					<div class="requestStatus">
						<button class="btn btn-status success">Accept</button>
						<button class="btn btn-status decline">Decline</button>
					</div>
				</div>
				
				<div class="cropRequest">
					<div class="cropImage">
						<img src="../images/crops/grapes.png" alt="crop-image" />
					</div>
					<div class="requestDetail">						
						<table border="0" cellspacing="0">
							<tr><th>Requester Name</th><th>:</th><td>Rohit Rai</td></tr>
							<tr><th>Crop</th><th>:</th><td>Grapes</td></tr>
							<tr><th>Crop Cateory</th><th>:</th><td>Fruit</td></tr>
							<tr><th>Quantity</th><th>:</th><td>30KG</td></tr>
							<tr><th>Price</th><th>:</th><td>&#8377; 210</td></tr>
							<tr><th>Subtotal</th><th>:</th><td>&#8377; 10000</td></tr>
						</table>						
					</div>
					<div class="requestStatus">
						<button class="btn btn-status success">Accept</button>
						<button class="btn btn-status decline">Decline</button>
					</div>
				</div>
				
				<div class="cropRequest">
					<div class="cropImage">
						<img src="../images/crops/grapes.png" alt="crop-image" />
					</div>
					<div class="requestDetail">						
						<table border="0" cellspacing="0">
							<tr><th>Requester Name</th><th>:</th><td>Rohit Rai</td></tr>
							<tr><th>Crop</th><th>:</th><td>Grapes</td></tr>
							<tr><th>Crop Cateory</th><th>:</th><td>Fruit</td></tr>
							<tr><th>Quantity</th><th>:</th><td>30KG</td></tr>
							<tr><th>Price</th><th>:</th><td>&#8377; 210</td></tr>
							<tr><th>Subtotal</th><th>:</th><td>&#8377; 10000</td></tr>
						</table>						
					</div>
					<div class="requestStatus">
						<button class="btn btn-status success">Accept</button>
						<button class="btn btn-status decline">Decline</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Order/History items -->
		<div class="dashboardItems" id="orders">
			<div class="dashboard-heading">
				<div class="headBtn">
					<h2>Order/History</h2>
				</div>
				<div class="divider"></div>
			</div>
			<table border="0" cellspacing="0" cellpadding="45px">
					<thead>
						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Category</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Date</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="../images/crops/apple.png"></td>
							<td>Apple</td>
							<td>Fruit</td>
							<td>54</td>
							<td>534kg</td>
							<td>22/10/2200</td>
							<td class="orderCompleted">Success</td>
						</tr>
						
						<tr>
							<td><img src="../images/crops/apple.png"></td>
							<td>Apple</td>
							<td>Fruit</td>
							<td>54</td>
							<td>534kg</td>
							<td>22/10/2200</td>
							<td class="orderCompleted">Success</td>
						</tr>					
					</tbody>
				</table>
		</div>
		
		<!-- Reports items -->
		<div class="dashboardItems" id="reports">
			<div class="dashboard-heading">
				<div class="headBtn">
					<h2>Crops Reports</h2>
				</div>
				<div class="divider"></div>
			</div>
		</div>
		
	</div>
</section>

</body>
</html>
<html>
<head>
	<link href="../css/style.css" rel="stylesheet" />
	<link href="add-crops-popup.css" rel="stylesheet" />
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/8755f6524d.js" crossorigin="anonymous"></script>
	
	<script src="../js/login-popup.js"></script>
	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
	</style>
	
	<script>
		function closePopup(){
			document.getElementById("addCropsPopup").style.display="none";
		}
		
	</script>
	
</head>
<body>
	<div class="outer" id="addCropsPopup">
	
		<div class="add-crp-popup">
			<div class="crossIcon">
				<h3>Add Crops</h3>
				<button onclick="closePopup()"><i class="fa-solid fa-xmark" ></i>rer</button>
			</div>
			<div class="divider-full"></div>
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
	</div>
</body>
</html>
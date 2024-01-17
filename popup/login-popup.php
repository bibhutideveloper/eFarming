<?php
	require '../dbconnect.php';
?>

<html>
<head>
	<link href="../css/style.css" rel="stylesheet" />
	<link href="../css/shape-divider.css" rel="stylesheet" />
	<link href="login-popup.css" rel="stylesheet" />
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/8755f6524d.js" crossorigin="anonymous"></script>
	
	<script src="../js/login-popup.js"></script>
	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
	</style>
	
</head>
<body>
	<div class="login-popup" id="login-popup">
		<!-- <div class="login-image">
		
		</div> -->
	
		<div class="login-signup">
			<div class="switch-btn">
				<button class="login-switch" onclick="showLogin()">Login</button>
				<button class="signup-switch" onclick="showSignup()">Sign Up</button>
			</div>	
				
			<!-- login -->
			<form name="loginForm" action="login-popup.php" method="POST">
				<div id="login-div">
				<div class="login-content" id="login-content">
					<div class="login-inputs">
						<div class="loginType">
							<div class="userType">
								<label for="farmer">Farmer</label>
								<input type="radio" name="userType" id="farmer" checked="cheked" value="farmer" />
							</div>
						
							<div class="userType">
								<label for="dealer">Dealer</label>
								<input type="radio" name="userType" id="dealer" value="dealer" />
							</div>
						</div>
					</div>
				
					<div class="login-inputs">
						<!-- <label>Email</label> -->
						<input type="email" name="email" placeholder="Enter E-mail">
					</div>
					
					<div class="login-inputs">
						<!-- <label>Password</label> -->
						<input type="text" name="password" placeholder="Enter Password">
					</div>
					
					<input type="submit" value="Login" name="login" class="btn btn-sm btn-fill" />
				</div>
				</div>
			</form>
			
			<!-- signup -->
			<div id="signup-div">
			<div class="signup-content" id="signup-content">
				<div class="signup-inputs">
					<!-- <label>SignUp as</label> -->
					<select>
						<option value="farmer">Farmer</option>
						<option value="dealer">Dealer</option>
					</select>
				</div>
			
				<div class="signup-inputs">
					<!-- <label>Name</label> -->
					<input type="text" placeholder="Enter Name">
				</div>
				
				<div class="signup-inputs">
					<!-- <label>Mobile Number</label> -->
					<input type="number" placeholder="Enter Mobile Number">
				</div>
				
				<div class="signup-inputs">
					<!-- <label>E-mail</label> -->
					<input type="email" placeholder="Enter E-mail">
				</div>
				
				<div class="signup-inputs">
					<!-- <label>State</label> -->
					<select>
						<option>Select State</option>
						<option>Jharkhand</option>
						<option>Maharashtra</option>
						<option>Uttar Pradesh</option>
						<option>Bihar</option>
						<option>Tamilnadu</option>
					</select>
				</div>
				
				<div class="signup-inputs">
					<!-- <label>City</label> -->
					<select>
						<option>Select City</option>
						<option>Seraikella</option>
						<option>Kanpur</option>
						<option>Unnao</option>
						<option>Jamshedpur</option>
						<option>Lucknow</option>
					</select>
				</div>
				
				<div class="signup-inputs">
					<!-- <label>Address</label> -->
					<textarea rows="5" placeholder="Enter Address"></textarea>
				</div>
				
				<input type="submit" value="Register" class="btn btn-sm btn-fill">
			</div>
			</div>

			<?php
			error_reporting(0);
			ini_set('display_errors', 0);

			if(isset($_POST["login"])){
				$email=$_POST["email"];
				$pass=$_POST["password"];
				$userType=$_POST["userType"];
				
				if($userType=='farmer'){
					$sql="SELECT * FROM farmer_id where '$email'=email && '$pass'=password";
					$result=mysqli_query($connection,$sql);
					$row=mysqli_fetch_array($result);
					if($row['email']==$email && $row['password']==$pass){
						$_SESSION['email'] = $email;
						echo '<script> alert("Successfull")</script>';
						header ('location:../farmerLogin.php');
					}
					else{
						// echo '<script> alert("Invalid Credentials..!")</script>';
						echo '<p class="alertMsg">invalid credentials..!!</p>';
					}
				}
				
				else if($userType=='dealer'){
					$sql="SELECT * FROM dealer_id where '$email'=email && '$pass'=password";
					$result=mysqli_query($connection,$sql);
					$row=mysqli_fetch_array($result);
					if($row['email']==$email && $row['password']==$pass){
						$_SESSION['email'] = $email;
						echo '<script> alert("Successfull")</script>';
						header ('location:../dealerLogin.php');
					}
					else{
						// echo '<script> alert("Invalid Credentials..!")</script>';
						echo '<p class="alertMsg">invalid credentials..!!</p>';
					}
				}
			}
			?>

		</div>
	</div>
</body>
</html>
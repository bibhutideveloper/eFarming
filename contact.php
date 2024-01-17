<html>
<head>
	<title>Contact Us</title>
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/contact.css" rel="stylesheet" />
	<link href="css/shape-divider.css" rel="stylesheet" />
	
	<script src="https://kit.fontawesome.com/8755f6524d.js" crossorigin="anonymous"></script>
	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
	</style>
</head>
<body>
<!-- header -->
<?php include('header.php'); ?>

<!-- Top Large header -->
<section class="heading-large">
	<div class="top-heading-large">
		<h2>Conatct Us</h2>
		<div class="divider"></div>
		<p>For Help qnd Queries, also for complain and feedback</p>
	</div>

<div class="shape-divider-4">
    <svg data-name="Layer 1" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
    </svg>
</div>	
	
</section>

<!-- Contact -->
<section class="contact-section">
	<div class="contact container-box">
		<div class="contact-form">
			<form name="contactForm" action="contact.php" method="POST">
				<div class="form-field">
					<label>Name<sup>*</sup></label>
					<input type="text" required>
				</div>
				
				<div class="form-field">
					<label>Email<sup>*</sup></label>
					<input type="email" required>
				</div>
				
				<div class="form-field">
					<label>Message<sup>*<sup></label>
					<textarea rows="4" cols="50" required></textarea>
				</div>
				<div class="form-field">
					<button class="btn btn-sm btn-fill"><i class="fa-solid fa-paper-plane left-side-icon"></i>Send</button>
				</div>
			</form>
		</div>
	
		<div class="contact-details">
			<div class="contact-content">
				<i class="fa-solid fa-building"></i>
				<p>eFarming</p>
			</div>
			<div class="contact-content">
				<i class="fa-solid fa-phone"></i>
				<p>8651996406</p>
			</div>
			<div class="contact-content">
				<i class="fa-solid fa-at"></i>
				<p>bibhuti.eFarming@mail.com</p>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<?php include('footer.php'); ?>
</body>
</html>
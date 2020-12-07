<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JC's Foodstop and Catering Services</title>
	<link rel="stylesheet" type="text/css" href="main.css">

	<link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="icon">
    <link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="logo">
</head>
<body>
	<form class="login-form" action="enter_email.php" method="post">
		<h2 class="form-title">Reset password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>Your email address</label>
			<input type="email" name="email">
		</div>
		<div class="form-group">
			<button type="submit" name="reset-password" class="login-btn">Submit</button>
		</div>
		<a href="login.php">Cancel</a>
	</form>
		
</body>
</html>
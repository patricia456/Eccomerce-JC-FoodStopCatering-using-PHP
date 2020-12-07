<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>JC's Foodstop and Catering Services</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="icon">
    <link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="logo">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username"  value="<?php echo $username; ?>"  >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p><br>
		<p><a href="enter_email.php">Forgot your password?</a></p>
		<a href="/FoodStopCateringNew/index.html">Cancel</a> </center>
	</form
</body>
</html>
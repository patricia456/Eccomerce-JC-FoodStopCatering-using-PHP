<?php 
	include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>JC's Foodstop and Catering Services</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="icon">
    <link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="logo">

</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="/FoodStopCateringNew/assets/images/user.gif "  style="width:80px; height: 80px"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="/FoodStopCateringNew/Home/home.php?logout='1'" style="color: red;">Reserve</a><br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
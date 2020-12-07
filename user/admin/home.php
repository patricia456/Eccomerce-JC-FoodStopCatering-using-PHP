




<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>JC's Foodstop and Catering Services</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="icon">
    <link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="logo">

	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
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
			<img src="/FoodStopCateringNew/assets/images/man.gif" style="width:80px; height: 80px" >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<medium>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br><a href="create_user.php"> <img src="/FoodStopCateringNew/assets/images/createuser.gif" style="width:12px; height: 12px" >add user</a> &nbsp;
						<br><img src="/FoodStopCateringNew/assets/images/todo.gif "  style="width:12px; height: 12px"  > 
						<a href="adminResList.php">manage reservation </a><br>
						
                       &nbsp; 

					</medium>

				<?php endif ?>
			</div>
		</div>
		<a href="home.php?logout='1'" style="color: red;">logout</a>
	</div>
</body>
</html>
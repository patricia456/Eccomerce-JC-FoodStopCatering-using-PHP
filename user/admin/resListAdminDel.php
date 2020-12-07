<!DOCTYPE html>
<html>
<head>
	<title>JC's Foodstop and Catering Services</title>
	<link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="icon">
    <link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="logo">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>








<?php

include ("connections.php");


$reservationID = $_REQUEST['reservationID'];


$get_record = mysqli_query ($connections, "select * from reservation where reservationID = '$reservationID' ");



$check_get_record = mysqli_num_rows($get_record);

if($check_get_record > 0){

	$row = mysqli_fetch_assoc($get_record);
	$db_eventName = $row["eventName"];
	$db_typeReservation = $row["typeReservation"];
	$db_eventLocation = $row["eventLocation"];
	$db_deliverMethod = $row["deliverMethod"];
	$db_motif = $row["motif"];
	$db_dateEvent = $row["dateEvent"];
	$db_numGuest = $row["numGuest"];
	$db_typePackage = $row["typePackage"];
	$db_otherMenus = $row["otherMenus"];
	$db_payAmount = $row["payAmount"];
	$db_fullName = $row["fullName"];
	$db_contactNum = $row["contactNum"];
	$db_email = $row["email"];
	$db_message = $row["message"];


	$eventName = ucfirst($db_eventName);

?>


	<form method="POST" action="Delete_Now.php">
		<h1>You are about to delete<font color="red"> <?php echo $eventName?></font> </h1>
		<br>

		<h3>Are you sure?</h3>
		<br>
		<center>
		<input type="hidden" name="reservationID" value="<?php echo $reservationID ?>"><br><br>
		<input type="submit" name="Yes" value="Yes"> &nbsp; <a href="adminResList.php" class="del_btn">No</a>

	</center>

	</form>







<?php


}else{

	echo "<h1>No Record Found</h1>";
}


?>

</body>
</html>

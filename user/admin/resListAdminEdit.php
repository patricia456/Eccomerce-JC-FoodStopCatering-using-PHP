




<?php

include ("connections.php");


$reservationID = $_GET["reservationID"];

$get_record = mysqli_query($connections,"select * from reservation WHERE reservationID = '$reservationID'");


$get_record_num = mysqli_num_rows($get_record);



if ($get_record_num > 0) {

	while ($row = mysqli_fetch_assoc($get_record)) {
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
	}

	$new_eventName = $new_typeReservation = $new_eventLocation = $new_deliverMethod =$new_motif = $new_dateEvent = $new_numGuest = $new_typePackage = $new_otherMenus = $new_payAmount =$new_fullName = $new_contactNum = $new_email = $new_message = "";
		$new_eventNameErr = $new_typeReservationErr = $new_eventLocationErr = $new_deliverMethodErr =$new_motifErr = $new_dateEventErr = $new_numGuestErr = $new_typePackageErr = $new_otherMenusErr = $new_payAmountErr =$new_fullNameErr = $new_contactNumErr = $new_emailErr = $new_messageErr=  "";




	if(isset($_POST["btnUpdate"])){


		if(empty($_POST["new_eventName"])){
			$new_eventNameErr = "This field must not be empty!";
		}else{
			$new_eventName = $_POST["new_eventName"];
			$db_eventName = $new_eventName;

		}


		if(empty($_POST["new_eventLocation"])){
			$new_eventLocationErr = "This field must not be empty!";
		}else{
			$new_eventLocation = $_POST["new_eventLocation"];
			$db_eventLocation = $new_eventLocation;

		}




		if(empty($_POST["new_motif"])){
			$new_motifErr = "This field must not be empty!";
		}else{
			$new_motif = $_POST["new_motif"];
			$db_motif = $new_motif;

		}


		if(empty($_POST["new_otherMenus"])){
			$new_otherMenusErr = "This field must not be empty!";
		}else{
			$new_otherMenus = $_POST["new_otherMenus"];
			$db_otherMenus = $new_otherMenus;

		}


		if(empty($_POST["new_numGuest"])){
			$new_numGuestErr = "This field must not be empty!";
		}else{
			$new_numGuest = $_POST["new_numGuest"];
			$db_numGuest = $new_numGuest;

		}







		if(empty($_POST["new_payAmount"])){
			$new_payAmountErr = "This field must not be empty!";
		}else{
			$new_payAmount = $_POST["new_payAmount"];
			$db_payAmount = $new_payAmount;

		}



		if(empty($_POST["new_fullName"])){
			$new_fullNameErr = "This field must not be empty!";
		}else{
			$new_fullName = $_POST["new_fullName"];
			$db_fullName = $new_fullName;

		}



		if(empty($_POST["new_contactNum"])){
			$new_contactNumErr = "This field must not be empty!";
		}else{
			$new_contactNum = $_POST["new_contactNum"];
			$db_contactNum = $new_contactNum;

		}



		if(empty($_POST["new_email"])){
			$new_emailErr = "This field must not be empty!";
		}else{
			$new_email = $_POST["new_email"];
			$db_email = $new_email;

		}




		if(empty($_POST["new_message"])){
			$new_messageErr = "This field must not be empty!";
		}else{
			$new_message = $_POST["new_message"];
			$db_message = $new_message;

		}



		if(empty($_POST["new_typeReservation"])){
			$new_typeReservationErr = "Choose type of Reservation!";
		}else{
			$new_typeReservation = $_POST["new_typeReservation"];
			$new_typeReservation= $new_typeReservation;

		}


		if(empty($_POST["new_deliverMethod"])){
			$new_deliverMethodErr = "Choose Delivery Method!";
		}else{
			$new_deliverMethod = $_POST["new_deliverMethod"];
			$new_deliverMethod= $new_deliverMethod;

		}


		if(empty($_POST["new_typePackage"])){
			$new_typePackageErr = "Choose Type of Package";
		}else{
			$new_typePackage = $_POST["new_typePackage"];
			$new_typePackage= $new_typePackage;

		}







		$new_dateEvent = $_POST["new_dateEvent"];
		$new_typeReservation = $_POST["new_typeReservation"];
		$new_deliverMethod = $_POST["new_deliverMethod"];
		$new_typePackage = $_POST["new_typePackage"];


		if($new_eventName && $new_typeReservation && $new_eventLocation && $new_deliverMethod && $new_motif && $new_dateEvent && $new_numGuest && $new_typePackage && $new_otherMenus && $new_payAmount && $new_fullName && $new_contactNum && $new_email && $new_message){

					mysqli_query($connections, " UPDATE reservation SET eventName = '$new_eventName', typeReservation = '$new_typeReservation', eventLocation = '$new_eventLocation', deliverMethod = ' $new_deliverMethod', motif = '$new_motif', dateEvent ='$new_dateEvent', numGuest = '$new_numGuest', typePackage = '$new_typePackage', otherMenus = '$new_otherMenus', payAmount = '$new_payAmount', fullName = '$new_fullName', contactNum = '$new_contactNum', email = '$new_email', message = '$new_message' where reservationID = '$reservationID'");	
					echo "<script>alert('Edit Succesful! ');</script>";




			header ("Location: adminResList.php");




		}
	















	}



?>
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


<style>
	.error{
		color:red;
	}
	label{
		color: #50394c;
	}

</style>

<form method="POST" id="myInput">
	<h2>Update Catering Form</h2>
	<label>Name of the Event</label>
   <input type="Text" name="new_eventName" placeholder="Event Name" value="<?php echo $db_eventName ?>"> <span class="error"><?php echo $new_eventNameErr ?></span><br><br>

   <label>Type of Reservation</label>
   <select name="new_typeReservation">
      <option name ="new_typeReservation" value="">Select Type of Reservation</option>
      <?php
      if($new_typeReservation == Yes){
      	echo "<option value=\".$new_typeReservation.\"SELECTED".$new_typeReservation."</option>";
      }
      ?>

      <option name ="new_typeReservation"  <?php if($new_typeReservation == "Catering"){ echo "selected";} ?> value="Catering">Catering</option>
      <option name ="new_typeReservation"  <?php if($new_typeReservation == "Function Room"){ echo "selected";} ?> value="Function Room">Function Room</option>
      <option name ="new_typeReservation"  <?php if($new_typeReservation == "Both Catering and Function Room"){ echo "selected";} ?> value="Both Catering and Function Room">Both Catering and Function Room</option>
   </select><span class="error"><?php echo $new_typeReservationErr ?></span><br><br>

   <label>Location of the Event</label>
   <input type="text" name="new_eventLocation" placeholder="Location of the Event" value="<?php echo $db_eventLocation?>"><span class="error"><?php echo $new_eventLocationErr ?></span><br><br><br>

   <label>Delivery Method</label>
   <select name="new_deliverMethod">
      <option name="" value="">Select Delivery Method</option>
      <option name="new_deliverMethod" <?php if($new_deliverMethod == "None"){ echo "selected";} ?> value="None">None</option>
      <option name="new_deliverMethod" <?php if($new_deliverMethod == "For Pick up"){ echo "selected";} ?> value="For Pick up">For Pick up</option>
      <option name="new_deliverMethod" <?php if($new_deliverMethod == "For Delivery"){ echo "selected";} ?> value="For Delivery">For Delivery</option>
   </select><span class="error"><?php echo $new_deliverMethodErr ?></span><br><br>

   <label>Motif</label>
   <input type="text" name="new_motif" placeholder="Motif" value="<?php echo $db_motif ?>"><span class="error"><?php echo $new_motifErr ?></span><br><br>


   <label>Date of the Event</label><br>
   <input type="date" name="new_dateEvent" placeholder="" value="<?php echo $db_dateEvent?>"><span class="error"><?php echo $new_dateEventErr ?></span><br><br>

   <label>Number of Guest</label>
   <input type="text" name="new_numGuest" placeholder="Number of Guest" value="<?php echo $db_numGuest ?>"><span class="error"><?php echo $new_numGuestErr ?></span><br><br>

   <label>Type of Package</label>
   <select name="new_typePackage">
      <option name="new_typePackage" value="">Select Type of Package</option>
      <option name="new_typePackage" <?php if($new_typePackage == "None"){ echo "selected";} ?>  value="None">None</option>
      <option name="new_typePackage" <?php if($new_typePackage == "Package A"){ echo "selected";} ?>  value="Package A">Package A</option>
      <option name="new_typePackage" <?php if($new_typePackage == "Package B"){ echo "selected";} ?>  value="Package B">Package B</option>
      <option name="new_typePackage" <?php if($new_typePackage == "Package C"){ echo "selected";} ?>  value="Package C">Package C</option>
      <option name="new_typePackage" <?php if($new_typePackage == "Package D"){ echo "selected";} ?>  value="Package D">Package D</option>
      
   </select><span class="error"><?php echo $new_typePackageErr ?></span><br>


   <label>Add on Menus</label>
   <textarea name="new_otherMenus" id="otherMenus" value="<?php echo $db_otherMenus ?>" name="otherMenus" cols="30" rows="10" class="form-control" placeholder="ex. Menudo, Kaldereta,Pansit Bihon"></textarea><span class="error"><?php echo $new_otherMenusErr ?></span><br>


   <label>Payable Amount</label>
   <input type="text" name="new_payAmount" placeholder="Payable Amount" value="<?php echo $db_payAmount ?>"><span class="error"><?php echo $new_payAmountErr ?></span><br><br>

   <label>Full Name</label>
   <input type="text" name="new_fullName" placeholder="Full Name" value="<?php echo $db_fullName ?>"><span class="error"><?php echo $new_fullNameErr ?></span><br><br>

   <label>Contact Number</label>
   <input type="text" name="new_contactNum" placeholder="Contact Number" value="<?php echo $db_contactNum?>"><span class="error"><?php echo $new_contactNumErr ?></span><br>

   <label>Email</label>
   <input type="text" name="new_email" placeholder="Email" value="<?php echo $db_email ?>"><span class="error"><?php echo $new_emailErr ?></span><br>
   <label>Message for the Caterer</label>
   <textarea type="text" name="new_message" placeholder="Message" value="<?php echo $db_message ?>"></textarea><span class="error"><?php echo $new_messageErr ?></span><br><br>



		<center><input type="submit" name="btnUpdate" value="Update"><br><br>
   <a href="adminResList.php">Cancel</a></center>


</form>



<?php


}else{

	echo "<h1> No Record Found</h1>";

}


?>

</body>
</html>

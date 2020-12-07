<!DOCTYPE html>
<html lang="en">
<head>
	<title>JC's Foodstop and Catering Services</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="icon">
    <link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="logo">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link href="assets/images/logo.jpg" rel="icon">
    <link href="assets/images/logo.jpg" rel="logo">

</head>
<body>





<?php

include("connections.php");



$eventName = $typeReservation = $eventLocation =$deliverMethod = $motif = $dateEvent = $numGuest = $typePackage = $otherMenus = $payAmount = $fullName = $contactNum = $email = $message = $datetime = "";
$eventNameErr = $typeReservationErr = $eventLocationErr =$deliverMethodErr = $motifErr = $dateEventErr = $numGuestErr = $typePackageErr = $otherMenusErr = $payAmountErr = $fullNameErr = $contactNumErr = $emailErr = $messageErr = "";


if(isset($_POST["orderSubmit"])){



      if(empty($_POST["eventName"])){

         $eventNameErr = "Name of Event is Required!";
      }else{
         $eventName =$_POST["eventName"];

      }

       if(empty($_POST["typeReservation"])){

         $typeReservationErr = "Type of Reservation is Required!";
      }else{
         $typeReservation =$_POST["typeReservation"];

      }

       if(empty($_POST["eventLocation"])){

         $eventLocationErr = "Location of the Event is Required!";
      }else{
         $eventLocation =$_POST["eventLocation"];

      }

       if(empty($_POST["deliverMethod"])){

         $deliverMethodErr = "Delivery Method is Required!";
      }else{
         $deliverMethod =$_POST["deliverMethod"];

      }

       if(empty($_POST["motif"])){

         $motifErr = "Motif is Required!";
      }else{
         $motif =$_POST["motif"];

      }

       if(empty($_POST["dateEvent"])){

         $dateEventErr = "Date of Event is Required!";
      }else{
         $dateEvent =$_POST["dateEvent"];

      }

       if(empty($_POST["numGuest"])){

         $numGuestErr = "Number of Guest is Required!";
      }else{
         $numGuest =$_POST["numGuest"];

      }

       if(empty($_POST["typePackage"])){

         $typePackageErr = "Type of Package is Required!";
      }else{
         $typePackage =$_POST["typePackage"];

      }


       if(empty($_POST["otherMenus"])){

         $otherMenusErr = "Type 'None' if you dont want to add some menus";
      }else{
         $otherMenus =$_POST["otherMenus"];

      }


       if(empty($_POST["payAmount"])){

         $payAmountErr = "Payabale Amount is Required!";
      }else{
         $payAmount =$_POST["payAmount"];

      }


       if(empty($_POST["fullName"])){

         $fullNameErr = "Full Name is Required!";
      }else{
         $fullName =$_POST["fullName"];

      }

       if(empty($_POST["contactNum"])){

         $contactNumErr = "Contact Number is Required!";
      }else{
         $contactNum =$_POST["contactNum"];

      }



       if(empty($_POST["email"])){

         $emailErr = "Email is Required!";
      }else{
         $email =$_POST["email"];

      }

      	$message =$_POST["message"];
     	 $datetime = date('Y-m-d H:i:s');



         if($eventName && $typeReservation && $eventLocation && $deliverMethod && $motif && $dateEvent && $numGuest && $typePackage && $otherMenus && $payAmount && $fullName && $contactNum && $email && $datetime && $message){


            $check_eventName = strlen($eventName);


            if($check_eventName < 2){
               $eventNameErr = "Your Name of Event is too short!";
            }else{


               $check_eventLocation = strlen($eventLocation);

               if($check_eventLocation < 2){
               $eventLocationErr = "Your Location of the Event is too short!";
               }else{

               $check_motif = strlen($motif);

               if($check_motif < 2){
               $motifErr = "Your Motif is too short!";
               }else{

               $check_otherMenus = strlen($otherMenus);

               if($check_otherMenus == empty($otherMenus)){
                $otherMenusErr = "Type None if You don't want to create!";
               }else{

               $check_fullName = strlen($fullName);

               if($check_fullName < 2){
               $fullNameErr = "Your Full Name is too short!";
               }else{
                   $check_contactNum = strlen($contactNum);

               if($check_contactNum < 10){
               $contactNumErr = "Your Contact Number is too short!";
               }else{


                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                  $emailErr = "Invalid email format";
               }else{

                     mysqli_query($connections , "insert into reservation(eventName, typeReservation, eventLocation, deliverMethod, motif, dateEvent, numGuest, typePackage, otherMenus, payAmount, fullName, contactNum, email, message, dateReserve) VALUES('$eventName', '$typeReservation', '$eventLocation', '$deliverMethod', '$motif', '$dateEvent', '$numGuest','$typePackage', '$otherMenus', '$payAmount', '$fullName', '$contactNum', '$email', '$message', '$datetime') ");
                     echo "<script>alert('Submit Succesful! Thank you for ordering online!Please wait  through your email or text messages. Thank You! ');</script>";
                     echo "<script>window.location.href='../home/home.php';</script>";

               }
               }
               }
               }

               }

               }
            }

         }

}







?>
















	<style type="text/css">
   
.error{
   color: red;
}

</style>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST">
				<span class="contact100-form-title">
					Catering Order Form
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name of the Event</span>
					<input class="input100" type="text" name="eventName" placeholder="Enter your event" value="<?php echo $eventName ?>"> <span class="error"><?php echo $eventNameErr ?></span><br>
					<span class="focus-input100"></span>
				</div>




				<div class="wrap-input100 input100-select">
					<span class="label-input100">Type of Reservation</span>
					<div>
						<select class="selection-2" name="typeReservation">
						<option name ="typeReservation" value="">Select Type of Reservation</option>
				      <option name ="typeReservation"  <?php if($typeReservation == "Catering"){ echo "selected";} ?> value="Catering">Catering</option>
				      <option name ="typeReservation"  <?php if($typeReservation == "Function Room"){ echo "selected";} ?> value="Function Room">Function Room</option>
				      <option name ="typeReservation"  <?php if($typeReservation == "Both Catering and Function Room"){ echo "selected";} ?> value="Both Catering and Function Room">Both Catering and Function Room</option> 
				    </select><span class="error"><?php echo $typeReservationErr ?></span><br>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Location of the Event</span>
					  <input type="text"  class="input100"name="eventLocation"  class="form-control" placeholder="Location of the Event" value="<?php echo $eventLocation?>"><span class="error"><?php echo $eventLocationErr ?></span><br>
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 input100-select">
					<span class="label-input100">Delivery Method</span>
					<div>
						<select name="deliverMethod" class="selection-2">
						      <option name="" value="">Select Delivery Method</option>
						      <option name="deliverMethod" <?php if($deliverMethod == "None"){ echo "selected";} ?> value="None">None</option>
						      <option name="deliverMethod" <?php if($deliverMethod == "For Pick up"){ echo "selected";} ?> value="For Pick up">For Pick up</option>
						      <option name="deliverMethod" <?php if($deliverMethod == "For Delivery"){ echo "selected";} ?> value="For Delivery">For Delivery</option>
						      
						   </select><span class="error"><?php echo $deliverMethodErr ?></span><br>
					</div>

				</div>

				<div class="wrap-input100 validate-input" data-validate="Motif is required">
					<span class="label-input100">Motif</span>
					   <input type="text"  class="form-control" name="motif" placeholder="Motif" value="<?php echo $motif ?>"><span class="error"><?php echo $motifErr ?></span><br>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Date is required">
					<span class="label-input100">Date of Event</span>
					   <input type="date" class="form-control" name="dateEvent" placeholder="" value="<?php echo $dateEvent?>"><span class="error"><?php echo $dateEventErr ?></span><br>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Number of Guest is required">
					<span class="label-input100">Number of Guest</span>
					   <input type="text" class="form-control" name="numGuest" placeholder="Number of Guest" value="<?php echo $numGuest ?>"><span class="error"><?php echo $numGuestErr ?></span><br>
					<span class="focus-input100"></span>
				</div>




				<div class="wrap-input100 input100-select">
					<span class="label-input100">Type of Package</span>
					<div>
						<select name="typePackage" class="selection-2">
						      <option name="typePackage" value="">Select Type of Package</option>
						      <option name="typePackage" <?php if($typePackage == "None"){ echo "selected";} ?>  value="None">None</option>
						       <option name="typePackage" <?php if($typePackage == "Package A"){ echo "selected";} ?>  value="Package A">Package A
						      <option name="typePackage" <?php if($typePackage == "Package B"){ echo "selected";} ?>  value="Package B">Package B</option>
						      <option name="typePackage" <?php if($typePackage == "Package C"){ echo "selected";} ?>  value="Package C">Package C</option>
						      <option name="typePackage" <?php if($typePackage == "Package D"){ echo "selected";} ?>  value="Package D">Package D</option>
						      
						   </select><span class="error"><?php echo $typePackageErr ?></span><br>
					</div>

				</div>


					<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Add On Menus(Optional)</span>
					<textarea name="otherMenus" id="otherMenus" value="<?php echo $otherMenus ?>" name="otherMenus" cols="30" rows="10" class="form-control" placeholder="ex. Menudo, Kaldereta,Pansit Bihon"></textarea><span class="error"><?php echo $otherMenusErr ?></span>

				</div>


				<div class="wrap-input100 validate-input" data-validate="Number of Guest is required">
					<span class="label-input100">Payable Amount</span>
					   <input type="text" name="payAmount" class="form-control"  placeholder="Payable Amount" value="<?php echo $payAmount ?>"><span class="error"><?php echo $payAmountErr ?></span><br>
					   <span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Number of Guest is required">
					<span class="label-input100">Full Name</span>
					 <input type="text"  class="form-control" name="fullName" placeholder="Full Name" value="<?php echo $fullName ?>"><span class="error"><?php echo $fullNameErr ?></span><br>
					 <span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 validate-input" data-validate="Number of Guest is required">
					<span class="label-input100">Contact Number</span>
					<input type="text" class="form-control" name="contactNum" placeholder="Contact Number" value="<?php echo $contactNum?>"><span class="error"><?php echo $contactNumErr ?></span><br>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input type="text"  class="form-control" name="email" placeholder="Email" value="<?php echo $email ?>"><span class="error"><?php echo $emailErr ?></span><br>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea name="message" id="message" value="<?php echo $message ?>" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea><span class="error"><?php echo $messageErr ?></span>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="orderSubmit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true" name="orderSubmit"></i>
							</span>
						</button>
						

					</div>

				</div>
	
			</form>
			<center><a href="/FoodStopCateringNew/user/index.php">Cancel</a></center></center>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

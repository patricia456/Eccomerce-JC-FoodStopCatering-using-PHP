<!DOCTYPE html>
<html>
<head>
	<title>JC's Foodstop and Catering Services</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="icon">
    <link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="logo">
</head>

	<?php


	include("connections.php");
	$reservationID = $_REQUEST['reservationID'];
	$view = mysqli_query($connections,"select * from reservation WHERE reservationID = '$reservationID'");

	$get_view= mysqli_num_rows($view);


	if($get_view >0){
		$row = mysqli_fetch_assoc($view);


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
	}



	?>


<body style="font-size: 130%;
	background: #FF404C;">

<div style="display:none;">
  <div style="width:200px;height:300px;background-color:teal;">
           <?php echo $html; ?>     
  </div>
</div>
<div>
  <input type="button" value="print" onclick="PrintDiv();" />
</div>
<form style="background:#f4e1d2; font-family: sans-serif;" id="divToPrint" >
  <center><h1><font color="#e7272d"> <?php echo $eventName?></font> Ordering Form </h1></center>
		<br>
	<dl>
  <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Name of the Event</b></dt>
  <dd >-<?php echo $db_eventName ?></dd>

  <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Type of reservation</b></dt>
  <dd>-<?php echo $db_typeReservation ?></dd>

  <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Location of the Event</b></dt>
  <dd>-<?php echo $db_eventLocation ?></dd>

   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Delivery Method</b></dt>
  <dd>-<?php echo $db_deliverMethod ?></dd>

   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Motif</b></dt>
  <dd>-<?php echo  $db_motif ?></dd>

   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Date of the Event</b></dt>
  <dd>-<?php echo $db_dateEvent ?></dd>

   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Number of Guest</b></dt>
  <dd>-<?php echo $db_numGuest ?></dd>

   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Type of Package</b></dt>
  <dd>-<?php echo $db_typePackage ?></dd>

   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Other Menus</b></dt>
  <dd>-<?php echo $db_otherMenus ?></dd>

   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Payable Amount</b></dt>
  <dd>-<?php echo $db_payAmount ?></dd>

   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Event Consultant</b></dt>
  <dd>-<?php echo $db_fullName ?></dd>


    <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Contact Number</b></dt>
  <dd>-<?php echo $db_contactNum ?></dd>

   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Email</b></dt>
  <dd>-<?php echo $db_email ?></dd>


   <dt style="color:rgb(60, 9, 24);font-size:17px; "><b>Message</b></dt>
  <dd>-<?php echo $db_message ?></dd>
 </form>



<script type="text/javascript">    
    function PrintDiv() {   
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
</script>






</dl></body> <center><a href="adminResList.php" style="color: white">Cancel</a></center> <br>




</html>



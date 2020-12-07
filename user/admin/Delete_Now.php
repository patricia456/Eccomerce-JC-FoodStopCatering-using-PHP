<?php

include("connections.php");

$reservationID = $_POST["reservationID"];

mysqli_query($connections,"DELETE FROM reservation where reservationID = '$reservationID'");

echo "<script language='javascript'>alert('Record has been deleted')</script>";
echo "<script>window.location.href='adminResList.php';</script>";





?>



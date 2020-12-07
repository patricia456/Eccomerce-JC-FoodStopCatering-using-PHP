<!DOCTYPE html>
<html>
<head>
	<title>JC's Foodstop and Catering Services</title>
	<link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="icon">
    <link href="/FoodStopCateringNew/assets/images/logo.jpg" rel="logo">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color:#e7272d;
    color: white;
}
</style>
</head>
<body>
<div class="vertical-menu">
  <a href="#" class="active">Home</a>
  <a href="home.php">Cancel</a>
</div>
<br>
<center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."></center>
<table id="myTable">
	
<tr id="first" style="text-align: center;" style="position: fixed;">
	
		<td><b>Name of the Event</b></td>

		<td><b>Date of Event</b></td>
		<td><b>Event Coordinator</b></td>
		<td><b>Date of Reservation</b></td>
		<td><center><b>Update</b></center></td>
		<td><center><b>Delete</b></center></td>
		<td><center><b>View</b></center></td>

</tr>
<tr>
	
	<td colspan="20"><hr></td>     

</tr>

<?php
		include("connections.php");
		$db1_eventName ="";
		$viewquery = mysqli_query($connections,"select * from reservation ");
		while($row = mysqli_fetch_assoc($viewquery)){

			$reservationID = $row["reservationID"];
			$db_eventName = $row["eventName"];
			$db_dateEvent = $row["dateEvent"];
			$db_fullName = $row["fullName"];
			$db_date = $row["dateReserve"];

				$db1_eventName = ucfirst($db_eventName);
			echo "

				<tr>
					<td>$db1_eventName</td>
					<td>$db_dateEvent</td>
					<td>$db_fullName</td>
					<td>$db_date</td>
					<td>
						<center><a href ='resListAdminEdit.php?reservationID=$reservationID' class='edit_btn '>Update</a></center>
						</td>
						<td>
						
						
						<center><a href ='resListAdminDel.php?reservationID=$reservationID' class='del_btn'>Delete</a></center>
					
						</td>
						<td>
						<center><a href ='viewReservation.php?reservationID=$reservationID' class='details '>Details</a></center>

				
					</td>
				</tr>


				<tr>


					<td colspan='15'><hr></td>

				</tr>





			";



		}


?>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>



</table>
<br>





</body>
</html>
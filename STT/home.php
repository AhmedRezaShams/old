<?php
session_start();
if(isset($_SESSION['id'])){
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Saidpur Tour And Travel</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	
	<div class="container">	
		<form action="index.php" method="post"></form>
		
	<div class="head">
	
	<h1 align ="center">Welcome To Saidpur Tour And Travels</h1>
	</div>
	<div class="ifs">
		
		<a href="http://localhost/ST&T/ST&T.php" >Insert Flight Shedules</a>
			
		</div>
		
		<div class="Flight">
		
	<a href="http://localhost/ST&T/Flights.php" >Show Flight Shedules</a>
		
	</div>
	<div class="Holiday">
		
	<a href="" > Holiday Packages</a>
		
	</div>
	<div class="Ticket">
		
	<a href="" > Ticket Booking</a>
		
	</div>
	<div class="Current">
		
	<a href="" > Current Offers</a>
		
	</div>
	<div class="Contact">
		
	<a href="http://localhost/ST&T/contact.php" > Contact Us</a>
		
	</div>
	

	</div>

	<script src="index.js"></script>

</body>
</html>
<?php

$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection failed due to".mysqli_connect_error());

}
$Flight_Id =$_POST['Flight_Id'];
$Flight_Name=$_POST['Flight_Name'];
$Arrival_Time=$_POST['Arrival_Time'];
$Departure_Time =$_POST['Departure_Time'];


$sql = "INSERT INTO `10thbatch22`. `flight`(`Flight_Id`, `Flight_Name`, `Arrival_Time`, `Departure_Time`)
 VALUES ( '$Flight_Id', '$Flight_Name', '$Arrival_Time', '$Departure_Time ');";
//echo "$sql";
if($con->query($sql) == true){

	
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();



?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Flight Shedules</title>
	<link rel="stylesheet" type="text/css" href="ST&T.css">
</head>
<body><div class="container">
	<h1>Insert new flight shedule</h1>
    <form action="ST&T.php" method="post">
	<div class="id">
		<label for ="Flight_Id">Flight_Id</label>
		<input type="id" name="Flight_Id">
	</div><br>
			<div class="name">
				<label for ="Flight_Name">Flight Name</label>
				<input type="Name" name="Flight_Name">
			</div>
			<br>
			<div class="arrival">
				<label for="arrival">Arrival</label>
				<input type="time" name="Arrival_Time">

			</div>
		</br>
		<br>
		<div class="departure">
			<label for="departure">Deperture</label>
			<input type="time" name="Departure_Time">
		</div>
	</br>

		<div class="btn">
        <button class = "btn" >Submit</button>
        </div>
		

	</div>
</div>
</div>
</form>
</body>
<script src="ST&T.js"></script>

</html>
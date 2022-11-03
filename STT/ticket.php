
<?php

$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection failed due to".mysqli_connect_error());

}
$Name =$_POST['Name'];
$Age =$_POST['Age'];
$Gender =$_POST['Gender'];
$T_form =$_POST['T_form'];
$T_To =$_POST['T_To'];
$class_choice =$_POST['class_choice'];

$sql = "INSERT INTO `10thbatch03`.`ticket`( `Name`, `Age`, `Gender`, `T_from`, `T_To`, `Class`) VALUES ('$Name','$Age', '$Gender','$T_form','$T_To','$class_choice');";


//$sql = "INSERT INTO `10thbatch22`. `flight`(`Flight_Id`, `Flight_Name`, `Arrival_Time`, `Departure_Time`)
 //VALUES ( '$Flight_Id', '$Flight_Name', '$Arrival_Time', '$Departure_Time ');";
//echo "$sql";
if($con->query($sql) == true){

	echo "successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>
</head>
<body>
    <div class="container">
        <form action="ticket.php" method = "post">
    <div>
        <label for="name">Enter Your Name</label>
        <input type="text" name="Name" id="" placeholder="">
        
        </div><br>
    <div>
        <label for="Age">Enter Your Age</label>
        <input type="text" name="Age" id="">
    
    </div><br>
    <div>
        <p>Gender :</p>
        <label for="gender-male">Male</label>
        <input type="radio" name="Gender" id="" value="choice-1">
        <label for="gender-female">Female</label>
        <input type="radio" name="Gender" id="" value="choice-2">
        <label for="gender-other">Other</label>
        <input type="radio" name="Gender" id="" value="choice-3">
    </div><br>
    <div>
        <label for="from">From</label>
        <select name="T_from" id="">
           <option value="dhaka" >Dhaka</option>
           <option value="saidpur">Saidpur</option>
           <option value="shylet">Shylet</option>
           <option value="cox's bazar">Cox's Bazar</option>
</select>
        <label for="To">To</label>
        <select name="T_To" id="">
        <option value="dhaka">Dhaka</option>
           <option value="saidpur">Saidpur</option>
           <option value="shylet">Shylet</option>
           <option value="cox's bazar">Cox's Bazar</option>
           </select>
    </div><br>

    <div>

        <p>Class :</p>
        <label for="class-economy">Economy</label>
        <input type="radio" name="class_choice" id="" value="choice-1">
        <label for="class-business">Businesss</label>
        <input type="radio" name="class_choice" id="" value="choice-2">
    </div><br>
   
    <div>
        <label for="Faer">Faer</label>
        <select name="Faer" id="">
            <option value="0">Auto</option>
        </select>
    </div><br>
    <div>
        <button class="submit">Buy</button>
    </div>
</div>

</form>

</body>
</html>
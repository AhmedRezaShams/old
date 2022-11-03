<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Flight Shedule for Today</title>
</head>
<style>
  
    table {
        border: 1px solid black;
        font-size: 1.3rem;
       
    }
    th{
        border: 1px solid black;
    }
    td{
        border: 2px solid black;
    }
    
    
</style>
<body>
    <h1>
        Flight Shedule for Today
    </h1>
    <table>
        <tr>
            
            <th>Flight_Id</th>
            <th>Flight_Name</th>
            <th>Arrival_Time</th>
            <th>Departure_Time</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","", "10thbatch22");
        if($conn-> connect_error){
            die("connection failed".$conn-> connect_error);
        }
        $sql = "SELECT `Flight_Id`, `Flight_Name`, `Arrival_Time`, `Departure_Time` FROM `flight` ";
        $result = $conn->query($sql);
        
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>".  $row["Flight_Id"] . "</td><td>" . $row["Flight_Name"] . "</td><td>" . $row["Arrival_Time"] . "</td><td>" . $row["Departure_Time"] . "</td></tr>";

            }
            echo "</table>";
        
         
         
         $conn-> close();
?> 
    </table>
    
</body>
</html>
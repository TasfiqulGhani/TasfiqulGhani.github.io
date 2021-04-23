<?php
$servername = "localhost";
$username = "nusrhjdq_testu";
$password = "test123123";
$dbname = "nusrhjdq_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Pulse=$_GET['Pulse'];
$BloodSugar=$_GET['BloodSugar'];
$Patient=$_GET['Patient']; 
$Temp=$_GET['Temp']; 
date_default_timezone_set('Asia/Dhaka');
$objDateTime = new DateTime('NOW');
$Time= $objDateTime->format('c');



$sql = "INSERT INTO Health (Pulse,BloodSugar,Patient,Temp,Time)
VALUES ('{$Pulse}','{$BloodSugar}','{$Patient}','{$Temp}','{$Time}')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
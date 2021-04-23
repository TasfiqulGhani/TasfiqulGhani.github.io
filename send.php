 

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
$SensorOne=$_GET['sensorone'];
$SensorTwo=$_GET['sensortwo'];
$Time=date("Y-m-d h:i:sa"); 

$sql = "INSERT INTO Data (SensorOne,SensorTwo,Time )
VALUES ('{$SensorOne}','{$SensorTwo}','{$Time}')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
<?php
$servername = "localhost";
$username = "colubxpl_p";
$password = "bg9l9sokDLN";
$dbname = "colubxpl_parolour";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$CustomerName=$_POST['CustomerName'];
$CustomerPhone = $_POST['CustomerPhone'];
$ProductName = $_POST['ProductName'];
$ProductDetails = $_POST['ProductDetails'];
$TotalPrice = $_POST['TotalPrice'];
$SlotTime = $_POST['SlotTime'];
$SlotDate = $_POST['SlotDate'];
$OrderTime = $_POST['OrderTime'];


$sql = "INSERT INTO Tabs (CustomerName,	CustomerPhone,	ProductName	,ProductDetails	,TotalPrice	,SlotTime	,SlotDate,	OrderTime)
VALUES ('{$CustomerName}','{$CustomerPhone}','{$ProductName}','{$ProductDetails}','{$TotalPrice}','{$SlotTime}','{$SlotDate}','{$OrderTime}')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
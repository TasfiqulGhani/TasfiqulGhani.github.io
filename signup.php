<?php
$servername = "localhost";
$username = "colubxpl_userr";
$password = "Tash12345";
$dbname = "colubxpl_cash";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$UserId=$_POST['UserId'];
$Name=$_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password']; 
$Phone = $_POST['Phone'];
$Refer = $_POST['Refer'];

if (strlen($Refer) == 0){
$Points='50';
}else{

 $rsql="Select UserId From User Where '$Refer'=UserId";
  

  if ($conn->query($rsql)>0) {
    $Points='100';
}  else{
    $Points='50';

}
}
$sql = "INSERT INTO User (Name,Email,Password,Phone,Points,UserId)
VALUES ('{$Name}','{$Email}','{$Password}','{$Phone}','{$Points}','{$UserId}')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
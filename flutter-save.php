bd=    

<?php
$servername = "localhost";
$username = "nusrhjdq_flutter_user";
$password = "*PJqg_IyoS1t";
$dbname = "nusrhjdq_flutter";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Name=$_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$sql = "INSERT INTO Profile (Name,Email,Password )
VALUES ('{$Name}','{$Email}','{$Password}' )";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 


<?php
$servername = "192.168.99.100:3306";
//$servername = "localhost";
$username = "root";
$password = "12345678";
$nameDb = "project";
// Create connection
$conn = new mysqli($servername, $username, $password,$nameDb );
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>

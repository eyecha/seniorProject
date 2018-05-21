

<?php
$servername = "192.168.99.100:3306";
$username = "root";
$password = "12345678";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

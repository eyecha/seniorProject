

<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$nameDb = "project";
// Create connection
$conn = new mysqli($servername, $username, $password,$nameDb );
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

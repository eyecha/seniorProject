<!-- <?
$link = @mysqli_connect("localhost", "root", "12345678", "project")or die(mysqli_connect_error());
$sql = "select * from user";
$result = mysqli_query($link,$sql);
while ($data = mysqli_fetch_array($result)) {
  echo $data['email'];
}

?> -->

<?php
$servername = "localhost";
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

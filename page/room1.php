 <?php include("../Mysql/connect.php"); ?>

 <?php
 $sql = "SELECT * FROM home";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "id: " . $row["Home_ID"];
     }
 } else {
     echo "0 results";
 }
 $conn->close();
 ?>

<html>
<head>
<title>ห้อง1</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="css/index.css" rel="stylesheet"> -->
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://NETPIE.io/microgear.js"></script>
<script src="../js/room1.js"></script>
<link href="../css/room.css" rel="stylesheet">
<center>
  <section class="section">
    <div class="container">
      <div class="notification">
        <h1 id="connected_NETPIE"></h1>

        <h1>device 1</h1>
        <label class="switch">
          <input id="sbutton1"  type="checkbox">
          <span class="slider round"></span>
        </label>
        <p><strong id="Status_device1">Load is OFF.</strong></p><br>

        <h1>device 2</h1>
        <label class="switch">
          <input id="sbutton2"  type="checkbox">
          <span class="slider round"></span>
        </label>
        <p><strong id="Status_device2">Load is OFF.</strong></p><br>

        <h1>All devices</h1>
        <label class="switch">
          <input id="sbutton_all"  type="checkbox">
          <span class="slider round"></span>
        </label>
        <p><strong id="All_device">Load is OFF.</strong></p>

        <h1>LDR Sensor</h1>
        <p><strong id="LDR_Sensor">Light is OFF.</strong></p>

      </div>
    </div>
  </section>
</center>

</body>
</html>

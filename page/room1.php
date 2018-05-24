 <?php include("../Mysql/connect.php"); ?>

<html>
<head>
<title>ห้อง1</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="css/index.css" rel="stylesheet"> -->
</head>
<body>
<script src="https://NETPIE.io/microgear.js"></script>
 <script>



    var device_1 = 0;
    var device_2 = 0;
    const APPID = "EyeSmartLight";
    const KEY = "6HFx5w70w6eYDqg";
    const SECRET = "jSlDqEh2S3hYLRCZ1AqTopUkO";
    const ALIAS= "Room1";
    const Device1 = "ESPChat/room1/device1";
    const Device2 = "ESPChat/room1/device2";
    const LDR = "ESPChat/room1/LDR_Sensor";


    function button_device1(logic){
      if(logic == 1 )
      {
        microgear.chat("ESPChat/room1/device1","ON");
      }else if(logic == 0 )
      {
        microgear.chat("ESPChat/room1/device1","OFF");
      }
    }

    function button_device2(logic){
      if(logic == 1 )
      {
        microgear.chat("ESPChat/room1/device2","ON");
      }else if(logic == 0 )
      {
        microgear.chat("ESPChat/room1/device2","OFF");
      }
    }

    function All_room1(logic){
      if(logic == 1 )
      {
        microgear.chat("ESPChat/room1/alldevices","ON");
      }else if(logic == 0 )
      {
        microgear.chat("ESPChat/room1/alldevices","OFF");
      }
    }

  var microgear = Microgear.create({
    key: KEY,
    secret: SECRET,
    alias : ALIAS
  });

  microgear.on('message', function(topic,data){
    if(data=="device1ON")
    {
      device_1 = 1;
      document.getElementById("Status_device1").innerHTML =  "Load is ON.";
      document.getElementById("All_device").innerHTML =  "Load is ON.";
    }else if(data=="device1OFF")
    {
      device_1 = 0;
      document.getElementById("Status_device1").innerHTML =  "Load is OFF.";
    }else if(data=="device2ON")
    {
      device_2 = 1;
      document.getElementById("Status_device2").innerHTML =  "Load is ON.";
      document.getElementById("All_device").innerHTML =  "Load is ON.";
    }else if(data=="device2OFF")
    {
      device_2 = 0;
      document.getElementById("Status_device2").innerHTML =  "Load is OFF.";
    }else if(data=="room1ON")
    {
      document.getElementById("All_device").innerHTML =  "Load is ON.";
      document.getElementById("Status_device1").innerHTML =  "Load is ON.";
      document.getElementById("Status_device2").innerHTML =  "Load is ON.";
    }else if(data=="room1OFF")
    {
      document.getElementById("All_device").innerHTML =  "Load is OFF.";
      document.getElementById("Status_device1").innerHTML =  "Load is OFF.";
      document.getElementById("Status_device2").innerHTML =  "Load is OFF.";
    }
    if ( device_1 == 0 && device_2 == 0 )
    {
      document.getElementById("All_device").innerHTML =  "Load is OFF.";
    }
    if (data=="1")
    {
      document.getElementById("LDR_Sensor").innerHTML =  "Light Is ON.";
    }else if (data=="0")
    {
      document.getElementById("LDR_Sensor").innerHTML =  "Light Is Problem.";
    }
  });

  microgear.on('connected', function(){
    microgear.setAlias(ALIAS);
    document.getElementById("connected_NETPIE").innerHTML = "Connected to NETPIE"
  });

  microgear.on('present', function(event){
    console.log(event);
  });

  microgear.on('absent', function(event){
    console.log(event);
  });

  microgear.resettoken(function(err){
    microgear.connect(APPID);
  });

</script>
<center>
  <section class="section">
    <div class="container">
      <div class="notification">
        <h1 id="connected_NETPIE"></h1>
        <h1>device 1</h1>
        <button type="button" onclick="button_device1(1)">Turn ON</button>
        <button type="button" onclick="button_device1(0)">Turn OFF</button>
        <p><strong id="Status_device1">Load is OFF.</strong></p><br>

        <h1>device 2</h1>
        <button type="button" onclick="button_device2(1)">Turn ON</button>
        <button type="button" onclick="button_device2(0)">Turn OFF</button>
        <p><strong id="Status_device2">Load is OFF.</strong></p><br>

        <h1>All devices</h1>
        <button type="button" onclick="All_room1(1)">Turn ON</button>
        <button type="button" onclick="All_room1(0)">Turn OFF</button>
        <p><strong id="All_device">Load is OFF.</strong></p>

        <h1>LDR Sensor</h1>
        <p><strong id="LDR_Sensor">Light is OFF.</strong></p>

      </div>
    </div>
  </section>
</center>

</body>
</html>

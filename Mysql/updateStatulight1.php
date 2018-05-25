<?php

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if ($contentType === "application/json") {
  //Receive the RAW post data.
  $content = trim(file_get_contents("php://input"));
}
$datajson = json_decode( $content,true);
if($datajson["statusLight"] == "ON"){
    $sql = "UPDATE light SET Status = 'ON' WHERE Light_ID=1";
}else{
    $sql = "UPDATE light SET Status = 'OFF' WHERE Light_ID=1"; 
}
include_once('../Mysql/connect.php');



if ($conn->query($sql) === TRUE) {
    echo json_encode(Array("status"=>"success"));
}else{
    echo json_encode(Array("status"=>"false"));
}



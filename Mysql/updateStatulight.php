<?php


$arr  = Array(
                "firstName"=>"เอกนันท์",
                "lastName"=>"ขันทอง",
                "address" =>
                            Array(
                                  "streetAddress"=>"พระราม2",
                                  "city"=>"กรุงเทพฯ",
                                  "postalCode"=>"10150"
                                 ),
                "phoneNumbers"=>
                            Array(
                                  "085-123-4567",
                                  "02-555-4567"
                                 )
               );
 
echo json_encode($arr);



 
?>
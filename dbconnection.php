<?php
$host = "localhost"; // host
$dbname = "sms"; // database name
$user = "root"; // username
$pass = "i9tec"; // password

try {
  $CNT = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $CNT->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
}  
catch(PDOException $e) {  
    echo $e->getMessage();  
}


?>
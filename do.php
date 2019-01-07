<?php
include("dbconnection.php");
date_default_timezone_set('America/Sao_Paulo');

$token = $_REQUEST['token'];
$phone = $_REQUEST['phone'];
$text = $_REQUEST['text'];

if (($phone == "") AND ($text == "")) {

	echo "";
	
} else {

	$date = date('Y-m-d H:i:s');
	if(strlen($text) > 3 AND strlen($phone) > 7){
		$sql = "INSERT INTO smsinbox (phone,text,date) VALUES (:phone,:text,:date)";
		$q = $CNT->prepare($sql);
		$q->execute(
			array(
			':phone'=>"$phone",
			':text'=>"$text",
			':date'=>"$date"
			)
		);	
	}
}

?>
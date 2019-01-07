<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$sms_password = "i9tec";
$numero = $_POST['fone'];
$msg = $_POST['comando'];
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');


$string = urlencode($msg);

$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
$sms_url2 = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $sms_url);

$resultado = curl_exec($ch);

curl_close($ch);


if($resultado == '1'){
	
	include "dbconnection.php";
	
		include ("dbconnection.php");		
		$query = " INSERT INTO tb_smslivre(fone, mensagem, data) VALUES ('$numero', '$msg','$data')";
		$stmt = $CNT->prepare($query);
		$stmt->execute();
	
		
	echo  "<script>alert('Mensagem Enviada!!!');history.back(1);</script>";
	
}else{
	
	echo  "<script>alert('Mensagem Nao Enviada!!!');history.back(1);</script>";
}
//echo $resultado;
//echo $sms_url;


?>
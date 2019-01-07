<?php
date_default_timezone_set('America/Sao_Paulo');

$intervalo = $_POST['intervalo'];
$quantidade = $_POST['quantidade'];
date_default_timezone_set('America/Sao_Paulo');
$inicio = date('Y-m-d H:i:s');
$msg = $_POST['comando'];

$string = urlencode($msg);

$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $sms_url);

$resultado = curl_exec($ch);

curl_close($ch);


function Intervalo($inicio, $ate, $intervalo) {

	for($i = 0; $i < 70 ; $i+=$intervalo) {
		
		$Ate = date("H:i:s", strtotime($inicio)+($i*60));
		if($Ate == $ate) {
			exit;
		} else {
			echo "$Ate<br />";
		}
	}
}
// hora inicial, hora final, minutos de intervalo
echo Intervalo("14:58:00", "10:00:00", 20);

?>




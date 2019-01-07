<?php

$sms_password = "i9tec";
$numero = $_POST['fone'];
$equipamento = $_POST['equipamento'];
$serial = $_POST['serial'];
$msg = $_POST['comando'];
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');


$string = rawurlencode($msg);

if($equipamento == 'Maxtrack'){
		
	if($msg == 'Reset'){
		
		$string = "0000,".$serial.",9";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
		
	}else if($msg == 'Requisitar Posição'){

		$string = "0000,".$serial.",1";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
		
	}else if($msg == 'Requisitar Posição GPS'){

		$string = "0000,".$serial.",7";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
		
	}else if($msg == 'Alterar para 12 V'){

		echo  "<script>alert('Comando disponivel apenas para Suntech');history.back(1);</script>";
	}
	
}else if($equipamento == 'Suntech 200'){
	
	if($msg == 'Reset'){
		
		$string = "SA200CMD;".$serial.";02;Reboot";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
		
	}else if($msg == 'Requisitar Posição'){

		$string = "SA200CMD;".$serial.";02;StatusReq";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
		
	}else if($msg == 'Requisitar Posição GPS'){

		echo  "<script>alert('Comando disponivel apenas para ST300');history.back(1);</script>";
		
	}else if($msg == 'Alterar para 12 V'){

		echo  "<script>alert('Comando disponivel apenas para ST300');history.back(1);</script>";
	}
	
}else if($equipamento == 'Suntech 300'){
	
	if($msg == 'Reset'){
		
		$string = "ST300CMD;".$serial.";02;Reboot";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
		
	}else if($msg == 'Requisitar Posição'){

		$string = "ST300CMD;".$serial.";02;StatusReq";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
		
	}else if($msg == 'Requisitar Posição GPS'){

		$string = "Where are you";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
		
	}else if($msg == 'Alterar para 12 V'){

		$string = "ST300MBV;".$serial.";02;0;0;18.00;9.00;19.00;14.00;13.99";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=".$string."&password=".$sms_password."");
		
	}	
	
}else if($equipamento == 'Trap'){
	
	if($msg == 'Requisitar Posição'){
		
		$string = "trap LOC";
		$sms_url = ("http://192.168.0.103:9090/sendsms?phone=".$numero."&text=Trap%20LOC&password=".$sms_password."");
		
	}
	
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $sms_url);

$resultado = curl_exec($ch);

curl_close($ch);


if($resultado == '1'){
	
	echo  "<script>alert('Mensagem Enviada!!!');history.back(1);</script>";
		
		include ("dbconnection.php");		
		$query = "INSERT INTO tb_comandos(fone, equipamento, serial, comando, mensagem, data) VALUES ('$numero','$equipamento','$serial','$msg','$string','$data')";
		$stmt = $CNT->prepare($query);
		$stmt->execute();	
		
}else{
	
	echo  "<script>alert('Mensagem Nao Enviada!!!');history.back(1);</script>";
}
//echo $resultado;
//echo $sms_url;


?>
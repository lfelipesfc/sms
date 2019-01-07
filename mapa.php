<?php

include("dbconnection.php");

$id = $_GET['id'];

$locatemxt = $CNT->query("SELECT text, LOCATE(',-', text) AS latitude FROM smsinbox WHERE id='$id'");
$resultado = $locatemxt->fetch();
$latitude = $resultado[latitude];

if( $latitude == 31){

	//echo $latitude;

	$latlongmxt = $CNT->query("SELECT text, SUBSTRING(text, 32, 21) AS LATLONG FROM smsinbox WHERE id='$id'");
	$resultadomxt = $latlongmxt->fetch();
	$mapa = $resultadomxt[LATLONG];	
	header("Location: https://www.google.com.br/maps/search/".$mapa."");
	
	
	
}else{

	$locatest = $CNT->query("SELECT text, LOCATE(';-', text) AS latitude FROM smsinbox WHERE id='$id'");
	$resultadost = $locatest->fetch();
	$latitude = $resultadost[latitude];
	
	if( $latitude == 51){

	$latst = $CNT->query("SELECT text, SUBSTRING(text, 52, 21) AS lat FROM smsinbox WHERE id='$id'");
	$resultadost = $latst->fetch();
	$lat = $resultadost[lat];
	
	$mapa = str_replace(';', ',', $lat);
	header("Location: https://www.google.com.br/maps/search/".$mapa."");
	
	}else{
	
		$locatest = $CNT->query("SELECT text, LOCATE(';-', text) AS latitude FROM smsinbox WHERE id='$id'");
		$resultadost = $locatest->fetch();
		$latitude = $resultadost[latitude];
		
	}if( $latitude == 44){

		$latst = $CNT->query("SELECT text, SUBSTRING(text, 45, 21) AS lat FROM smsinbox WHERE id='$id'");
		$resultadost = $latst->fetch();
		$lat = $resultadost[lat];
	
		$mapa = str_replace(';', ',', $lat);
		//echo $mapa;
		header("Location: https://www.google.com.br/maps/search/".$mapa."");	

	}else{
		
		$locatest = $CNT->query("SELECT text, LOCATE('q=', text) AS latitude FROM smsinbox WHERE id='$id'");
		$resultadost = $locatest->fetch();
		$latitude = $resultadost[latitude];
		
		if( $latitude == 29){

			$latst = $CNT->query("SELECT text, SUBSTRING(text, 31, 21) AS lat FROM smsinbox WHERE id='$id'");
			$resultadost = $latst->fetch();
			$lat = $resultadost[lat];
	
			$mapa = str_replace(';', ',', $lat);
			//echo $mapa;
			header("Location: http://maps.google.com/maps?q=".$mapa."");	
		
		}else{
			
		echo  "<script>alert('Sem Latitude na Mensagem!!!');history.back(1);</script>";
		
		}	
	
	}	
}	




	
	




?>
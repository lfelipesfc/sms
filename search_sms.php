﻿<html>
<head> 
<title>Respostas Trap</title>
</head>
<link rel="stylesheet" href="css/menu_style.css" type="text/css"/> 
<body>
<?php
include "topo.php";
include("dbconnection.php");

	$busca = $_POST['busca'];

	$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

	$select = $CNT->query("SELECT * FROM trapinbox WHERE phone LIKE '%$busca%'");  
	$msg = $select->rowCount();
		
  
if($msg > 0){ 

	echo "<table>"
		."<tr>
			<th>Id</th>
			<th>Telefone</th>
			<th>Mensagem</th>
			<th>Data</th>
		</tr>";

	while($row = $select->fetch()) {
	
	echo "<tr>"
			."<td>$row[id]</td>"
			."<td>$row[phone]</td>"
			."<td>$row[text]</td>"
			."<td>$row[date]</td>"
		."</tr>";
		
	}

	echo "</form>"
	."</table>"
	."</div><br>"
	."</td>"
	."</table>";
	
	for($i = 1; $i < $numPaginas + 1; $i++) { 
        echo "<a href='recebidostrap.php?pagina=$i'>".$i."</a> "; 
    } 
	
	
	echo "<div id=\"respostas\" width=\"auto\" align=\"center\">";
	echo "<b>$msg</b> Resultado(s)  <a style=\"background-color: #4CAF50;border:none;color: white;padding: 5px 11px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" href=\"$PHP_SELF\">Atualizar</a> <br>";	
	
} else { 
	echo "<br><br><div id=style=\"width:20%;background-color: #efefef;padding: 8px 36px;\">Sem Mensagens<div>";
	//echo "<a style=\"background-color: #4CAF50;border:none;color: white;padding: 5px 11px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" href=\"$PHP_SELF\">Atualizar</a> <br>";
	
}

echo "</div>";

?>
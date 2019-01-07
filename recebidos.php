<html>
<head> 
<title>Respostas</title>
</head>
<link rel="stylesheet" href="css/menu_style.css2" type="text/css"/>
<body>
<?php
include "topo.php";
include("dbconnection.php");

	$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

	$select = $CNT->query("SELECT * FROM smsinbox ORDER BY id");  
	$msg = $select->rowCount();
	
	$registros=15;
		
	$numPaginas = ceil($msg/$registros);
	$inicio = ($registros*$pagina)-$registros;
	$select = $CNT->query("SELECT * FROM smsinbox LIMIT $inicio,$registros");
	$msg2 = $select->rowCount();

		
  
if($msg > 0){ 

	echo "<table>"
		."<tr>
			<th>Id</th>
			<th>Telefone</th>
			<th>Mensagem</th>
			<th>Data</th>
			<th>Mapa</th>
		</tr>";

	while($row = $select->fetch()) {
	
	echo "<tr>"
			."<td>$row[id]</td>"
			."<td>$row[phone]</td>"
			."<td>$row[text]</td>"
			."<td>$row[date]</td>"
			."<td><a href=\"mapa.php?id=".$row['id']."\" title=\"Mapa\"><img alt=Mapa src=img/mapa.png></a></td>"
		."</tr>";
		
	}

	echo "</form>"
	."</table>"
	."</div><br>";
	
	for($i = 1; $i < $numPaginas + 1; $i++) { 
        echo "<a href='recebidos.php?pagina=$i'>".$i."</a> "; 
    } 
	
	
	echo "<div id=\"respostas\" width=\"auto\" align=\"center\">";
	echo "Respostas: <b>$msg</b> Mensagen(s)  <a style=\"background-color: #4CAF50;border:none;color: white;padding: 5px 11px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" href=\"$PHP_SELF\">Atualizar</a> <br>";	
	
} else { 
	echo "<br><br><div id=style=\"width:20%;background-color: #efefef;padding: 8px 36px;\">Sem Mensagens<div>";
	
}

echo "</div>";

?>
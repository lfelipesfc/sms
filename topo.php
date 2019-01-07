<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/menu_style2.css" type="text/css"/>
		<title>SMS Center</title>
	</head>

	<body>
		<div id="total">
			<div id="banner">
				<img src="img/logoi9.png" alt="logotipo i9tec">
			</div>	
            <div class="menu">
				<ul>
					<li><a href="" id="current">Enviar SMS</a>
			  			<ul>
							<li><a href="enviar.php">Comandos</a></li>
							<li><a href="smslivre.php">SMS Livre</a></li>
		      			</ul>
		  			</li>
					<li><a href="recebidos.php" id="current">Respostas</a>
			  			
		  			</li>
					<li><a href="recebidostrap.php" id="current">Respostas LBS</a>
			  			
		  			</li>
					<li><a href="" id="current">Relatórios</a>
						<ul>
							<li><a href="list_comandos_enviados.php">Comandos Enviados</a></li>
							<li><a href="list_sms_enviados.php">SMS Livre Enviados</a></li>
		      			</ul>	
		  			</li>
                    
				</ul>
  			</div>
            <div id="conteudo">

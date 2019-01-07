<html>
<head> 
<title>Sms Temporal</title>
</head>
<link rel="stylesheet" href="css/menu_style.css" type="text/css"/> 
<body>
	<?php include_once 'topo.php'; ?>
			<form method ="post" action = ".php">
            <b>SMS Livre</b>
				<div class="row"><br><br>
                	<span class="label">Intervalo em minutos:</span>
						<span class="label"><input type="text" size="15" name="intervalo"/></span>
    			</div>
                <div class="row">
					<span class="label">Comando:</span><span class="label">
						<select name="comando">
							<option></option>
							<option>Reset</option>
							<option>Requisitar Posição</option>
							<option>Requisitar Posição GPS</option>
							<option>Alterar para 12 V</option>
						</select>                    
					</span>
				</div>
				<div class="row"><br><br>
                	<span class="label">Quantidade de SMS:</span>
						<span class="label"><input type="text" size="15" name="quant"/></span>
    			</div>
                <div class="row">
                	<span class="label"><input type="submit" size="25" value="Enviar" name="btoSalvar"/></span>
   				</div>
			</Form>
         </div>
 </body>
 </html>
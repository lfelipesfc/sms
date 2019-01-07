<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/menu_style2.css" type="text/css"/> 

<header>
<title>Envio de Comandos</title>

</header
 <body>
	<?php include "topo.php";?>
   <form method=post action='enviasms.php'>
   
		<b>Comandos SMS</b>
   
   
		<div class="row"><br><br>
			<span class="label">Telefone com DDD:</span>
			<span class="label"><input type="text" size="15" name="fone" maxlength="11"/></span>
		</div>
   
		<div class="row">
			<span class="label">Equipamento:</span><span class="label">
				<select name="equipamento">
                   	<option>Maxtrack</option>
					<option>Suntech 200</option>
					<option>Suntech 300</option>
					<option>Trap</option>
					<option>IC10</option>
				</select>                    
			</span>
		</div>
	
		<div class="row">
			<span class="label">Serial:</span>
			<span class="label"><input type="text" size="15" name="serial" maxlength="15"/></span>
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
   
		<div class="row">
            <span class="label"><input type="submit" size="25" value="Enviar" name="btoSalvar"/></span>
   		</div>
	</Form>
</div>
</body>
</html>
 
   

<html>
<head> 
<title>Sms Livre</title>
</head>
<link rel="stylesheet" href="css/menu_style2.css" type="text/css"/> 
<body>
	<?php include_once 'topo.php'; ?>
			<form method ="post" action = "enviasmslivre.php">
            <b>SMS Livre</b>
				<div class="row"><br><br>
                	<span class="label">Telefone com DDD:</span>
						<span class="label"><input type="text" size="15" name="fone"/></span>
    			</div>
                <div class="row">
      				<span class="label">Mensagem:</span>
					<span class="label">
						<textarea name="comando" cols="30" rows="6"></textarea>
					</span>
    			</div>
                <div class="row">
                	<span class="label"><input type="submit" size="25" value="Enviar" name="btoSalvar"/></span>
   				</div>
			</Form>
         </div>
 </body>
 </html>
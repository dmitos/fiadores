<?xml version="1.1" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es">
    <head>
        <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
      <!--  <link rel="stylesheet" type="text/css" href="css/listado_gastos_consumidores.css"> -->
        <title>Indice de las pantallas</title>
    </head>
    <body>
<div id="contenedor" class="feo">
	<div class="pantallas">
		<?php
			include 'ingreso_gastos_consumidores.php';
		?>
	</div>
		<div class="pantallas">
		<?php
			include 'ingreso_gastos_proveedores.php';
		?>
		</div>
		<div class="pantallas">
		<?php
			include 'listado_de_consumidores.php';
		?>
		</div>
		
</div>
<div id="1">hola</div>

    </body>
</html>

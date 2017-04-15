<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
<!-- Configuracion y conexion a la base de datos -->
<?php

	$Server="localhost"; // Nombre del Servidor 
	$Username="root"; // Nombre del Usuario
	$Password="desarrollosalome"; // Password del Usuario
	$BaseDato="ovi_programacion"; // Nombre de la Base de Datos a Utilizar
			
	$Conexion=mysql_connect($Server,$Username,$Password)or die("No se ha podido conectar a la base de dato. ". mysql_error());
	$SelecionBD=mysql_select_db($BaseDato,$Conexion)or die("La base de dato no existe ".mysql_error());
			
?>	
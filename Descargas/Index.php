<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
<!DOCTYPE html>
<html>
	<head>
		<title>. : Diseño Web : .</title>
		<link rel="stylesheet" href="Estilo.css">
		<meta charset="utf-8">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta http-equiv="&aacute; &eacute; &iacute; &oacute; &uacute; &ntilde; &Aacute; &Eacute; &Iacute; &Oacute; &Uacute; &Ntilde;" content="text/html; charset=ISO-8859-1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Fringila Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	</head>
	<body onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='.:Error:. '; return true;" >
		<article>
		<!--Titulo de la pagina -->
			<h1>
				 Consultar, Registrar, Actualización, Eliminación y Descargar 
			</h1>
		<!-- Menu de la pagina. -->
			<?php
				include_once "Nav.php";
			?>
		<!-- JavaScript -->
			<?php
				include_once "Javascript.php";
			?>
			<?php 
				if (isset($_GET['Consultar'])) 
					{ 
						include_once "Form_consultar.php";
					}
				elseif (isset($_GET['Registrar'])) 
					{
						include_once "Form_registrar.php";
					}
				elseif (isset($_GET['Actualizar'])) 
					{
						include_once "Form_actualizar.php";
					}
				elseif (isset($_GET['Eliminar'])) 
					{
						include_once "Form_eliminar.php";
					}
				elseif (isset($_GET['Descargar'])) 
					{
						include_once "Form_descargar.php";
					}
				else
					{
						include_once "Form_registrar.php";
					}
			?>
		</article>
	</body>
</html>
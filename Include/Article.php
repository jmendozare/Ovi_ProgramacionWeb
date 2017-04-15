<!-- 
	Desarrollado Por:______________Tec. Jerffen Mendoza Regino.
-->
<article>
	<?php 
	/*Informacion principal de la pagina de Inicio*/
		if (isset($_GET['Inicio'])) 
			{
				include_once "Inicio.php";	
			}
	/*Informacion de los Autores del OVI*/
		elseif  (isset($_GET['Autores'])) 
			{ 
				include_once "Autores.php";
			}
	/*Informacion de los consectos de Conexion, Registro, Actualizacion, Eliminacion y Descarga.*/
		elseif  (isset($_GET['MySQL']) || isset($_GET['Php']) || isset($_GET['Html']) || isset($_GET['Css']) || isset($_GET['JavaScript']) || isset($_GET['Sublime']) || isset($_GET['Servidor']) || isset($_GET['Navegador'])) 
			{
				include_once "Lecturas.php";
			}
	/*Informacion de las explicaciones.*/
		elseif  (isset($_GET['Conectar']) || isset($_GET['Registrar']) || isset($_GET['Actualizar']) || isset($_GET['Eliminar']) || isset($_GET['Consultar'])) 
			{
				include_once "Explicacion.php";
			}
	/*Informacion de las multimedia videos.*/
		elseif  (isset($_GET['Conectarmulti']) || isset($_GET['Registrarmulti']) || isset($_GET['Actualizarmulti']) || isset($_GET['Eliminarmulti']) || isset($_GET['Consultarmulti'])) 
			{
				include_once "Multimedia.php";
			}
	/*Informacion para descargar el ejercicio completo*/
		elseif  (isset($_GET['Preguntas']) || isset($_GET['Actividad']) || isset($_GET['Cargar'])) 
			{
				include_once "Actividad.php";
			}
	/*Informacion para descargar el ejercicio completo*/
		elseif  (isset($_GET['Descargarcomp'])) 
			{
				include_once "Descargar.php";
			}
	/*informacion que se mostrara en primer lugar*/
		else
			{
				/*Informacion principal de la pagina de Inicio*/
				include_once "Inicio.php";	
			}
	?>
</article>
<!--Ventanas Modal-->
<?php
/*Informacion Personal de Jerffen Mendoza*/
	include_once "Modal/Jerffen.php";
/*Informacion Personal de Nicolas Lopez*/
	include_once "Modal/Nicolas.php";
/*Informacion Personal de Olga L. Monroy*/
	include_once "Modal/Olga.php";
?>
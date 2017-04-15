<!--
	Desarrollado Por:______________Tec. Jerffen Mendoza Regino.
 -->
<!DOCTYPE html>
<html lang="es">
	<!-- Agrego el llamado al head del Aplicativo -->
	<?php
		include_once "Include/Head.php";
	?>
	<!-- Cuerpo del Aplicativo -->
	<body onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='.:Error:. '; return true;" >
		<section>
		<!-- Aside Borde Derecho de la Pagina -->
			<?php 
				include_once "Include/Aside.php";
			?>
		<!-- Encabezado de la pagina. -->
			<?php
				include_once "Include/Header.php";
			?>
		<!--Contenido del cuerpo de la Pagina -->
			<?php
				include_once "Include/Article.php";
			?>
		<!-- Contenido del Pie de Pagina -->
			<?php
				include_once "Include/Footer.php";
			 ?>
		<!-- Menu de la pagina. -->
			<?php
				include_once "Include/Nav.php";
			?>
		</section>
	</body>
</html>
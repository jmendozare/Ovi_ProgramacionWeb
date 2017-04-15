<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
<?php 
	include_once "Conexion.php"; // Conectamos la Base de Datos.

	// Capturamos la información enviadas en variables.
	$Id = ($_POST['id']); // Indicativo unico del Usuario
	$Nombres = ($_POST['nombre']); // Nombres del Usuario.
	$Apellidos = ($_POST['apellidos']); // Apellidos del Usuario.
	$Tipo = ($_POST['tip_documento']); // Tipo de Documento del Usuario.
	$Documento = ($_POST['num_documento']); // Numero de Documento del Usuario.
	$Sexo = ($_POST['Sexo']); // Sexo del Usuario

	if (($Nombres==" ") || ($Apellidos==" ")) 
		{
			header("location: Index.php?Actualizar=Error");
		}
	else
		{
			$Tabla="user"; //nombre de la tabla a la que se le registrara la informacion
			//Actualizar la informacion en la Base de Datos
			$Actualizar= mysql_query("UPDATE $Tabla 	SET nombres='$Nombres', 
															apellidos='$Apellidos',
															tip_documento='$Tipo', 
															num_documento='$Documento', 
															sexo='$Sexo'
														WHERE id=$Id");
			//Desconectar la Base de Datos
			$Desconectar= mysql_close();
			//Direccionamos al formulario de  Registro.
			header("location: Index.php?Actualizar=Actualizado");
		}
?>
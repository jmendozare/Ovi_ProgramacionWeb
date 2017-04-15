<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
<?php 
	include_once "Conexion.php"; // Conectamos la Base de Datos.

	// Capturamos la información enviadas en variables.
	$Id = ($_POST['id']); // Indicativo unico del Usuario

	if (($Id=="0") || ($Id=="")) 
		{
			header("location: Index.php?Eliminar=Error");
		}
	else
		{
			$Tabla="user"; //nombre de la tabla a la que se le registrara la informacion
			//Eliminar la informacion en la Base de Datos
			$Eliminar=mysql_query("DELETE FROM $Tabla WHERE id=$Id");
			//Desconectar la Base de Datos
			$Desconectar= mysql_close();
			//Direccionamos al formulario de  Registro.
			header("location: Index.php?Eliminar=Eliminado");
		}
?>
<!--
	Desarrollado Por:______________Tec. Jerffen Mendoza Regino.
 -->
<?php 
	include_once "Conexion.php"; // Conectamos la Base de Datos.

	// Capturamos la información enviadas en variables.
	$Nombres = ($_POST['nombre']); // Nombres del Usuario.
	$Apellidos = ($_POST['apellidos']); // Apellidos del Usuario.
	$Tipo = ($_POST['tip_documento']); // Tipo de Documento del Usuario.
	$Documento = ($_POST['num_documento']); // Numero de Documento del Usuario.
	$Sexo = ($_POST['Sexo']); // Sexo del Usuario

	if (($Nombres==" ") || ($Apellidos==" ")) 
		{
			header("location: Index.php?Registrar=Error");
		}
	else
		{
			$Tabla="user"; //nombre de la tabla a la que se le registrara la informacion
			//Registrar la informacion en la Base de Datos
			$Registrar= mysql_query("INSERT INTO $Tabla (nombres, apellidos, tip_documento, num_documento, sexo) VALUES ('$Nombres', '$Apellidos', '$Tipo', '$Documento', '$Sexo')") or die ("La Tabla no existe ".mysql_error());

			//Desconectar la Base de Datos
			$Desconectar= mysql_close();
			//Direccionamos al formulario de  Registro.
			header("location: Index.php?Registrar=Registrado");
		}
?>
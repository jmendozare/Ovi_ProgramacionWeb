<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
<?php 
	include_once "Conexion.php"; // Conectamos la Base de Datos.
	$Nombre="jerffen";//nombre a consultar en la base de datos
	$Consulta=mysql_query("SELECT * FROM user WHERE nombres LIKE '%$Nombre%' ORDER BY id desc limit 10")or die(mysql_error());
		while ($Registro=mysql_fetch_array($Consulta))
				{
					$Idu=utf8_encode($Registro ['id']);
					$Nombreu=utf8_encode($Registro ['nombres']);
					$Apellidosu=utf8_encode($Registro ['apellidos']);
					$Documentou=utf8_encode($Registro ['num_documento']);

					/*Mostramos la Informacion por pantalla*/
					echo '
						<table>
							<tr class="titulo">
								<td>#</td>
								<td>NOMBRES</td>
								<td>APELLIDOS</td>
								<td>N- DOCUMENTO</td>
								</tr>
							';
					echo '
							<tr class="trcuerpo">
								<td>'.$Idu.'</td>
								<td>'.$Nombreu.'</td>
								<td>'.$Apellidosu.'</td>
								<td>'.$Documentou.'</td>
								</tr>
							';
					echo '
						</table>
							';
				}
?>
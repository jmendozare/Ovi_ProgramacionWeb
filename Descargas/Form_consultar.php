<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
 <table class="tableform">
	<form action="?Consultar" method="post" accept-charset="utf-8">
		<tr>
			<td colspan="3">
				<h2>. : Formulario de Consulta : .</h2><br>
			</td>
		</tr>
		<tr>
			<td width="180px" colspan="2">
				<b>Nombre a Consultar :</b>
			</td>
			<td>
				<input type="search" name="nombre" placeholder="Nombre a Consultar" title="Nombre del Usuario a  Consultar." class="input_search" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="20" minlength="6" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputsearch(this);" autocomplete="off" required/>
				<input type="image" src="Buscar.png" alt="Buscar" title="Buscar Registro a Elininár." class="buscar">
			</td>
		</tr>
	</form>
</table>
<?php 
	if (isset($_POST['nombre'])) 
		{
			echo '
					<br>
					<table class="tablacons">
						<tr class="trtitulo">
							<td width="40px">
								#
							</td>
							<td width="220px">
								NOMBRES
							</td>
							<td width="220px">
								APELLIDOS
							</td>
							<td>
								N- DOCUMENTO
							</td>
						</tr>
				';
			$Nombre=$_POST['nombre'];
				include_once "Conexion.php";
				$Consulta=mysql_query("SELECT * FROM user WHERE nombres LIKE '%$Nombre%' ORDER BY id desc limit 10")or die(mysql_error());
					while ($Registro=mysql_fetch_array($Consulta))
						{
							$Idu=utf8_encode($Registro ['id']);
							$Nombreu=utf8_encode($Registro ['nombres']);
							$Apellidosu=utf8_encode($Registro ['apellidos']);
							$Documentou=utf8_encode($Registro ['num_documento']);

							echo '
										<tr class="trcuerpo">
												<td>'.$Idu.'</td>
												<td>'.$Nombreu.'</td>
												<td>'.$Apellidosu.'</td>
												<td>'.$Documentou.'</td>
											</tr>
									';
						}
						if (isset($Idu)) {}
						else{
							echo '
											<tr class="trcuerpo">
												<td colspan="4">
													. : No se Encontré Ningún Registro : . 
												</td>
											</tr>
										';
						}
			echo "</table>";
		}
	else
		{ ?>
			<br>
			<table class="tablacons">
				<tr class="trtitulo">
					<td width="40px">
						#
					</td>
					<td width="220px">
						NOMBRES
					</td>
					<td width="220px">
						APELLIDOS
					</td>
					<td>
						N- DOCUMENTO
					</td>
				</tr>
				<tr class="trcuerpo">
					<td colspan="4">
						. : No se Encontré Ningún Registro : . 
					</td>
				</tr>
			</table>
		<?php }
?>

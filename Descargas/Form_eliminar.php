<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
 <table class="tableform">
	<form action="?Eliminar" method="post" accept-charset="utf-8">
		<tr>
			<td colspan="3">
				<h2>. : Formulario de Eliminación : .</h2><br>
			</td>
		</tr>
		<tr>
			<td width="180px" colspan="2">
				<b>Documento a Consultar :</b>
			</td>
			<td>
				<input type="search" name="documento" placeholder="Numero de Documento a Eliminar" title="Numero de Documento del Usuario a Eliminar." class="input_search" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="10" minlength="6" onkeypress="Spaces(this); return Validar(event,'Numeros');" onblur="Inputsearch(this);" autocomplete="off" required/>
				<input type="image" src="Buscar.png" alt="Buscar" title="Buscar Registro a Elininár." class="buscar">
			</td>
		</tr>
	</form>
	<?php 
		if (isset($_POST['documento'])) 
			{ 
				$Documento=$_POST['documento'];
				include_once "Conexion.php";
				$Consulta=mysql_query("SELECT * FROM user WHERE num_documento=$Documento")or die(mysql_error());
					while ($Registro=mysql_fetch_array($Consulta))
						{
							$Idu=utf8_encode($Registro ['id']);
							$Nombreu=utf8_encode($Registro ['nombres']);
							$Apellidosu=utf8_encode($Registro ['apellidos']);
							$Tipou=utf8_encode($Registro ['tip_documento']);
							$Documentou=utf8_encode($Registro ['num_documento']);
							$Sexou=utf8_encode($Registro ['sexo']);
						}
				if (isset($Idu)) 
					{ ?>
						<form action="Eliminar.php" method="post" accept-charset="utf-8">
							<tr>
								<td width="180px">
									<b>Nombres</b>
								</td>
								<td width="20px"><b>:</b></td>
								<td>
									<input type="hidden" name="id" value="<?php echo "$Idu"; ?>">
									<input type="text" name="nombre" value="<?php echo "$Nombreu"; ?>" placeholder="Nombres Completos" title="Nombres Completos del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="25" minlength="3" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputext(this);" autocomplete="off" disabled required/>
								</td>
							</tr>
								<tr>
								<td>
									<b>Apellidos</b>
								</td>
								<td><b>:</b></td>
								<td>
									<input type="text" name="apellidos" value="<?php echo "$Apellidosu"; ?>" placeholder="Apellidos Completos" title="Apellidos Completos del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="50" minlength="4" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputext(this);" autocomplete="off" disabled required/>
								</td>
							</tr>
								<tr>
								<td>
									<b>Tipo Documento</b>
								</td>
								<td><b>:</b></td>
								<td>
									<?php
										if ($Tipou=="Ti") 
											{ ?>
											 	<input type="radio" name="tip_documento" value="Ti" title="Tarjeta de Identidad." checked disabled required/>&nbsp;Ti.&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" name="tip_documento" value="Cc" title="Cedula de ciudadanía." disabled required/>&nbsp;Cc.&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" name="tip_documento" value="Ce" title="Cedula de extranjero." disabled required/>&nbsp;Ce.
											<?php }
										elseif ($Tipou=="Cc") 
											{ ?>
											 	<input type="radio" name="tip_documento" value="Ti" title="Tarjeta de Identidad." disabled required/>&nbsp;Ti.&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" name="tip_documento" value="Cc" title="Cedula de ciudadanía." checked disabled required/>&nbsp;Cc.&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" name="tip_documento" value="Ce" title="Cedula de extranjero." disabled required/>&nbsp;Ce.
											<?php }
										elseif ($Tipou=="Ce")
											{ ?>
											 	<input type="radio" name="tip_documento" value="Ti" title="Tarjeta de Identidad." disabled required/>&nbsp;Ti.&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" name="tip_documento" value="Cc" title="Cedula de ciudadanía." disabled required/>&nbsp;Cc.&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" name="tip_documento" value="Ce" title="Cedula de extranjero." checked disabled required/>&nbsp;Ce.
											<?php }
									?>
								</td>
							</tr>
								<tr>
								<td>
									<b>Numero Documento</b>
								</td>
								<td><b>:</b></td>
								<td>
									<input type="text" name="num_documento" value="<?php echo "$Documentou"; ?>" placeholder="Numero de Documento" title="Numero de Documento del Usuario." class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="10" minlength="6" onkeypress="Spaces(this); return Validar(event,'Numeros');" onblur="Inputext(this);" autocomplete="off" disabled required/>
								</td>
							</tr>
							<tr>
								<td>
									<b>Sexo</b>
								</td>
								<td><b>:</b></td>
								<td>
									<?php
										if ($Sexou=="Femenino") 
											{ ?>
											 	<input type="radio" name="Sexo" value="Femenino" title="Sexo Femenino." checked disabled required/>&nbsp;Femenino.&nbsp;&nbsp;
												<input type="radio" name="Sexo" value="Masculino" title="Sexo Masculino." disabled required/>&nbsp;Masculino.&nbsp;&nbsp;
												<input type="radio" name="Sexo" value="Otro" title="Comunidad LGBTI." disabled required/>&nbsp;Otro.
											<?php }
										elseif ($Sexou=="Masculino") 
											{ ?>
											 	<input type="radio" name="Sexo" value="Femenino" title="Sexo Femenino."  disabled required/>&nbsp;Femenino.&nbsp;&nbsp;
												<input type="radio" name="Sexo" value="Masculino" title="Sexo Masculino." checked disabled required/>&nbsp;Masculino.&nbsp;&nbsp;
												<input type="radio" name="Sexo" value="Otro" title="Comunidad LGBTI." disabled required/>&nbsp;Otro.
											<?php }
										elseif ($Sexou=="Otro")
											{ ?>
											 	<input type="radio" name="Sexo" value="Femenino" title="Sexo Femenino."  disabled required/>&nbsp;Femenino.&nbsp;&nbsp;
												<input type="radio" name="Sexo" value="Masculino" title="Sexo Masculino." disabled required/>&nbsp;Masculino.&nbsp;&nbsp;
												<input type="radio" name="Sexo" value="Otro" title="Comunidad LGBTI." checked disabled required/>&nbsp;Otro.
											<?php }
									?>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<center>
										<br><input type="submit" name="Eliminar" value="Eliminar" class="submit" title="Eliminar Informacion">
									</center>
								</td>
							</tr>
						</form>
					<?php }
				else 
					{ ?>
						<tr>
							<td width="180px">
								<b>Nombres</b>
							</td>
							<td width="20px"><b>:</b></td>
							<td>
								<input type="text" name="nombre" placeholder="Nombres Completos" title="Nombres Completos del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="25" minlength="3" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputext(this);" disabled autocomplete="off" required/>
							</td>
						</tr>
						<tr>
							<td>
								<b>Apellidos</b>
							</td>
							<td><b>:</b></td>
							<td>
								<input type="text" name="apellidos" placeholder="Apellidos Completos" title="Apellidos Completos del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="50" minlength="4" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputext(this);" autocomplete="off" disabled required/>
							</td>
						</tr>
						<tr>
							<td>
								<b>Tipo Documento</b>
							</td>
							<td><b>:</b></td>
							<td>
								<input type="radio" name="tip_documento" value="Ti" title="Tarjeta de Identidad." disabled required/>&nbsp;Ti.&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="tip_documento" value="Cc" title="Cedula de ciudadanía." disabled required/>&nbsp;Cc.&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="tip_documento" value="Ce" title="Cedula de extranjero." disabled required/>&nbsp;Ce.
							</td>
						</tr>
						<tr>
							<td>
								<b>Numero Documento</b>
							</td>
							<td><b>:</b></td>
							<td>
								<input type="text" name="num_documento" placeholder="Numero de Documento" title="Numero de Documento del Usuario." class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="10" minlength="6" onkeypress="Spaces(this); return Validar(event,'Numeros');" onblur="Inputext(this);" disabled autocomplete="off" required/>
							</td>
						</tr>
						<tr>
							<td>
								<b>Sexo</b>
							</td>
							<td><b>:</b></td>
							<td>
								<input type="radio" name="Sexo" value="Femenino" title="Sexo Femenino." disabled required/>&nbsp;Femenino.&nbsp;&nbsp;
								<input type="radio" name="Sexo" value="Masculino" title="Sexo Masculino." disabled required/>&nbsp;Masculino.&nbsp;&nbsp;
								<input type="radio" name="Sexo" value="Otro" title="Comunidad LGBTI." disabled required/>&nbsp;Otro.
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<center>
									<div class="Exit">
										<img src="Mal.png" class="alert_img">
										<span class="alert_text">El Usuario No Se Encuentra Registrado.</span>
									</div>
								</center>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<center>
									<br><input type="submit" name="Eliminar" value="Eliminar" class="submit" title="Eliminar Informacion" disabled>
								</center>
							</td>
						</tr>
					<?php }
			}
		else
			{ ?>
				<tr>
					<td width="180px">
						<b>Nombres</b>
					</td>
					<td width="20px"><b>:</b></td>
					<td>
						<input type="text" name="nombre" placeholder="Nombres Completos" title="Nombres Completos del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="25" minlength="3" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputext(this);" autocomplete="off" disabled required/>
					</td>
				</tr>
					<tr>
					<td>
						<b>Apellidos</b>
					</td>
					<td><b>:</b></td>
					<td>
						<input type="text" name="apellidos" placeholder="Apellidos Completos" title="Apellidos Completos del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="50" minlength="4" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputext(this);" autocomplete="off" disabled required/>
					</td>
				</tr>
					<tr>
					<td>
						<b>Tipo Documento</b>
					</td>
					<td><b>:</b></td>
					<td>
						<input type="radio" name="tip_documento" value="Ti" title="Tarjeta de Identidad." disabled required/>&nbsp;Ti.&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="tip_documento" value="Cc" title="Cedula de ciudadanía." disabled required/>&nbsp;Cc.&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="tip_documento" value="Ce" title="Cedula de extranjero." disabled required/>&nbsp;Ce.
					</td>
				</tr>
					<tr>
					<td>
						<b>Numero Documento</b>
					</td>
					<td><b>:</b></td>
					<td>
						<input type="text" name="num_documento" placeholder="Numero de Documento" title="Numero de Documento del Usuario." class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="10" minlength="6" onkeypress="Spaces(this); return Validar(event,'Numeros');" onblur="Inputext(this);" autocomplete="off" disabled required/>
					</td>
				</tr>
				<tr>
					<td>
						<b>Sexo</b>
					</td>
					<td><b>:</b></td>
					<td>
						<input type="radio" name="Sexo" value="Femenino" title="Sexo Femenino." disabled required/>&nbsp;Femenino.&nbsp;&nbsp;
						<input type="radio" name="Sexo" value="Masculino" title="Sexo Masculino." disabled required/>&nbsp;Masculino.&nbsp;&nbsp;
						<input type="radio" name="Sexo" value="Otro" title="Comunidad LGBTI." disabled required/>&nbsp;Otro.
					</td>
				</tr>
				<?php 
					if (isset($_GET['Eliminar']))
						{
							$Eliminar=$_GET['Eliminar'];
							if ($Eliminar=="Eliminado") 
								{ ?>
									<tr>
										<td colspan="3">
											<center>
												<div class="alert">
													<img src="Bien.png" class="alert_img">
													<span class="alert_text">Usuario Eliminado Exitosamente.</span>
												</div>
											</center>
										</td>
									</tr>
								<?php }
							else if ($Eliminar=="Error") 
								{ ?>
									<tr>
										<td colspan="3">
											<center>
												<div class="alerto">
													<img src="Mal.png" class="alert_img">
													<span class="alert_text">Error al Eliminar al Usuario</span>
												</div>
											</center>
										</td>
									</tr>
								<?php }
						}
				?>
				<tr>
					<td colspan="3">
						<center>
							<br><input type="submit" name="Eliminar" value="Eliminar" class="submit" title="Eliminar Informacion" disabled>
						</center>
					</td>
				</tr>
			<?php }
	?>
</table>
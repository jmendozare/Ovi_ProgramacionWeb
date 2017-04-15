<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
<form action="Registrar.php" method="post" accept-charset="utf-8">
	<table class="tableform">
		<tr>
			<td colspan="3">
				<h2>. : Formulario de Registro : .</h2><br>
			</td>
		</tr>
		<tr>
			<td width="180px">
				<b>Nombres</b>
			</td>
			<td width="20px"><b>:</b></td>
			<td>
				<input type="text" name="nombre" placeholder="Nombres Completos" title="Nombres Completos del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="25" minlength="3" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputext(this);" autocomplete="off" required/>
			</td>
		</tr>
		<tr>
			<td>
				<b>Apellidos</b>
			</td>
			<td><b>:</b></td>
			<td>
				<input type="text" name="apellidos" placeholder="Apellidos Completos" title="Apellidos Completos del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="50" minlength="4" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputext(this);" autocomplete="off" required/>
			</td>
		</tr>
		<tr>
			<td>
				<b>Tipo Documento</b>
			</td>
			<td><b>:</b></td>
			<td>
				<input type="radio" name="tip_documento" value="Ti" title="Tarjeta de Identidad." required/>&nbsp;Ti.&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="tip_documento" value="Cc" title="Cedula de ciudadanía." required/>&nbsp;Cc.&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="tip_documento" value="Ce" title="Cedula de extranjero." required/>&nbsp;Ce.
			</td>
		</tr>
		<tr>
			<td>
				<b>Numero Documento</b>
			</td>
			<td><b>:</b></td>
			<td>
				<input type="text" name="num_documento" placeholder="Numero de Documento" title="Numero de Documento del Usuario." class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="10" minlength="6" onkeypress="Spaces(this); return Validar(event,'Numeros');" onblur="Inputext(this);" autocomplete="off" required/>
			</td>
		</tr>
		<tr>
			<td>
				<b>Sexo</b>
			</td>
			<td><b>:</b></td>
			<td>
				<input type="radio" name="Sexo" value="Femenino" title="Sexo Femenino." required/>&nbsp;Femenino.&nbsp;&nbsp;
				<input type="radio" name="Sexo" value="Masculino" title="Sexo Masculino." required/>&nbsp;Masculino.&nbsp;&nbsp;
				<input type="radio" name="Sexo" value="Otro" title="Comunidad LGBTI." required/>&nbsp;Otro.
			</td>
		</tr>
		<?php 
			if (isset($_GET['Registrar']))
				{
					$Registrar=$_GET['Registrar'];
					if ($Registrar=="Registrado") 
						{ ?>
							<tr>
								<td colspan="3">
									<center>
										<div class="alert">
											<img src="Bien.png" class="alert_img">
											<span class="alert_text">Usuario Registrado Exitosamente.</span>
										</div>
									</center>
								</td>
							</tr>
						<?php }
					else if ($Registrar=="Error") 
						{ ?>
							<tr>
								<td colspan="3">
									<center>
										<div class="alerto">
											<img src="Mal.png" class="alert_img">
											<span class="alert_text">Error al registar al Usuario</span>
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
					<br><input type="submit" name="Registrar" value="Registrar" class="submit" title="Registrar Informacion">
				</center>
			</td>
		</tr>
	</table>
</form>
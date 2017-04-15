<?php 
	if (isset($_GET['Preguntas']))  
		{ ?>
			<div class="preg_left"><br>
				<img src="Img/Html5.png" title="Html" class="preg_img"><br>
				<img src="Img/Php.png" title="Php" class="preg_img"><br>
				<img src="Img/Css.jpg" title="Css" class="preg_img">
			</div>
			<div class="preg_center">
				<h1 class="tit_h1"><br>
					Que Has Aprendido “ QUIZ ”
				</h1><br>
				<b>Las siguientes preguntas son estilo icfes, Que costa de una pregunta y cuatro opciones de respuesta con una única respuesta correcta. El presente Quiz costa con 20 preguntas, y una puntuación máxima de 100 puntos. "Suerte Programador"</b> <br><br>
				<?php 
					if (isset($_POST['1'])) 
						{	
							$Putos=$_POST['1']+$_POST['2']+$_POST['3']+$_POST['4']+$_POST['5']+$_POST['6']+$_POST['7']+$_POST['8']+$_POST['9']+$_POST['10']+$_POST['11']+$_POST['12']+$_POST['13']+$_POST['14']+$_POST['15']+$_POST['16']+$_POST['17']+$_POST['18']+$_POST['19']+$_POST['20'];
							$Total=$Putos*5;

							if ($Total <= 30) 
								{
									echo "<center class='red'><br><b class='total'>. : $Total Putos : .</b><br><br>Ho que Mal te Fue. <br>Te toca repasar muchísimo más.<br><br></center>";
									echo '<br><br><center><a href="?Preguntas" class="volver">&nbsp;&nbsp;&nbsp;Volverlo a Intentar&nbsp;&nbsp;&nbsp;</a></cneter>';
								}
							elseif (($Total > 30) and ($Total <= 60)) 
								{
									echo "<center class='yellow'><br><b class='total'>. : $Total Putos : .</b><br><br>Huy Repasa un Poco. <br>Sigue repasando un poco.<br><br></center>";
									echo '<br><br><center><a href="?Preguntas" class="volver">&nbsp;&nbsp;&nbsp;Volverlo a Intentar&nbsp;&nbsp;&nbsp;</a></cneter>';
								}
							elseif (($Total > 60) and ($Total <= 90)) 
								{
									echo "<center class='blue'><br><b class='total'>. : $Total Putos : .</b><br><br>Huy que nota Buen Trabajo. <br>Repasa un poco más en busca de la Excelencia.<br><br></center>";
									echo '<br><br><center><a href="?Preguntas" class="volver">&nbsp;&nbsp;&nbsp;Volverlo a Intentar&nbsp;&nbsp;&nbsp;</a></cneter>';
								}
							elseif ($Total > 90) 
								{
									echo "<center class='green'><br><b class='total'>. : $Total Putos : .</b><br><br>Huy excelente.  <br>Eres un Experto Programador.<br><br></center>";
									echo '<br><br><center><a href="?Preguntas" class="volver">&nbsp;&nbsp;&nbsp;Volverlo a Intentar&nbsp;&nbsp;&nbsp;</a></cneter>';			
								}
						}
					else
						{ ?>
							<form action="?Preguntas" method="post" accept-charset="utf-8">
								<table width="100%">
									<tr>
										<td colspan="3">
											&nbsp;&nbsp;<b>1. Cuál es la secuencia SQL para realizar una Consulta.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="1" value="0" required><br>
											<input type="radio" name="1" value="0" required><br>
											<input type="radio" name="1" value="0" required><br>
											<input type="radio" name="1" value="1" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Where.<br>
											&nbsp;&nbsp;Seletc.<br>
											&nbsp;&nbsp;Drop.<br>
											&nbsp;&nbsp;Select.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>2. Que es un servidor Web. </b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="2" value="0" required><br>
											<input type="radio" name="2" value="1" required><br>
											<input type="radio" name="2" value="0" required><br>
											<input type="radio" name="2" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Un navegador Web.<br>
											&nbsp;&nbsp;Un intérprete de código.<br>
											&nbsp;&nbsp;Un Sistema Operativo Web.<br>
											&nbsp;&nbsp;Una agencia de servicio Web.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>3. Se puede guardar o almacenar información de una página Php en una BD MySQL.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="3" value="0" required><br>
											<input type="radio" name="3" value="1" required><br>
											<input type="radio" name="3" value="0" required><br>
											<input type="radio" name="3" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;En algunos caso.<br>
											&nbsp;&nbsp;Si.<br>
											&nbsp;&nbsp;No.<br>
											&nbsp;&nbsp;Todas las Anteriores.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>4. Cuál es la secuencia SQL para realizar un Registro.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="4" value="0" required><br>
											<input type="radio" name="4" value="0" required><br>
											<input type="radio" name="4" value="1" required><br>
											<input type="radio" name="4" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Or die.<br>
											&nbsp;&nbsp;Values.<br>
											&nbsp;&nbsp;Insert into.<br>
											&nbsp;&nbsp;Delete.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>5. Cuál es la secuencia SQL para realizar una eliminación. </b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="5" value="0" required><br>
											<input type="radio" name="5" value="1" required><br>
											<input type="radio" name="5" value="0" required><br>
											<input type="radio" name="5" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Trúcate.<br>
											&nbsp;&nbsp;Delete.<br>
											&nbsp;&nbsp;Date.<br>
											&nbsp;&nbsp;Delety.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>6. Como se escribe la secuencia SQL para realizar un Registro. </b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="6" value="0" required><br>
											<input type="radio" name="6" value="0" required><br>
											<input type="radio" name="6" value="0" required><br>
											<input type="radio" name="6" value="1" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Intro insert.<br>
											&nbsp;&nbsp;Intro_insert.<br>
											&nbsp;&nbsp;Insert_intro.<br>
											&nbsp;&nbsp;Insert intro.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>7. Cuál es la secuencia SQL para realizar una Actualización. </b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="7" value="1" required><br>
											<input type="radio" name="7" value="0" required><br>
											<input type="radio" name="7" value="0" required><br>
											<input type="radio" name="7" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Uptade.<br>
											&nbsp;&nbsp;Setup.<br>
											&nbsp;&nbsp;Alter.<br>
											&nbsp;&nbsp;Into.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>8. Como se escribe la secuencia SQL para realizar una Conexión entre Php y MySQL.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="8" value="0" required><br>
											<input type="radio" name="8" value="1" required><br>
											<input type="radio" name="8" value="0" required><br>
											<input type="radio" name="8" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Mysqlconnect ( ).<br>
											&nbsp;&nbsp;Mysql_connect ( ).<br>
											&nbsp;&nbsp;Mysql_connect_bd ( ).<br>
											&nbsp;&nbsp;Mysql-connect ( ).
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>9. Como se Representa una Variable Php.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="9" value="0" required><br>
											<input type="radio" name="9" value="0" required><br>
											<input type="radio" name="9" value="0" required><br>
											<input type="radio" name="9" value="1" required><br>
										</td>
										<td>
											&nbsp;&nbsp;?variable;.<br>
											&nbsp;&nbsp;&amp;variable;.<br>
											&nbsp;&nbsp;#variable;.<br>
											&nbsp;&nbsp;$variable;.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>10. Que es Sublime Text.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="10" value="0" required><br>
											<input type="radio" name="10" value="0" required><br>
											<input type="radio" name="10" value="1" required><br>
											<input type="radio" name="10" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Una versión de Microsoft Word.<br>
											&nbsp;&nbsp;La actualización del bloc de notas.<br>
											&nbsp;&nbsp;Un Editor de Texto o Código<br>
											&nbsp;&nbsp;Un intérprete de Código.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>11. Como se escribe la secuencia SQL para realizar una Actualización.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="11" value="1" required><br>
											<input type="radio" name="11" value="0" required><br>
											<input type="radio" name="11" value="0" required><br>
											<input type="radio" name="11" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Update.<br>
											&nbsp;&nbsp;Upintro.<br>
											&nbsp;&nbsp;Up_date<br>
											&nbsp;&nbsp;Up_intro.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>12. Cuál es la secuencia SQL para seleccionar la Base de Datos.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="12" value="0" required><br>
											<input type="radio" name="12" value="0" required><br>
											<input type="radio" name="12" value="0" required><br>
											<input type="radio" name="12" value="1" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Mysql-connect-bd ( ).<br>
											&nbsp;&nbsp;Mysql_connect ( ).<br>
											&nbsp;&nbsp;Mysql-connect->bd ( ).<br>
											&nbsp;&nbsp;Mysql_connect_bd ( ).
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>13. Como se escribe la secuencia SQL para realizar una Consulta.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="13" value="0" required><br>
											<input type="radio" name="13" value="1" required><br>
											<input type="radio" name="13" value="0" required><br>
											<input type="radio" name="13" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Selecte *.<br>
											&nbsp;&nbsp;Select *.<br>
											&nbsp;&nbsp;Silecte *.<br>
											&nbsp;&nbsp;Silect *.
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>14. Que es Php.</b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="14" value="0" required><br>
											<input type="radio" name="14" value="0" required><br>
											<input type="radio" name="14" value="1" required><br>
											<input type="radio" name="14" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Un intérprete de código.<br>
											&nbsp;&nbsp;Un editor de Código.<br>
											&nbsp;&nbsp;Un leguaje de Programación.<br>
											&nbsp;&nbsp;Un programa desarrollado en Html. 
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>15. Cuál es la secuencia SQL para realizar la Conexión de Php  a MySQL. </b>
										</td>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="15" value="0" required><br>
											<input type="radio" name="15" value="0" required><br>
											<input type="radio" name="15" value="0" required><br>
											<input type="radio" name="15" value="1" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Mysqlconnect ( ).<br>
											&nbsp;&nbsp;Mysqlconnectbd ( ).<br>
											&nbsp;&nbsp;Mysql_connect_bd ( ).<br>
											&nbsp;&nbsp;Mysql_connect ( ). 
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>16. Que significa DB.</b>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="16" value="1" required><br>
											<input type="radio" name="16" value="0" required><br>
											<input type="radio" name="16" value="0" required><br>
											<input type="radio" name="16" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Data Base “Base de datos”.<br>
											&nbsp;&nbsp;Data Boy “Base de Niños”.<br>
											&nbsp;&nbsp;Data Bus “Base de Bus”.<br>
											&nbsp;&nbsp;Data Bay “base de Bahia”. 
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>17. Que es MySQL.</b>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="17" value="0" required><br>
											<input type="radio" name="17" value="0" required><br>
											<input type="radio" name="17" value="0" required><br>
											<input type="radio" name="17" value="1" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Un programa desarrollado en Php.<br>
											&nbsp;&nbsp;Una base de datos.<br>
											&nbsp;&nbsp;Un programa de Internet.<br>
											&nbsp;&nbsp;Un sistema de gestión de base de datos. 
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>18. Para expresar código Php es necesario incrustarlo en código. </b>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="18" value="0" required><br>
											<input type="radio" name="18" value="0" required><br>
											<input type="radio" name="18" value="1" required><br>
											<input type="radio" name="18" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Xml.<br>
											&nbsp;&nbsp;Htmx.<br>
											&nbsp;&nbsp;Html.<br>
											&nbsp;&nbsp;Xhtml. 
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>19. Como se escribe la secuencia SQL para realizar una Eliminación.</b>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="19" value="1" required><br>
											<input type="radio" name="19" value="0" required><br>
											<input type="radio" name="19" value="0" required><br>
											<input type="radio" name="19" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;Delete.<br>
											&nbsp;&nbsp;Delety.<br>
											&nbsp;&nbsp;Trúcate.<br>
											&nbsp;&nbsp;Trucaty. 
										</td>
									</tr>
									<tr>
										<td colspan="3"><br>
											&nbsp;&nbsp;<b>20. Se puede presentar intercambios de información de Php a MySQL.</b>
									</tr>
									<tr>
										<td width="40px" align="center">
											<b>&nbsp;&nbsp;a.</b><br>
											<b>&nbsp;&nbsp;b.</b><br>
											<b>&nbsp;&nbsp;c.</b><br>
											<b>&nbsp;&nbsp;d.</b>
										</td>
										<td width="15px" align="center">
											<input type="radio" name="20" value="0" required><br>
											<input type="radio" name="20" value="1" required><br>
											<input type="radio" name="20" value="0" required><br>
											<input type="radio" name="20" value="0" required><br>
										</td>
										<td>
											&nbsp;&nbsp;No.<br>
											&nbsp;&nbsp;Si.<br>
											&nbsp;&nbsp;En algunos caso.<br>
											&nbsp;&nbsp;Todas las Anteriores. 
										</td>
									</tr>
									<tr><td><br></td></tr>
									<tr>
										<td colspan="3" align="center">
											<input type="reset" name="Borrar" value="Borrar" title="Borrar Respuestas." class="botton_preg">
											<input type="submit" name="Enviar" value="Enviar" title="Enviar Respuestas." class="botton_preg">
										</td>
									</tr>
									<tr><td><br></td></tr>
								</table>
							</form>
						<?php }
				?>
			</div>
			<div class="preg_rigth"><br>
				<img src="Img/Javascript.png" title="Javascript" class="preg_img"><br><br><br>
				<img src="Img/MySQL.png" title="MySQL" class="preg_img"><br><br><br>
				<img src="Img/Xampp.png" title="Xampp" class="preg_img">
			</div>
		<?php }
	elseif (isset($_GET['Actividad'])) 
		{ ?>
			<div class="preg_left"><br>
				<img src="Img/Html5.png" title="Html" class="preg_img"><br>
				<img src="Img/Php.png" title="Php" class="preg_img"><br>
				<img src="Img/Css.jpg" title="Css" class="preg_img">
			</div>
			<div class="preg_center">
				<h1 class="tit_h1"><br>
					Que Has Aprendido “ ACTIVIDAD ”
				</h1><br>
				<b>Buen día, la siguiente actividad te pondrá a prueba ya que requerirás de todo el conocimiento correspondiente a la Conexión, Registro, Actualización, Eliminación y Consulta. Vinculando una base de datos MySQL y el lenguaje de Programación Php. “ Bueno manos a la Obra “ </b><br>
				<br>
				<b>Actividad a Desarrollar. </b><br><br>
				<table width="100%">
					<tr>
						<td width="40px" align="center">
							<b>1.</b>
						</td>
						<td>
							Crear una base de datos llamada “ <b>prueba_ovi</b> ”.
						</td>
					</tr>
					<tr>
						<td width="40px" align="center">
							<b>2.</b>
						</td>
						<td>
							Crear los campos “ <b>Id, Nombres, Apellidos, Documento, Sexo, Teléfono, Dirección </b> ” en la tabla anteriormente creada.
						</td>
					</tr>
					<tr>
						<td width="40px" align="center">
							<b>3.</b>
						</td>
						<td>
							Crear los Formularios necesarios que me permitan Registrar, Actualizar, Eliminar, y Consultar la información almacenada de los campos “ <b>Id, Nombres, Apellidos, Documento, Sexo, Teléfono, Dirección</b> ”. 
						</td>
					</tr>
					<tr>
						<td width="40px" align="center">
							<b>4.</b>
						</td>
						<td>
							Crear archivo de conexión llamado “ <b>Conexión.php</b> “.
						</td>
					</tr>
					<tr>
						<td width="40px" align="center">
							<b>5.</b>
						</td>
						<td>
							Crear el archivo de Registro llamado “ <b>Registrar.php</b> “.
						</td>
					</tr>
					<tr>
						<td width="40px" align="center">
							<b>6.</b>
						</td>
						<td>
							Crear el archivo de Actualización llamado “ <b>Actualizar.php</b> “.
						</td>
					</tr>
					<tr>
						<td width="40px" align="center">
							<b>7.</b>
						</td>
						<td>
							Crear el archivo de Eliminación llamado “ <b>Eliminar.php</b> “.
						</td>
					</tr>
					<tr>
						<td width="40px" align="center">
							<b>8.</b>
						</td>
						<td>
							Crear el archivo de Consulta llamado “ <b> Consulta.php </b> “.
						</td>
					</tr>
				</table>	
				<br>
				<b>Para Descargar la actividad, hacer clip </b>
					<a href="Descargas/Actividad.pdf" download="Actividad.pdf" class="descarga" title="Descargar Archivo de Registró.">Aquí</a>
				<br><br>
				<b>Después de acabar con la actividad, Subir la carpeta con toda la información completa “Base de datos, formularios, y archivos”, y rellenar los campos obligatorios. “Éxito”.</b>
				<br><br><br>
				<center><a href="?Cargar" class="cargar">&nbsp;&nbsp;&nbsp;Cargar la Actividad &nbsp;&nbsp;</a></center>
				<br><br><br>
			</div>
			<div class="preg_rigth"><br>
				<img src="Img/Javascript.png" title="Javascript" class="preg_img"><br><br><br>
				<img src="Img/MySQL.png" title="MySQL" class="preg_img"><br><br><br>
				<img src="Img/Xampp.png" title="Xampp" class="preg_img">
			</div>
		<?php }
	elseif (isset($_GET['Cargar'])) 
		{ ?>
			<div class="preg_left"><br>
				<img src="Img/Html5.png" title="Html" class="preg_img"><br>
				<img src="Img/Php.png" title="Php" class="preg_img"><br>
				<img src="Img/Css.jpg" title="Css" class="preg_img">
			</div>
			<div class="preg_center">
				<h1 class="tit_h1"><br>
					Que Has Aprendido “ CARGAR ACTIVIDAD ”
				</h1><br>
				<b>Después de acabar con la actividad, Subir la carpeta con toda la información completa “Base de datos, formularios, y archivos”, y rellenar los campos obligatorios. “Éxito”.</b>
				<br><br>
				<script type="text/javascript">
	function Validar(Evento, Opcion) 
	    {
	      // Variables que definen los caracteres Opcion
	      var numeros = "0123456789";
	      var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	      var numeros_caracteres = numeros + caracteres;
	      var teclas_especiales = [8, 37, 39];
	      // Seleccionar los caracteres a partir del parámetro de la función
	        switch(Opcion) {
	          case 'Numeros':
	            Opcion = numeros;
	            break;
	          case 'Texto':
	            Opcion = caracteres;
	            break;
	          case 'Mixto':
	            Opcion = numeros_caracteres;
	            break;
	        }
	      // Obtener la tecla pulsada 
	      var evento = Evento || window.event;
	      var codigoCaracter = evento.charCode || evento.keyCode;
	      var caracter = String.fromCharCode(codigoCaracter);
	      // Comprobar si la tecla pulsada es alguna de las teclas especiales
	      var tecla_especial = false;
	      for(var i in teclas_especiales) {
	        if(codigoCaracter == teclas_especiales[i]) {
	          tecla_especial = true;
	          break;
	        }
	      }
	      // Comprobar si la tecla pulsada se encuentra en los caracteres Opcion
	      // o si es una tecla especial
	      return Opcion.indexOf(caracter) != -1 || tecla_especial;
	    }
</script>
<!--_________________________________________________________________________________________-->
<!-- Funcion para permitir ningun espacio al principio-->		
<script type="text/javascript">
	function Spaces(space)
	    {
	     	var mensaje = space.value;
	     	var posicion = mensaje.indexOf('');
	     	if (posicion == 0) 
	     	{
	     		if (mensaje==" ") 
	     		{
	     			space.value=space.value.replace(' ','');
	     		}
	     		else
	     		{
	     			space.value=space.value.replace('  ',' ');
	     		}
	     	}
	    }
</script>
<!-- Funcion para pasar todo el texto a mayuscula-->		
<script type="text/javascript">
	function Mayuscula(text)
	    {
	     	text.value=text.value.toUpperCase();
	    }
</script>
<!--Funcion para selecionar los campos del formulario-->
<script type="text/javascript">
//Seleccione de los campos//
	function Seleccionarall(campo) 
		{
			campo.select();
		}
</script>
<script type="text/javascript">
	function Inputext(inputext) 
	{
	    if ((inputext.value=="")||(inputext.value=="0")||(inputext.value==" ")||(inputext.value=="  "))
	    {
	        inputext.className='input_no';
	    }
	    else 
	    {
	        inputext.className='input_text';
	    }
	}
</script>
<!-- Funcion los mensajes de desconectado-->
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".alert").fadeOut(1000);
    },3500);
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".alerto").fadeOut(1000);
    },3500);
});
</script>
			<form action="?Cargar" method="post" accept-charset="utf-8">
				<table width="100%">
					<tr>
						<td colspan="3">
							<center>
								<h1 class="tit_h1">
									Formulario de Envió de la Actividad
								</h1><br>
							</center>
						</td>
					</tr>
					<tr>
						<td width="140px">
							<b>Nombre Completo</b>
						</td>
						<td width="20px"><b>:</b></td>
						<td>
							<input type="text" name="nombre" placeholder="Nombre Completo" title="Nombre Completo del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="50" minlength="3" onkeypress="Spaces(this); return Validar(event,'Texto');" onblur="Inputext(this);" autocomplete="off" required/>
						</td>
					</tr>
					<tr>
						<td>
							<b>Correo Electrónico</b>
						</td>
						<td><b>:</b></td>
						<td>
							<input type="email" name="email" placeholder="Dirección de Correo Electrónico" title="Dirección de Correo Electrónico del Usuario" class="input_text" onkeyup="Mayuscula(this);" onclick="Seleccionarall(this)" maxlength="70" minlength="3" onkeypress="Spaces(this);" onblur="Inputext(this);" autocomplete="off" required/>
						</td>
					</tr>
					<tr>
						<td>
							<b>Cargar Actividad</b> 
						</td>
						<td><b>:</b></td>
						<td>
							<input type="file" name="file" class="file" required>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<center><br>
								<input type="reset" name="Borrar" value="Borrar" title="Borrar Respuestas." class="botton_preg">
								<input type="submit" name="Enviar" value="Enviar" title="Enviar Respuestas." class="botton_preg">
							</center>
						</td>
					</tr>
				</table>
			</form>
			<?php 
				if (isset($_POST['nombre'])) 
				{
					$Nombrreusuario=$_POST['nombre'];
					if (($Nombrreusuario==" ") || ($Nombrreusuario=="  ")) 
						{ ?>
							<center><br><br>
								<div class="alerto">
									<img src="Img/Mal.png" class="alert_img">
									<span class="alert_text">Error al Cargar la Actividad al Servidor.</span>
								</div>
							</center>
						<?php }
					else
						{ ?>
							<center><br><br>
								<div class="alert">
									<img src="Img/Bien.png" class="alert_img">
									<span class="alert_text">Su Actividad se Cargo al Servidor. "Éxito"</span>
								</div>
							</center>
						<?php }
				}
			?>
				<br><br><br>
			</div>
			<div class="preg_rigth"><br>
				<img src="Img/Javascript.png" title="Javascript" class="preg_img"><br><br><br>
				<img src="Img/MySQL.png" title="MySQL" class="preg_img"><br><br><br>
				<img src="Img/Xampp.png" title="Xampp" class="preg_img">
			</div>
		<?php }
?>
<!--
	Desarrollado Por:______________Tec. Jerffen Mendoza Regino.
 -->
<footer>
	<span class="inf_footer"><br>
		&nbsp;&nbsp;
			<a href="https://www.facebook.com/UniversidadUNAD/" target="_blank" class="redtexto">
				<img src="Img/Facebook.png" alt="@UniversidadUNAD" title="@UniversidadUNAD" class="redsocial">
				@UniversidadUNAD
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="https://twitter.com/universidadunad?lang=es" target="_blank" class="redtexto">
				<img src="Img/Twitter.png" alt="@UniversidadUNAD" title="@UniversidadUNAD" class="redsocial">
				@UniversidadUNAD
			</a>
			<div class="contador">
			<br>
				<center title="Contador de visita">
					<?php 
					/*si existe cualcial seccion del aplicativo no se sumara la visita*/
						if (isset($_GET['Inicio']) || isset($_GET['Autores']) || isset($_GET['MySQL']) || isset($_GET['Php']) || isset($_GET['Html']) || isset($_GET['Css']) || isset($_GET['JavaScript']) || isset($_GET['Sublime']) || isset($_GET['Servidor']) || isset($_GET['Navegador']) || isset($_GET['Conectar']) || isset($_GET['Registrar']) || isset($_GET['Actualizar']) || isset($_GET['Eliminar']) || isset($_GET['Consultar']) || isset($_GET['Conectarmulti']) || isset($_GET['Registrarmulti']) || isset($_GET['Actualizarmulti']) || isset($_GET['Eliminarmulti']) || isset($_GET['Consultarmulti']) || isset($_GET['Preguntas']) || isset($_GET['Actividad']) || isset($_GET['Cargar']) || isset($_GET['Descargarcomp'])) 
							{
								$Archivo = fopen('Contador/Contador.txt','r');//se abre el archivo txt
									if (!$Archivo){echo "Error con el Contador";}
									else
										{
											$Contador = 0;
											while (!feof($Archivo)) //creamos un siclo repetirivo
												{
													$Contador++;//contador de la lineas
													$Linea = fgets($Archivo);//linea con que trabajar 
													$Segmento[$Contador] = explode ('/', $Linea);// segmento o espacio con el que se trabajara
													$Txtcontador = $Segmento[$Contador][0];//Nombres

													echo "<center class='text_contador'>";
													echo "$Txtcontador";
													echo "</center>";

													$Archivo++;
												}
											fclose($Archivo);
										}
							}
					/*si se ingresa por primera ves se suma mas uno al contador*/
						else
							{
								$Archivon = fopen('Contador/Contador.txt','r');//se abre el archivo txt
									if (!$Archivon){echo "Error con el Contador";}
									else
										{
											$Contadorn = 0;
											while (!feof($Archivon)) //creamos un siclo repetirivo
												{
													$Contadorn++;//contador de la lineas
													$Linean = fgets($Archivon);//linea con que trabajar 
													$Segmenton[$Contadorn] = explode ('/', $Linean);// segmento o espacio con el que se trabajara
													$Txtcontadorn = $Segmenton[$Contadorn][0];//Nombres
													$Mas=1;
													$Nuevocontador=($Txtcontadorn+$Mas);
													echo "<center class='text_contador'>";
													echo "$Nuevocontador";
													echo "</center>";

													$Borrar = fopen('Contador/Contador.txt','w');
													fwrite($Borrar, $Nuevocontador);
													fclose($Borrar);
													
													$Archivon++;
												}
											fclose($Archivon);
										}
							}
					?>
				</center>
			</div>
			<br><br>
		<center>
			&copy; 2017, Jerffen Mendoza Regino - Nicolas Lopez Villamil - Olga Lizeth Monroy Garcia<br>
		</center>
	</span>
</footer>
	

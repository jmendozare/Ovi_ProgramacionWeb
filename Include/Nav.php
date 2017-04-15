<!-- 
	Desarrollado Por:______________Tec. Jerffen Mendoza Regino.
-->
<?php 
	if (isset($_GET['Inicio'])) 
		{ ?> 
			<nav>
				<ul class="nav">
					<li><a href="?Inicio" title="Modulo Principal del OVI." class="active">Inicio<span class="flecha">&#9660</span></a></li>
					<li><a href="?MySQL" title="Modulo de Lecturas Relacionadas con Herramientas y Lenguaje de Programación.">Lecturas<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?MySQL' title="Información relacionada a base de datos MySQL. "><b>MySQL</b></a></li>
							<li><a href='?Php' title="Información relacionada con Php."><b>Php</b></a></li>
							<li><a href='?Html' title="Información relacionada con Html."><b>Html</b></a></li>
							<li><a href='?Css' title="Información relacionada con Css."><b>Css</b></a></li>
							<li><a href='?JavaScript' title="Información relacionada con JavaScript."><b>JavaScript</b></a></li>
							<li><a href='?Sublime' title="Información relacionada con el el editor de texto sublime text 3. "><b>Sublime Text 3</b></a></li>
							<li><a href='?Servidor' title="Información relacionada con el Servidor Web 'Xampp'."><b>Servidor Web</b></a></li>
							<li><a href='?Navegador' title="Información relacionada con el Navegador Web 'Google'."><b>Navegador Web</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectar" title="Modulo explicativo para la Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL">Explicación<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectar' title="Información como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrar' title="Información de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizar' title="Información de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminar' title="Información de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultar' title="Información de cócmo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectarmulti" title="Modulo con Videos Explicativos relacionados con Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL.">Multimedia<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectarmulti' title="Video de como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrarmulti' title="Video de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizarmulti' title="Video de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminarmulti' title="Video de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultarmulti' title="Video de cómo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Preguntas" title="Modulo con actividades para los visitantes.">Actividad<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Preguntas' title="Preguntas relacionadas con el Tema."><b>Preguntas</b></a></li>
							<li><a href='?Actividad' title="Actividad relacionada con el Tema."><b>Actividad</b></a></li>
							<li><a href='?Cargar' title="Cargar la Actividad Desarrollada."><b>Cargar Act.</b></a></li>
						</ul>
					</li>
					<li><a href="?Descargarcomp" title="Modulo para Descaragar el Paquete de la Actividad">Descargar<span class="flecha">&#9660</span></a></li>
					<li><a href="?Autores" title="Modulo con la información de los autores del OVI.">Autores<span class="flecha">&#9660</span></a></li>
				</ul>
			</nav>
		<?php }
	elseif  (isset($_GET['MySQL']) || isset($_GET['Php']) || isset($_GET['Html']) || isset($_GET['Css']) || isset($_GET['JavaScript']) || isset($_GET['Sublime']) || isset($_GET['Servidor']) || isset($_GET['Navegador'])) 
		{ ?> 
			<nav>
				<ul class="nav">
					<li><a href="?Inicio" title="Modulo Principal del OVI.">Inicio<span class="flecha">&#9660</span></a></li>
					<li><a href="?MySQL" title="Modulo de Lecturas Relacionadas con Herramientas y Lenguaje de Programación." class="active">Lecturas<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?MySQL' title="Información relacionada a base de datos MySQL. "><b>MySQL</b></a></li>
							<li><a href='?Php' title="Información relacionada con Php."><b>Php</b></a></li>
							<li><a href='?Html' title="Información relacionada con Html."><b>Html</b></a></li>
							<li><a href='?Css' title="Información relacionada con Css."><b>Css</b></a></li>
							<li><a href='?JavaScript' title="Información relacionada con JavaScript."><b>JavaScript</b></a></li>
							<li><a href='?Sublime' title="Información relacionada con el el editor de texto sublime text 3. "><b>Sublime Text 3</b></a></li>
							<li><a href='?Servidor' title="Información relacionada con el Servidor Web 'Xampp'."><b>Servidor Web</b></a></li>
							<li><a href='?Navegador' title="Información relacionada con el Navegador Web 'Google'."><b>Navegador Web</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectar" title="Modulo explicativo para la Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL">Explicación<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectar' title="Información como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrar' title="Información de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizar' title="Información de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminar' title="Información de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultar' title="Información de cócmo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectarmulti" title="Modulo con Videos Explicativos relacionados con Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL.">Multimedia<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectarmulti' title="Video de como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrarmulti' title="Video de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizarmulti' title="Video de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminarmulti' title="Video de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultarmulti' title="Video de cómo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Preguntas" title="Modulo con actividades para los visitantes.">Actividad<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Preguntas' title="Preguntas relacionadas con el Tema."><b>Preguntas</b></a></li>
							<li><a href='?Actividad' title="Actividad relacionada con el Tema."><b>Actividad</b></a></li>
							<li><a href='?Cargar' title="Cargar la Actividad Desarrollada."><b>Cargar Act.</b></a></li>
						</ul>
					</li>
					<li><a href="?Descargarcomp" title="Modulo para Descaragar el Paquete de la Actividad">Descargar<span class="flecha">&#9660</span></a></li>
					<li><a href="?Autores" title="Modulo con la información de los autores del OVI.">Autores<span class="flecha">&#9660</span></a></li>
				</ul>
			</nav>
		<?php }
	elseif  (isset($_GET['Conectar']) || isset($_GET['Registrar']) || isset($_GET['Actualizar']) || isset($_GET['Eliminar']) || isset($_GET['Consultar'])) 
		{ ?> 
			<nav>
				<ul class="nav">
					<li><a href="?Inicio" title="Modulo Principal del OVI.">Inicio<span class="flecha">&#9660</span></a></li>
					<li><a href="?MySQL" title="Modulo de Lecturas Relacionadas con Herramientas y Lenguaje de Programación.">Lecturas<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?MySQL' title="Información relacionada a base de datos MySQL. "><b>MySQL</b></a></li>
							<li><a href='?Php' title="Información relacionada con Php."><b>Php</b></a></li>
							<li><a href='?Html' title="Información relacionada con Html."><b>Html</b></a></li>
							<li><a href='?Css' title="Información relacionada con Css."><b>Css</b></a></li>
							<li><a href='?JavaScript' title="Información relacionada con JavaScript."><b>JavaScript</b></a></li>
							<li><a href='?Sublime' title="Información relacionada con el el editor de texto sublime text 3. "><b>Sublime Text 3</b></a></li>
							<li><a href='?Servidor' title="Información relacionada con el Servidor Web 'Xampp'."><b>Servidor Web</b></a></li>
							<li><a href='?Navegador' title="Información relacionada con el Navegador Web 'Google'."><b>Navegador Web</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectar" title="Modulo explicativo para la Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL" class="active">Explicación<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectar' title="Información como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrar' title="Información de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizar' title="Información de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminar' title="Información de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultar' title="Información de cócmo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectarmulti" title="Modulo con Videos Explicativos relacionados con Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL.">Multimedia<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectarmulti' title="Video de como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrarmulti' title="Video de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizarmulti' title="Video de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminarmulti' title="Video de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultarmulti' title="Video de cómo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Preguntas" title="Modulo con actividades para los visitantes.">Actividad<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Preguntas' title="Preguntas relacionadas con el Tema."><b>Preguntas</b></a></li>
							<li><a href='?Actividad' title="Actividad relacionada con el Tema."><b>Actividad</b></a></li>
							<li><a href='?Cargar' title="Cargar la Actividad Desarrollada."><b>Cargar Act.</b></a></li>
						</ul>
					</li>
					<li><a href="?Descargarcomp" title="Modulo para Descaragar el Paquete de la Actividad">Descargar<span class="flecha">&#9660</span></a></li>
					<li><a href="?Autores" title="Modulo con la información de los autores del OVI.">Autores<span class="flecha">&#9660</span></a></li>
				</ul>
			</nav>
		<?php }
	elseif  (isset($_GET['Conectarmulti']) || isset($_GET['Registrarmulti']) || isset($_GET['Actualizarmulti']) || isset($_GET['Eliminarmulti']) || isset($_GET['Consultarmulti'])) 
		{ ?> 
			<nav>
				<ul class="nav">
					<li><a href="?Inicio" title="Modulo Principal del OVI.">Inicio<span class="flecha">&#9660</span></a></li>
					<li><a href="?MySQL" title="Modulo de Lecturas Relacionadas con Herramientas y Lenguaje de Programación.">Lecturas<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?MySQL' title="Información relacionada a base de datos MySQL. "><b>MySQL</b></a></li>
							<li><a href='?Php' title="Información relacionada con Php."><b>Php</b></a></li>
							<li><a href='?Html' title="Información relacionada con Html."><b>Html</b></a></li>
							<li><a href='?Css' title="Información relacionada con Css."><b>Css</b></a></li>
							<li><a href='?JavaScript' title="Información relacionada con JavaScript."><b>JavaScript</b></a></li>
							<li><a href='?Sublime' title="Información relacionada con el el editor de texto sublime text 3. "><b>Sublime Text 3</b></a></li>
							<li><a href='?Servidor' title="Información relacionada con el Servidor Web 'Xampp'."><b>Servidor Web</b></a></li>
							<li><a href='?Navegador' title="Información relacionada con el Navegador Web 'Google'."><b>Navegador Web</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectar" title="Modulo explicativo para la Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL">Explicación<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectar' title="Información como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrar' title="Información de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizar' title="Información de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminar' title="Información de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultar' title="Información de cócmo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectarmulti" title="Modulo con Videos Explicativos relacionados con Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL." class="active">Multimedia<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectarmulti' title="Video de como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrarmulti' title="Video de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizarmulti' title="Video de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminarmulti' title="Video de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultarmulti' title="Video de cómo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Preguntas" title="Modulo con actividades para los visitantes.">Actividad<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Preguntas' title="Preguntas relacionadas con el Tema."><b>Preguntas</b></a></li>
							<li><a href='?Actividad' title="Actividad relacionada con el Tema."><b>Actividad</b></a></li>
							<li><a href='?Cargar' title="Cargar la Actividad Desarrollada."><b>Cargar Act.</b></a></li>
						</ul>
					</li>
					<li><a href="?Descargarcomp" title="Modulo para Descaragar el Paquete de la Actividad">Descargar<span class="flecha">&#9660</span></a></li>
					<li><a href="?Autores" title="Modulo con la información de los autores del OVI.">Autores<span class="flecha">&#9660</span></a></li>
				</ul>
			</nav>
		<?php }
	elseif  (isset($_GET['Preguntas']) || isset($_GET['Actividad']) || isset($_GET['Cargar'])) 
		{ ?> 
			<nav>
				<ul class="nav">
					<li><a href="?Inicio" title="Modulo Principal del OVI.">Inicio<span class="flecha">&#9660</span></a></li>
					<li><a href="?MySQL" title="Modulo de Lecturas Relacionadas con Herramientas y Lenguaje de Programación.">Lecturas<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?MySQL' title="Información relacionada a base de datos MySQL. "><b>MySQL</b></a></li>
							<li><a href='?Php' title="Información relacionada con Php."><b>Php</b></a></li>
							<li><a href='?Html' title="Información relacionada con Html."><b>Html</b></a></li>
							<li><a href='?Css' title="Información relacionada con Css."><b>Css</b></a></li>
							<li><a href='?JavaScript' title="Información relacionada con JavaScript."><b>JavaScript</b></a></li>
							<li><a href='?Sublime' title="Información relacionada con el el editor de texto sublime text 3. "><b>Sublime Text 3</b></a></li>
							<li><a href='?Servidor' title="Información relacionada con el Servidor Web 'Xampp'."><b>Servidor Web</b></a></li>
							<li><a href='?Navegador' title="Información relacionada con el Navegador Web 'Google'."><b>Navegador Web</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectar" title="Modulo explicativo para la Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL">Explicación<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectar' title="Información como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrar' title="Información de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizar' title="Información de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminar' title="Información de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultar' title="Información de cócmo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectarmulti" title="Modulo con Videos Explicativos relacionados con Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL.">Multimedia<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectarmulti' title="Video de como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrarmulti' title="Video de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizarmulti' title="Video de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminarmulti' title="Video de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultarmulti' title="Video de cómo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Preguntas" title="Modulo con actividades para los visitantes." class="active">Actividad<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Preguntas' title="Preguntas relacionadas con el Tema."><b>Preguntas</b></a></li>
							<li><a href='?Actividad' title="Actividad relacionada con el Tema."><b>Actividad</b></a></li>
							<li><a href='?Cargar' title="Cargar la Actividad Desarrollada."><b>Cargar Act.</b></a></li>
						</ul>
					</li>
					<li><a href="?Descargarcomp" title="Modulo para Descaragar el Paquete de la Actividad">Descargar<span class="flecha">&#9660</span></a></li>
					<li><a href="?Autores" title="Modulo con la información de los autores del OVI.">Autores<span class="flecha">&#9660</span></a></li>
				</ul>
			</nav>
		<?php }
	elseif  (isset($_GET['Descargarcomp'])) 
		{ ?> 
			<nav>
				<ul class="nav">
					<li><a href="?Inicio" title="Modulo Principal del OVI.">Inicio<span class="flecha">&#9660</span></a></li>
					<li><a href="?MySQL" title="Modulo de Lecturas Relacionadas con Herramientas y Lenguaje de Programación.">Lecturas<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?MySQL' title="Información relacionada a base de datos MySQL. "><b>MySQL</b></a></li>
							<li><a href='?Php' title="Información relacionada con Php."><b>Php</b></a></li>
							<li><a href='?Html' title="Información relacionada con Html."><b>Html</b></a></li>
							<li><a href='?Css' title="Información relacionada con Css."><b>Css</b></a></li>
							<li><a href='?JavaScript' title="Información relacionada con JavaScript."><b>JavaScript</b></a></li>
							<li><a href='?Sublime' title="Información relacionada con el el editor de texto sublime text 3. "><b>Sublime Text 3</b></a></li>
							<li><a href='?Servidor' title="Información relacionada con el Servidor Web 'Xampp'."><b>Servidor Web</b></a></li>
							<li><a href='?Navegador' title="Información relacionada con el Navegador Web 'Google'."><b>Navegador Web</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectar" title="Modulo explicativo para la Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL">Explicación<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectar' title="Información como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrar' title="Información de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizar' title="Información de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminar' title="Información de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href="?Consultar" title="Información de cócmo Consultar un Registro con Php a una BD MySQL.">Consultar</a></li>
						</ul>
					</li>
					<li><a href="?Conectarmulti" title="Modulo con Videos Explicativos relacionados con Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL.">Multimedia<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectarmulti' title="Video de como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrarmulti' title="Video de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizarmulti' title="Video de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminarmulti' title="Video de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultarmulti' title="Video de cómo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Preguntas" title="Modulo con actividades para los visitantes.">Actividad<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Preguntas' title="Preguntas relacionadas con el Tema."><b>Preguntas</b></a></li>
							<li><a href='?Actividad' title="Actividad relacionada con el Tema."><b>Actividad</b></a></li>
							<li><a href='?Cargar' title="Cargar la Actividad Desarrollada."><b>Cargar Act.</b></a></li>
						</ul>
					</li>
					<li><a href="?Descargarcomp" title="Modulo para Descaragar el Paquete de la Actividad" class="active">Descargar<span class="flecha">&#9660</span></a></li>
					<li><a href="?Autores" title="Modulo con la información de los autores del OVI.">Autores<span class="flecha">&#9660</span></a></li>
				</ul>
			</nav>
		<?php }
	elseif  (isset($_GET['Autores'])) 
		{ ?> 
			<nav>
				<ul class="nav">
					<li><a href="?Inicio" title="Modulo Principal del OVI.">Inicio<span class="flecha">&#9660</span></a></li>
					<li><a href="?MySQL" title="Modulo de Lecturas Relacionadas con Herramientas y Lenguaje de Programación.">Lecturas<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?MySQL' title="Información relacionada a base de datos MySQL. "><b>MySQL</b></a></li>
							<li><a href='?Php' title="Información relacionada con Php."><b>Php</b></a></li>
							<li><a href='?Html' title="Información relacionada con Html."><b>Html</b></a></li>
							<li><a href='?Css' title="Información relacionada con Css."><b>Css</b></a></li>
							<li><a href='?JavaScript' title="Información relacionada con JavaScript."><b>JavaScript</b></a></li>
							<li><a href='?Sublime' title="Información relacionada con el el editor de texto sublime text 3. "><b>Sublime Text 3</b></a></li>
							<li><a href='?Servidor' title="Información relacionada con el Servidor Web 'Xampp'."><b>Servidor Web</b></a></li>
							<li><a href='?Navegador' title="Información relacionada con el Navegador Web 'Google'."><b>Navegador Web</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectar" title="Modulo explicativo para la Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL">Explicación<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectar' title="Información como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrar' title="Información de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizar' title="Información de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminar' title="Información de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href="?Consultar" title="Información de cócmo Consultar un Registro con Php a una BD MySQL.">Consultar</a></li>
						</ul>
					</li>
					<li><a href="?Conectarmulti" title="Modulo con Videos Explicativos relacionados con Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL.">Multimedia<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectarmulti' title="Video de como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrarmulti' title="Video de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizarmulti' title="Video de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminarmulti' title="Video de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultarmulti' title="Video de cómo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Preguntas" title="Modulo con actividades para los visitantes.">Actividad<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Preguntas' title="Preguntas relacionadas con el Tema."><b>Preguntas</b></a></li>
							<li><a href='?Actividad' title="Actividad relacionada con el Tema."><b>Actividad</b></a></li>
							<li><a href='?Cargar' title="Cargar la Actividad Desarrollada."><b>Cargar Act.</b></a></li>
						</ul>
					</li>
					<li><a href="?Descargarcomp" title="Modulo para Descaragar el Paquete de la Actividad">Descargar<span class="flecha">&#9660</span></a></li>
					<li><a href="?Autores" title="Modulo con la información de los autores del OVI." class="active">Autores<span class="flecha">&#9660</span></a></li>
				</ul>
			</nav>
		<?php }
	else
		{ ?> 
			<nav>
				<ul class="nav">
					<li><a href="?Inicio" title="Modulo Principal del OVI." class="active">Inicio<span class="flecha">&#9660</span></a></li>
					<li><a href="?MySQL" title="Modulo de Lecturas Relacionadas con Herramientas y Lenguaje de Programación.">Lecturas<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?MySQL' title="Información relacionada a base de datos MySQL. "><b>MySQL</b></a></li>
							<li><a href='?Php' title="Información relacionada con Php."><b>Php</b></a></li>
							<li><a href='?Html' title="Información relacionada con Html."><b>Html</b></a></li>
							<li><a href='?Css' title="Información relacionada con Css."><b>Css</b></a></li>
							<li><a href='?JavaScript' title="Información relacionada con JavaScript."><b>JavaScript</b></a></li>
							<li><a href='?Sublime' title="Información relacionada con el el editor de texto sublime text 3. "><b>Sublime Text 3</b></a></li>
							<li><a href='?Servidor' title="Información relacionada con el Servidor Web 'Xampp'."><b>Servidor Web</b></a></li>
							<li><a href='?Navegador' title="Información relacionada con el Navegador Web 'Google'."><b>Navegador Web</b></a></li>
						</ul>
					</li>
					<li><a href="?Conectar" title="Modulo explicativo para la Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL">Explicación<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectar' title="Información como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrar' title="Información de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizar' title="Información de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminar' title="Información de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href="?Consultar" title="Información de cócmo Consultar un Registro con Php a una BD MySQL.">Consultar</a></li>
						</ul>
					</li>
					<li><a href="?Conectarmulti" title="Modulo con Videos Explicativos relacionados con Conexión, Edición, Actualización y Eliminación de un Registro de la Base de Datos MySQL.">Multimedia<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Conectarmulti' title="Video de como Conectar una BD  MySQL desde Php."><b>Conectar</b></a></li>
							<li><a href='?Registrarmulti' title="Video de cómo Registrar un Registro con Php a una BD MySQL."><b>Registrar</b></a></li>
							<li><a href='?Actualizarmulti' title="Video de cómo Actualizar un Registro con Php a una BD MySQL."><b>Actualizar</b></a></li>
							<li><a href='?Eliminarmulti' title="Video de cómo Eliminar un Registro con Php a una BD MySQL."><b>Eliminar</b></a></li>
							<li><a href='?Consultarmulti' title="Video de cómo Consultar un Registro con Php a una BD MySQL."><b>Consultar</b></a></li>
						</ul>
					</li>
					<li><a href="?Preguntas" title="Modulo con actividades para los visitantes.">Actividad<span class="flecha">&#9660</span></a>
						<ul>
							<li><a href='?Preguntas' title="Preguntas relacionadas con el Tema."><b>Preguntas</b></a></li>
							<li><a href='?Actividad' title="Actividad relacionada con el Tema."><b>Actividad</b></a></li>
							<li><a href='?Cargar' title="Cargar la Actividad Desarrollada."><b>Cargar Act.</b></a></li>
						</ul>
					</li>
					<li><a href="?Descargarcomp" title="Modulo para Descaragar el Paquete de la Actividad">Descargar<span class="flecha">&#9660</span></a></li>
					<li><a href="?Autores" title="Modulo con la información de los autores del OVI.">Autores<span class="flecha">&#9660</span></a></li>
				</ul>
			</nav>
		<?php }
?>

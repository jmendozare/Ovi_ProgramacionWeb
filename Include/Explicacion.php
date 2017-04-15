<!-- 
	Desarrollado Por:______________Tec. Jerffen Mendoza Regino.
-->
<?php 
	if (isset($_GET['Conectar']))
		{ ?> 
			<div class="left_article_e">
				<h1 class="tit_h1">
					Conectar Php y MySQL
				</h1>
				<p>
					En este artículo veremos cómo integrar Php y MySQL para aumentar la funcionalidad de nuestros desarrollos web. Primero veremos cómo abrir la conexión en el servidor MySQL. Luego ejecutaremos comandos en nuestra base de datos a través de nuestra aplicación y finalmente aprenderemos a llamar procedimientos almacenados. Usaremos las cadenas que indiquen el servidor, el nombre de la base de datos y el usuario y la Contraseña que vamos a emplear para abrir la conexión. Como medida de seguridad puedes crear un archivo .php que guarde estos datos en variables locales de forma externa.<br>
					<b>Código para Conectar Php y MySQL.</b><br>
					<b>&lt?php</b> <br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Server = 'localhost';</b> //Nombre del Servidor<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$DataBase = 'datos'; </b>//Nombre de la BD.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Username = 'usuario'; </b>// Nombre del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Password = 'contraseña'; </b>// Contraseña del Usuario<br>
						&nbsp;&nbsp;<b>$Conexion=mysql_connect($Server, $Username, $Password)or die("No se ha podido conectar a la base de dato.". mysql_error());</b><br>
						&nbsp;&nbsp;<b>$SelecionBD =mysql_select_db($DataBase, $Conexion)or die("La base de dato no existe".mysql_error());</b><br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Desconectar =mysql_close(); </b>// Cerrar la Conexión<br>
					<b>?&gt</b><br>
					<b>Descargar Archivo de  <a href="Descargas/Conexion.zip" download="Conexion.zip" class="descarga" title="Descargar Archivo de Conexión.">Conexión</a>.</b>
				</p>
			</div>
			<div class="rigth_article">
				<center><br><br>
					<img src="Img/Conexion.png" alt="Imagen del código de Conexión. " title="Imagen del código de Conexión. " class="img_lectura">
				</center>
			</div>
		<?php }
	elseif (isset($_GET['Registrar']))
		{ ?> 
			<div class="left_article_e">
				<h1 class="tit_h1">
					Agregar o Registrar Información a la Base de Datos 
				</h1>
				<p>
					En esta lección vamos ver cómo podemos añadir nuevos registros a nuestra BD. La recogida de datos la vamos a hacer a través de un interfaz de web. En primer lugar vamos a crear una página web con un simple formulario, con los campos que deseamos.<br>
					<b>Campos</b> " Nombre, Apellidos, Tip_documento, Num_documento, y Sexo".
					<br>
					<b>Código para Registrar.</b><br><br>
					<b>&lt?php</b> <br>
						&nbsp;&nbsp;&nbsp; <b>include_once "Conexion";</b> //Agregamos la conexion a la BD.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Nombres = 'Jerffen'; </b>//Nombre del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Apellidos = 'Mendoza Regino'; </b>//Apellidos del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Tipo = 'Cc'; </b>// Tipo de Documento del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Documento = '*1056870**'; </b>// Numero de Documento del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Sexo = 'Masculino '; </b>// Sexo del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Tabla = 'User '; </b>// Nombre de la Tabla donde se Almacenara el Registro<br>
						&nbsp;<b>$Registrar= mysql_query("INSERT INTO $Tabla (nombres, apellidos, tip_documento, num_documento, sexo) VALUES ('$Nombres', '$Apellidos', '$Tipo', '$Documento', '$Sexo')") or die ("La Tabla no existe ".mysql_error());</b><br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Desconectar =mysql_close(); </b>// Cerrar la Conexión<br>
					<b>?&gt</b><br>
					<b>Para ver Ejemplo Dar  clip <a href="http://localhost/ovi_Programacion/Descargas/?Registrar" target="_blank" class="linka">Aquí</a>.</b><br>
					<b>Descargar Archivo de  <a href="Descargas/Registrar.zip" download="Registrar.zip" class="descarga" title="Descargar Archivo de Registrar.">Registrár</a>.</b>
				</p>
			</div>
			<div class="rigth_article">
				<center><br><br>
					<img src="Img/Registrar.png" alt="Imagen del código de Registrar. " title="Imagen del código de Registrar. " class="img_lectura">
				</center>
			</div>
		<?php }
	elseif (isset($_GET['Actualizar']))
		{ ?> 
			<div class="left_article_e">
				<h1 class="tit_h1">
					Actualizar o Modificar la Información de la Base de Datos 
				</h1>
				<p>
					Ya sabemos cómo guardar datos en una base de datos. La siguiente tarea que tendremos que realizar con mucha frecuencia en nuestra Web es la actualización de esos datos, es decir, modificar los valores de los datos ya guardados.<br>
					<b>Campos</b> " Nombre, Apellidos, Tip_documento, Num_documento, y Sexo".
					<br>
					<b>Código para Actualizar.</b><br>
					<b>&lt?php</b> <br>
						&nbsp;&nbsp;&nbsp; <b>include_once "Conexion";</b> //Agregamos la conexion a la BD.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Id = '1'; </b>//Idicativo Unico o llave Primaria<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Nombres = 'Nicolas'; </b>//Nombre del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Apellidos = 'Lopéz Villamil'; </b>//Apellidos del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Tipo = 'Ce'; </b>// Tipo de Documento del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Documento = '*1048870**'; </b>// Numero de Documento del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Sexo = 'Masculino '; </b>// Sexo del Usuario<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Tabla = 'User '; </b>// Nombre de la Tabla donde se Almacenara el Registro<br>
						&nbsp;<b>$Actualizar= mysql_query("UPDATE $Tabla 	SET nombres='$Nombres', 
															apellidos='$Apellidos',
															tip_documento='$Tipo', 
															num_documento='$Documento', 
															sexo='$Sexo'
														WHERE id=$Id");</b><br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Desconectar =mysql_close(); </b>// Cerrar la Conexión<br>
					<b>?&gt</b><br>
					<b>Para ver Ejemplo Dar  clip <a href="http://localhost/ovi_Programacion/Descargas/?Actualizar" target="_blank" class="linka">Aquí</a>.</b><br>
					<b>Descargar Archivo de  <a href="Descargas/Actualizar.zip" download="Actualizar.zip" class="descarga" title="Descargar Archivo de Actualizar.">Actualizár</a>.</b>
				</p>
			</div>
			<div class="rigth_article">
				<center><br><br>
					<img src="Img/Actualizar.png" alt="Imagen del código de Actualizar. " title="Imagen del código de Actualizar. " class="img_lectura">
				</center>
			</div>
		<?php }
	elseif (isset($_GET['Eliminar']))
		{ ?> 
			<div class="left_article_e">
				<h1 class="tit_h1">
					Borrar o Eliminar la Información de la Base de Datos 
				</h1>
				<p>
					Ya sabemos cómo guardar datos en una base de datos al igual que Actualización Información. La siguiente tarea que tendremos que realizar con mucha frecuencia en nuestra Web es la Eliminación de información que ya no nos sirva o este fuera del caso. Estos datos se eliminaran de forma permanente de la base de datos. <br>
					<b>Campos</b> " Nombre, Apellidos, Tip_documento, Num_documento, y Sexo".
					<br>
					<b>Código para Eliminár.</b><br>
					<b>&lt?php</b> <br>
						&nbsp;&nbsp;&nbsp; <b>include_once "Conexion";</b> //Agregamos la conexion a la BD.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Id = '1'; </b>//Idicativo Unico o llave Primaria<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Tabla = 'User '; </b>// Nombre de la Tabla donde se Almacenara el Registro<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Eliminar=mysql_query("DELETE FROM $Tabla WHERE id=$Id");</b><br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Desconectar =mysql_close(); </b>// Cerrar la Conexión<br>
					<b>?&gt</b><br>
					<b>Para ver Ejemplo Dar  clip <a href="http://localhost/ovi_Programacion/Descargas/?Eliminar" target="_blank" class="linka">Aquí</a>.</b><br>
					<b>Descargar Archivo de  <a href="Descargas/Eliminar.zip" download="Eliminar.zip" class="descarga" title="Descargar Archivo de Eliminar.">Eliminár</a>.</b>
				</p>
			</div>
			<div class="rigth_article">
				<center><br><br>
					<img src="Img/Eliminar.png" alt="Imagen del código de Eliminar. " title="Imagen del código de Eliminar. " class="img_lectura">
				</center>
			</div>
		<?php }
	elseif (isset($_GET['Consultar']))
		{ ?> 
			<div class="left_article_e">
				<h1 class="tit_h1">
					Consultar Información de la Base de Datos. 
				</h1>
				<p>
					Ya sabemos cómo guardar datos en una base de datos al igual que Actualización, y Eliminar la Información. La siguiente tarea que tendremos que realizar con mucha frecuencia en nuestra Web es la Consulta  de información para ser mostrada a los Usuarios. <br>
					<b>Campos</b> " Nombre, Apellidos, Tip_documento, Num_documento, y Sexo".
					<br>
					<b>Código para Consultar.</b><br>
					<b>&lt?php</b> <br>
						&nbsp;&nbsp;&nbsp; <b>include_once "Conexion";</b> //Agregamos la conexion a la BD.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Nombres = 'Jer'; </b>//Informacion a del Consultada en la BD<br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Tabla = 'User '; </b>// Nombre de la Tabla donde se Almacenara el Registro<br>
						// Consultara o Buscara todos los registros donde su nombre tenga el termino jer
						&nbsp;&nbsp;<b>$Consulta = mysql_query("SELECT * FROM user WHERE nombres LIKE '%$Nombre%' ORDER BY id desc limit 10")or die(mysql_error());</b><br>
						<b>while ($Registro=mysql_fetch_array($Consulta)){echo "$Registro ['id']&ltbr&gt$Registro ['nombres'])&ltbr&gt$Registro ['apellidos']&ltbr&gt$Registro ['num_documento']";};</b><br>
						&nbsp;&nbsp;&nbsp;&nbsp;<b>$Desconectar =mysql_close(); </b>// Cerrar la Conexión<br>
					<b>?&gt</b><br>
					<b>Para ver Ejemplo Dar  clip <a href="http://localhost/ovi_Programacion/Descargas/?Consultar" target="_blank" class="linka">Aquí</a>.</b><br>
					<b>Descargar Archivo de  <a href="Descargas/Consultar.zip" download="Consultar.zip" class="descarga" title="Descargar Archivo de Consultar.">Consultar</a>.</b>
				</p>
			</div>
			<div class="rigth_article">
				<center><br><br>
					<img src="Img/Consultar.png" alt="Imagen del código de Consultar. " title="Imagen del código de Consultar. " class="img_lectura">
				</center>
			</div>
		<?php }
?>
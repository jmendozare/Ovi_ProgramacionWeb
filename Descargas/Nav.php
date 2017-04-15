<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
<nav>
	<ul class="nav">
		<?php 
			if (isset($_GET['Consultar'])) 
				{ ?>
					<li><a href="?Registrar" title="Registrar Registro.">Registrar</a></li>
					<li><a href="?Actualizar" title="Actualizar Registro.">Actualizar</a></li>
					<li><a href="?Eliminar" title="Eliminar Registro.">Eliminar</a></li>
					<li><a href="?Consultar" title="Consultar Registro." class="active">Consultar</a></li>
				<?php }
			elseif (isset($_GET['Registrar'])) 
				{ ?>
					<li><a href="?Registrar" title="Registrar Registro." class="active">Registrar</a></li>
					<li><a href="?Actualizar" title="Actualizar Registro.">Actualizar</a></li>
					<li><a href="?Eliminar" title="Eliminar Registro.">Eliminar</a></li>
					<li><a href="?Consultar" title="Consultar Registro.">Consultar</a></li>
				<?php }
			elseif (isset($_GET['Actualizar'])) 
				{ ?>
					<li><a href="?Registrar" title="Registrar Registro.">Registrar</a></li>
					<li><a href="?Actualizar" title="Actualizar Registro." class="active">Actualizar</a></li>
					<li><a href="?Eliminar" title="Eliminar Registro.">Eliminar</a></li>
					<li><a href="?Consultar" title="Consultar Registro.">Consultar</a></li>
				<?php }
			elseif (isset($_GET['Eliminar'])) 
				{ ?>
					<li><a href="?Registrar" title="Registrar Registro.">Registrar</a></li>
					<li><a href="?Actualizar" title="Actualizar Registro.">Actualizar</a></li>
					<li><a href="?Eliminar" title="Eliminar Registro." class="active">Eliminar</a></li>
					<li><a href="?Consultar" title="Consultar Registro.">Consultar</a></li>
				<?php }
			else
				{ ?>
					<li><a href="?Registrar" title="Registrar Registro." class="active">Registrar</a></li>
					<li><a href="?Actualizar" title="Actualizar Registro.">Actualizar</a></li>
					<li><a href="?Eliminar" title="Eliminar Registro.">Eliminar</a></li>
					<li><a href="?Consultar" title="Consultar Registro." >Consultar</a></li>
				<?php }
		?>
	</ul>
	 <b class="jerffen">Olga Lizeth Monroy G.</b>
</nav>
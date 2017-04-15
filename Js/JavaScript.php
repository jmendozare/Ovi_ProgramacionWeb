<!--
	Proyecto:________________Sistema de Informacion para la Gestion y Administracion de Notas del Colegio Nueva Esperanza.
	Nombre del Proyecto:_____SIGA_Nueva_Esperanza.
	Descripcion del Proyecto:___Software para la Gestion, Adminitracion y Control de Notas del Colegio Nueva Esperanza.
	Desarrollado Por:______________Tec. Jerffen Mendoza Regino.
 -->	
<!--_________________________________________________________________________________________-->
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
<!-- Funcion los mensajes de desconectado-->
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".yes_mjs").fadeOut(1000);
    },3500);
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".no_mjs").fadeOut(1000);
    },3500);
});
</script>
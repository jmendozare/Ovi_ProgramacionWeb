<!--
	Desarrollado Por:______________Olga Lizeth Monroy G.
 -->
<script src="Jquery.js" type="text/javascript"></script>
<!--Funcion para Validar los Campos-->
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
<!--Funcion para los mensajes de alert de error-->
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".alert").fadeOut(1000);
    },3000);
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".alerto").fadeOut(1000);
    },3000);
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".Exit").fadeOut(1000);
    },3000);
});
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
<script type="text/javascript">
	function Inputsearch(inputext) 
	{
	    if ((inputext.value=="")||(inputext.value=="0")||(inputext.value==" ")||(inputext.value=="  "))
	    {
	        inputext.className='search_no';
	    }
	    else 
	    {
	        inputext.className='input_search';
	    }
	}
</script>
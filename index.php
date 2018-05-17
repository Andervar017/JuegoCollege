<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Juego web</title>
		<meta name="description" conent="Esto es un juego web">
		<meta name="author" conent="AndersonV">
		<style>
    h1 {
        text-align: center;
    }
    #cuadrado{
        margin:200px;
        border: solid 1px blue;
        background:blue;
        width:30px;
        height:30px;
        position: absolute;
    }
</style>
<script>
window.onload=function(){document.onkeydown=desplazar};
    function desplazar(objeto){
    var tecla = objeto.which;
    
        var situacionY = document.getElementById("cuadrado").offsetLeft;
         var situacionX = document.getElementById("cuadrado").offsetTop;
        switch (tecla){
            case 37 :   
                cuadrado.style.left = situacionY-220+"px" ; break;
            case 38 : 
                cuadrado.style.top = situacionX-220+"px" ;break;
            case 39 :  
        cuadrado.style.left = situacionY-180+"px" ;break;
            case 40 : 
                cuadrado.style.top = situacionX-180+"px" ;break;
        default :alert("Se ha equivocado, debe pulsar las flechas del teclado");
        }
    }
</script>
	</head>
	<body>
		<div id="cuadrado"></div>
		<img src="img/mapa3.jpg.png">
		<div id="juego">	
			<div id="mapa">
			</div>
			<div id="jugador">
			</div>	
		</div>
		<?php
			include_once 'app/cargadorArchivosJS.inc.php';
		?>
	</body>
</html>
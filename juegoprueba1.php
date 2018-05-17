<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>My College</title>
        <meta name="description" conent="Esto es un juego web">
        <meta name="author" conent="AndersonV">
<style>
body{ background-color: black; color:white;}
#cuadrado{ width:600px; height:600px; overflow:hidden;}
#mapa{ position:relative; left:-300px; top:-300px; }
#pj{ position:absolute;width: 200px height: 200px; left:150px; top:120px;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="cuadrado"><div id="mapa"><img src="img/mapa3.jpg.png"></div></div>
            <div id="pj"><img src="img/estudiantefFrente.png" width="40" height="40"></div>
            <div id="datos"></div>
        </div>
    </body>
    <script>
$(document).keypress(function( event ) {
 switch(event.which)
 { 
  case 119: // W
   $("#datos").text("arriba");
   $( "#mapa" ).animate({ "top": "+=20px" }, "slow" );
  break;
  case 97: // A
   $("#datos").text("izquierda");
   $( "#mapa" ).animate({ "left": "+=10px" }, "slow" );
  break;
  case 100: // D
   $("#datos").text("derecha");
   $( "#mapa" ).animate({ "left": "-=10px" }, "slow" );
  break;
  case 115: // S
   $("#datos").text("abajo");
   $( "#mapa" ).animate({ "top": "-=20px" }, "slow" );
  break;
 }
    $("#datos").text("tecla:"+event.which);
  });
</script>
</html>
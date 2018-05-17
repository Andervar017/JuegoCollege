<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>My College</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash"rel="stylesheet" type="text/css">	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
<style>
	body{ background-color: black; color:white;}
	#cuadrado{ width:600px; height:600px; overflow:hidden;}
	#mapa{ position:relative; left:-300px; top:-300px; }
	#pj{ position:absolute;width: 200px height: 200px; left:150px; top:120px;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<div id="responsive-menu">
        <ul class="menu-holder">
            <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="#Contactame"><i class="fa fa-envelope"></i>Contactame</a></li>
        </ul>
    </div>
	<div class="templatemo-header tm-orange-bg-transparent">
		<div class="templatemo-header-inner">					
			<div class="container">
				<h1 class="templatemo-logo text-uppercase pull-left">My College</h1>
				<nav class="hidden-xs templatemo-nav pull-right text-uppercase">
					<ul class="menu-holder">
						<li><a href="#" class="active">Home</a></li>
						<li><a href="#Contactame">Contactame</a></li>
					</ul>
				</nav>
				<div class="text-right visible-xs">
                    <a href="#" id="mobile_menu"><span class="fa fa-bars"></span></a>
                </div>			
			</div>
		</div> 
	</div> 
	<section class="tm-dark-bg tm-section" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img src="images/estudiantefFrente.png" alt="Banner" class="img-responsive center-block">				
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div id="cuadrado"><div id="mapa"><img src="img/mapa3.jpg.png"></div></div>
            		<div id="pj"><img src="img/estudiantefFrente.png" width="40" height="40"></div>
            		<div id="datos"></div>
        		</div>
			</div>					
		</div>				
	</section>
	<section class="templatemo-about tm-section" id="Contactame">
		<div class="container">
			<center>
			<h1 class="text-uppercase text-center">Contactame</h1>
			Para soporte e informacion del juego
			<div class="row margin-top-50">
	            </div>
		            <form action="#" method="post" class="tm-contact-form">
		                <div class="form-group">
		                    <input type="text" id="contact_name" class="form-control" placeholder="Digita tu nombre" />
		                </div>
		                <div class="form-group">
		                    <input type="text" id="contact_email" class="form-control" placeholder="Digita tu email" />
		                </div>
		                <div class="form-group">
		                    <textarea id="contact_message" class="form-control" rows="8" placeholder="Escribe un mensaje"></textarea>
		                </div>
		                <button type="submit" class="btn text-uppercase tm-dark-bg tm-orange-text tm-send-btn">Enviar</button>
		            </form>
	            </div>
            </div>
		</div>
		<img src="images/tm-border-black-bottom.png" alt="Border" class="tm-border">
	</section> <!-- contact -->
	<footer class="text-right tm-dark-bg">		
		<p class="text-uppercase container small">Copyright &copy; 2084 <a href="#">My College by AndersonV</a></p>
	</footer>
	<script src="js/jquery-1.11.1.min.js"></script> 
    <script src="js/templatemo_script.js"></script>
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
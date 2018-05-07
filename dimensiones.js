var dimensiones = {
	ancho: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
	alto: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
	iniciar: function () {
		window.addEventlistener("resize", function(evento) {
			dimensiones.ancho = ancho: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			dimensiones.alto = alto: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
			console.log("Ancho: "+ dimensiones.ancho + "Alto: "+ dimensiones..alto);
		});
	}
};
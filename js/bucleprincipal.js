//Namespace
//Mainloop - bucle principal
var buclePrincipal = {
	idEjecucion: null,
	ultimoRegistro: 0,
	aps: 0, //Actualizaciones por segundo
	fps: 0 //Frames por segundo

	iterar: function(resgistroTemporal){
		buclePrincipal.idEjecucion = window.requestAnimationFrame(buclePrincipal.iterar);

	},
	detener: function() {

	},
	actualizar: function(resgistroTemporal) {

	},
	dibujar: function(resgistroTemporal)

	}
};
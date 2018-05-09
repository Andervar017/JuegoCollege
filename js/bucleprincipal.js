//Namespace
//Mainloop - bucle principal
var buclePrincipal = {
	idEjecucion: null,
	ultimoRegistro: 0,
	aps: 0, //Actualizaciones por segundo
	fps: 0, //Frames por segundo
	iterar: function(resgistroTemporal)  {
		buclePrincipal.idEjecucion = window.requestAnimationFrame(buclePrincipal.iterar);
		buclePrincipal.actualizar(resgistroTemporal);
		buclePrincipal.dibujar();

		if(resgistroTemporal - buclePrincipal.ultimoRegistro > 999) {
			buclePrincipal.ultimoRegistro = resgistroTemporal;
			console.log("APS: " + buclePrincipal.aps + " ! FPS: " + buclePrincipal.fps);
			buclePrincipal.aps = 0;
			buclePrincipal.fps = 0;
		}

	},
	detener: function() {

	},
	actualizar: function(resgistroTemporal) {
		teclado.reiniciar();
		mando.actualizar();
		buclePrincipal.aps++;

	},
	dibujar: function(resgistroTemporal) {
		buclePrincipal.fps++;

	}
};
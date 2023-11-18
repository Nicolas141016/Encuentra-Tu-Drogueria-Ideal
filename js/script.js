function filtrarPorBarrio() {
    // Obtener el valor seleccionado del filtro de barrio
    var barrioSeleccionado = document.getElementById("barrio").value;

    // Obtener todas las tarjetas
    var tarjetas = document.querySelectorAll(".card");

    // Si se selecciona "Todos", mostrar todas las tarjetas y salir de la función
    if (barrioSeleccionado === "todos") {
        tarjetas.forEach(function (tarjeta) {
            tarjeta.style.display = "block";
        });
        return;
    }

    // Ocultar todas las tarjetas
    tarjetas.forEach(function (tarjeta) {
        tarjeta.style.display = "none";
    });

    // Mostrar solo las tarjetas del barrio seleccionado
    var tarjetasBarrio = document.querySelectorAll(`.card[data-barrio="${barrioSeleccionado}"]`);
    tarjetasBarrio.forEach(function (tarjeta) {
        tarjeta.style.display = "block";
    });
}

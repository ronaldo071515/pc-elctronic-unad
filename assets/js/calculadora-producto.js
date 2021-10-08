
const calcularValores = (e) => {
    e.preventDefault();

    let vcompra = document.calculadora.vcompra.value;
    let putilidad = document.calculadora.putilidad.value;
    let piva = document.calculadora.piva.value;


    //Por si acaso, en navegadores viejos
    if (isNaN(vcompra) || isNaN(putilidad) || isNaN(piva)) {
        alertaErrorCalculo("FALTA_PARAM");
        return;
    }

    if (vcompra <= 0 || putilidad <= 0 || piva <= 0) {
        alertaErrorCalculo("INVALID_PARAM");
        return;
    }

    let vganancia = vcompra * (putilidad / 100);
    let vventa = vcompra * (1 + putilidad / 100 + piva / 100);

    document.getElementById("resultados").innerHTML =
        `
		<div class="ml-3 alert alert-primary" role="alert">
		Valor de la venta: ${Number(Math.round(vventa)).toLocaleString("es-CO")}
		</div>
		<div class="ml-3 alert alert-primary" role="alert">
		Ganancia: ${Number(Math.round(vganancia)).toLocaleString("es-CO")}
		</div>
		`;

    document.calculadora.vcompra.value = '';
    document.calculadora.putilidad.value = '';
    document.calculadora.piva.value = '';

}

const alertaErrorCalculo = (motivo) => {
    let mensaje = "Error sin especificar";
    switch (motivo) {
        case "FALTA_PARAM":
            mensaje = `
			<div class="alert alert-danger" role="alert">
				Complete los parámetros en el formulario
			</div>
			`
            break;
        case "INVALID_PARAM":
            mensaje = `
			<div class="alert alert-danger" role="alert">
				Hay parámetros invalidos
			</div>
			`
            break;
    }
    document.getElementById("resultados").innerHTML =
        `<span>${mensaje}<span>`;
}

document.calculadora.btnCalcular.addEventListener("click", calcularValores);

const formulario = document.getElementById("convertidorForm");

const FACTOR = {
	"b": 1,
	"k": 1024,
	"m": 1048576,
	"g": 1073741824,
	"t": 1099511627776
};

const convertir = () => {
	let valor = formulario.valor.value;
	let uOrigen = formulario.tipo.value;
	let uDestino = formulario.convertir.value;

	if (valor < 0) {
		Swal.fire('No se admiten valores negativos');
		return;
	}

	if (uOrigen === uDestino) {
		Swal.fire(
			'Por favor, seleccione diferentes unidades de conversión.',
			'Error',
			'error'
		);
		return;
	}

	let calculo = valor * FACTOR[uOrigen] / FACTOR[uDestino];
	if (!isNaN(calculo)) {
		Swal.fire({
			position: 'top-end',
			icon: 'success',
			title: `Resultado ${Number(calculo).toLocaleString("es-CO")}`,
			showConfirmButton: true,
		});
	} else {
		Swal.fire(
			'Error en los parámetros.',
			'Error',
			'error'
		);
	}
}
formulario.btnConvertir.addEventListener("click", convertir);
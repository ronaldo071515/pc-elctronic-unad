

/* boton */
let btn = document.querySelector('#btnConvertir');
let valor = document.querySelector('#valor');
let tipo = document.querySelector('#tipo');
let valor_conver = document.querySelector('#convertir');

const calcular = () => {

	if (tipo.value === 'b' && valor_conver.value === 'b') {
		alert('Error, byte a byte es lo mismo!');
	}
	if ( tipo.value === 'b' && valor_conver.value === 'k') {
		const kilobyte = valor.value / 1000;
		console.log(kilobyte);
	}

}

btn.addEventListener('click', calcular)
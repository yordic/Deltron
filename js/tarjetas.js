const tarjeta = document.querySelector('#tarjeta');
    btnAbrirFormulario = document.querySelector('#btn-abrir-formulario'),
    formulario =document.querySelector ('#formulario-tarjeta');
    numeroTarjeta = document.querySelector('#tarjeta .numero');
    nombreTarjeta = document.querySelector('#tarjeta .nombre');
    logoMarca = document.querySelector('#logo-marca'),
    firma = document.querySelector('#tarjeta .firma p'),
    mesExpiracion = document.querySelector('#tarjeta .mes'),
    yearExpiracion = document.querySelector('#tarjeta .year');
    ccv = document.querySelector('#tarjeta .ccv');

// * Rotacion de la tarjeta
tarjeta.addEventListener('click', () => {
    tarjeta.classList.toggle('active');
    });
// * Boton de abrir comentario
btnAbrirFormulario.addEventListener('click', ()=> {
    btnAbrirFormulario.classList.toggle('active')
    formulario.classList.toggle('active');
});

//* select del mes generado automaticamente
for(let i = 1; i <= 12; i++){
let opcion = document.createElement('option');
opcion.value = i;
opcion.innerText = i;
formulario.selectMes.appendChild(opcion);

}

//* select del año generado automaticamente
const yearActual = new Date().getFullYear();
for(let i = yearActual; i<= yearActual + 8; i ++){
    let opcion = document.createElement('option');
    opcion.value = i;
    opcion.innerText = i;
    formulario.selectYear.appendChild(opcion);    
}

//* Input numero de tarjeta spacex4 - repalce reemplaza letras o espacio por nada

formulario.inputNumero.addEventListener('keyup', (e) => {
    let valorInput = e.target.value;

    formulario.inputNumero.value = valorInput
    // eliminamos espacios en blanco
    .replace(/\s/g, '')
    // eliminar las letras 
    .replace(/\D/g, '')
    // Espacio cada cuatro numeros
    .replace(/([0-9]{4})/g, '$1 ' )
    // eliminar ultimo espaciado
    .trim();
    //nnumero de tarjeta 
    numeroTarjeta.textContent = valorInput;

//VISA

if(valorInput[0] == 4){
    logoMarca.innerHTML = '';
    const imagen = document.createElement('img');
    imagen.src = '../img/tarjetas/logos/visa.png';
    logoMarca.appendChild(imagen);

// MASTERCARD
} else if(valorInput[0] == 5){
    logoMarca.innerHTML = '';
    const imagen = document.createElement('img');
    imagen.src = '../img/tarjetas/logos/mastercard.png';
    logoMarca.appendChild(imagen);
//DINERSCLUB
}else if(valorInput[0] == 3){
    logoMarca.innerHTML = '';
    const imagen = document.createElement('img');
    imagen.src = '../img/tarjetas/logos/dinersClub.png';
    logoMarca.appendChild(imagen);
//AMERICAN
}else if(valorInput[0] == 6){
    logoMarca.innerHTML = '';
    const imagen = document.createElement('img');
    imagen.src = '../img/tarjetas/logos/americanExpress.png';
    logoMarca.appendChild(imagen);
}

mostrarFrente();
});

// * Input nombre de tarjeta
formulario.inputNombre.addEventListener('keyup', (e) => {
	let valorInput = e.target.value;

	formulario.inputNombre.value = valorInput.replace(/[0-9]/g, '');
	nombreTarjeta.textContent = valorInput;
	firma.textContent = valorInput;

	if(valorInput == ''){
		nombreTarjeta.textContent = 'Jhon Doe';
	}

	mostrarFrente();
});

// * Select mes
formulario.selectMes.addEventListener('change', (e) => {
	mesExpiracion.textContent = e.target.value;
	mostrarFrente();
});

// * Select Año
formulario.selectYear.addEventListener('change', (e) => {
	yearExpiracion.textContent = e.target.value.slice(2);
	mostrarFrente();
});

// * CCV
formulario.inputCCV.addEventListener('keyup', () => {
	if(!tarjeta.classList.contains('active')){
		tarjeta.classList.toggle('active');
	}

	formulario.inputCCV.value = formulario.inputCCV.value
	// Eliminar los espacios
	.replace(/\s/g, '')
	// Eliminar las letras
	.replace(/\D/g, '');

	ccv.textContent = formulario.inputCCV.value;
});



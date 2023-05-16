const inputCard = document.querySelector("#inputCard");
const inputDate = document.querySelector("#inputDate");
const inputCVV = document.querySelector("#inputCVV");
const btn = document.querySelector(".btn");

/* MASCARA */
const maskNumber = "####-####-####-####";
const maskDate = "##/##";
const maskCVV = "###";

let current = "";
let cardNumber = [];
let dateNumber = [];
let cvvNumber = [];

/* Keydown: Detecta la tecla presionada */
//Cuando en el inputCard que es el input donde se pone los numeros
//se presiona la tecla tab hace que salte al siguiente input

inputCard.addEventListener("keydown", (e) => {
  if (e.key == "Tab") {
    return;
  }

  e.preventDefault();
  //La funcion se llama cada vez que presionamos una tecla

  handleInput(
    maskNumber,
    e.key,
    cardNumber
  ); /* Mascara/  teclaPresionada/  arreglo([]) */
  inputCard.value = cardNumber.join("");
  //El join hace que se unan los valores que se ingresaron debido a que
  //cardNumber es un arreglo y lo convertimos a texto acced
});

inputDate.addEventListener("keydown", (e) => {
  if (e.key == "Tab") {
    return;
  }

  e.preventDefault();
  //La funcion se llama cada vez que presionamos una tecla

  handleInput(
    maskDate,
    e.key,
    dateNumber
  ); /* Mascara/teclaPresionada/arreglo */
  inputDate.value = dateNumber.join("");
});

inputCVV.addEventListener("keydown", (e) => {
  if (e.key == "Tab") {
    return;
  }

  e.preventDefault();
  //La funcion se llama cada vez que presionamos una tecla

  handleInput(maskCVV, e.key, cvvNumber); /* Mascara/teclaPresionada/arreglo */
  inputCVV.value = cvvNumber.join("");
});

function handleInput(mask, key, arr) {
  //Verificamos que solo se puedan poner numeros y no letras
  let numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

  if (key == "Backspace" && arr.length > 0) {
    arr.pop();
    return;
  }

  //Numero incluido en arreglo && verificar que sea menor que el arreglo maskNumber = 19
  if (numbers.includes(key) && arr.length + 1 <= mask.length) {
    if (mask[arr.length] == "-" || mask[arr.length] == "/") {
      arr.push(mask[arr.length], key);
    } else {
      arr.push(key);
    }
  }
}
//metodo utilizado para mensajes emergentes
btn.addEventListener("click", () => {
  if (
    (inputCard.value.trim() == "",
    inputDate.value.trim() == "",
    inputCVV.value.trim() == "")
  ) {
    Swal.fire(
      //Librería
      "Complete los datos de la tarjeta",
      "verificar datos",
      "error"
      //Notificación de error
    );
  } else {
    Swal.fire({
      icon: "success",
      title: "Pago realizado con exito",
      //Notificación de éxito
    });

    //Tiempo de ejecución para regresar a la página principal
    setTimeout(() => {
      window.location = "principal.php";
    }, 2300);
  }
});

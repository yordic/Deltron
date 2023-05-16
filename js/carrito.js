let carritoVisible = false;
let total = 0;
const botones = document.querySelectorAll('.btn-eliminar');
const sumarCantidad = document.querySelectorAll('.sumar-cantidad');
const restarCantidad = document.querySelectorAll('.restar-cantidad');
const btnAgregar = document.querySelectorAll('.boton-item');
const btnPagar = document.querySelector('.btn-pagar');
const item = document.querySelectorAll('.item');
const detalles = document.querySelectorAll('.details');

item.forEach(item=>{
    item.addEventListener('click',()=>{
       
        item.querySelector('.details').classList.toggle('active');
    })
})

const titulos = document.querySelectorAll('.carrito-item-titulo');
var carritoItems = document.querySelector('.carrito-items');

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready() {
    botones.forEach((e) => {
        e.addEventListener('click', eliminarCarrito);
    });

    sumarCantidad.forEach((e) => {
        e.addEventListener('click', sumarN);
    });

    restarCantidad.forEach((e) => {
        e.addEventListener('click', restarN);
    });

    /* Agregar los elementos al carrito */
    btnAgregar.forEach((e) => {
        
        e.addEventListener('click', agregarCarrito);
    })

    btnPagar.addEventListener('click',pagando);

}

function eliminarCarrito(e) {
    e.target.parentElement.remove();
    actualizarTotalCarrito();
    ocultarCarrito();

}


function actualizarTotalCarrito() {
    var carritoItems = document.querySelectorAll('.carrito-item-precio');

    total = 0;
    carritoItems.forEach((e) => {
        var precio = parseInt(e.textContent.replace("$", '').replace(".", ''));
        let cantidad = parseInt(e.parentElement.querySelector('.carrito-item-cantidad').value);
        total += (precio * cantidad);

    })



    total = Math.round(total * 100) / 100;

    document.querySelector('.carrito-precio-total').innerText = total.toLocaleString('es') + ',00';
}

function ocultarCarrito() {
    var carritoItems = document.querySelector('.carrito-items');
    if (carritoItems.childElementCount == 0) {
        var carritoContenedor = document.querySelector('.carrito');
        carritoContenedor.style.marginRight = "-100%";
        carritoContenedor.style.opacity = "0";
        carritoVisible = false;

        /* Maximizamos el panel de relojes (en pantalla de PC) */
        var item = document.querySelector('.contenedor-items');
        item.style.width = '100%';
    }else{
        
    }

}

function sumarN(e) {
    e.target.parentElement.querySelector('.carrito-item-cantidad').value++;
    actualizarTotalCarrito()
}

function restarN(e) {
    num1 = e.target.parentElement.querySelector('.carrito-item-cantidad');
    if (num1.value > 1) {
        num1.value--;
        actualizarTotalCarrito();
    }

}

function agregarCarrito(e) {

    
    hacerVisible();
    const tar = e.target.parentElement;
    
    const titulo = tar.querySelector('.titulo-item').textContent
    const precio = tar.querySelector('.precio-item').textContent
    const img = tar.querySelector('.img-item').src;


    agregarItemCarrito(titulo, precio, img);



}

function agregarItemCarrito(titulo, precio, img) {
    var encontrado = false;
const titulos = document.querySelectorAll('.carrito-item-titulo');

    titulos.forEach((e) => {
        if (e.textContent == titulo) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Este producto ya esta seleccionado',
              })
            encontrado = true;
            console.log('Buscando');
            return;
        }
    });

    
    if (encontrado == false) {
        var itemCarritoContenido = ` 
            <div class="carrito-item">
                <img src="${img}" width="80px">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">${titulo}</span>
                    
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" name = "cantidad" value="1" class="carrito-item-cantidad" readonly>
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    
                    <span class="carrito-item-precio">${precio}</span>
                </div>
                <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </div>`;
        carritoItems.insertAdjacentHTML('beforeend',itemCarritoContenido);
        const nuevoElemento = carritoItems.querySelectorAll('.carrito-item');
        nuevoElemento.forEach((e)=>{
            e.querySelector('.btn-eliminar').addEventListener('click', eliminarCarrito);
            e.querySelector('.sumar-cantidad').addEventListener('click', sumarN);
            e.querySelector('.restar-cantidad').addEventListener('click', restarN);

        })
    actualizarTotalCarrito();




    }

}


function hacerVisible() {
    carritoVisible = true;
    var carrito = document.querySelector('.carrito');
    carrito.style.marginRight = '0';
    carrito.style.opacity = '1';

    var items = document.querySelector('.contenedor-items');
    items.style.width = '60%'
    
}


function pagando(params) {

        const names = document.querySelectorAll('.carrito-item-titulo');
        let nombreT = '';
      
      names.forEach((e, i) => {
        nombreT += e.textContent;
        if (i !== names.length - 1) {
          nombreT += "  -  ";
         
      
        }
      });
      
      
      const precioUnit = document.querySelectorAll('.carrito-item-precio');
      /* Array = si es que pongo un length saldra la cantidad que contiene este array */
      
      let precioT = '';
      precioUnit.forEach((e,i) => {
          precioT += e.textContent;
          if(i !== precioUnit.length-1){
              precioT += "  -  ";
          }
      });
      
      
      
      const cantidad = document.querySelectorAll('.carrito-item-cantidad');
      let cantidadT = '';
      cantidad.forEach((e,i)=>{
          cantidadT += e.value;
      
          if(i !== cantidad.length-1){
              cantidadT += "  -  "
          }
          
      })
      
      
      
      
      const precioTotal = document.querySelector('.carrito-precio-total').textContent;
      document.querySelector('.inputV').value = precioTotal;
      
      
      
      
      
      
      document.querySelector('.nameProduct').value = nombreT;
      document.querySelector('.carritoCantidad').value = cantidadT;
      document.querySelector('.precioUnitario').value = precioT;
      document.querySelector('.inputV').value = precioTotal;
      
      
      console.log('Click');
      
    

/* window.location.href = "../index.php"; */


    /* actualizarTotalCarrito();
    ocultarCarrito(); */
}




// Obtener la URL actual
var urlActual = window.location.href;

console.log(urlActual);
var queryString = urlActual.split("?")[1];
var parametros = queryString.split("&");

// Recorrer los parámetros y encontrar el valor de bloquearBtn
var bloquearBtn = false;
for (var i = 0; i < parametros.length; i++) {
  var parametro = parametros[i].split("=");
  if (parametro[0] == "bloquearBtn") {
    bloquearBtn = (parametro[1] == "true");
    break;
  }
}

// Utilizar la variable bloquearBtn según sea necesario
console.log("La variable bloquearBtn es:", bloquearBtn);

if(bloquearBtn == false){
    console.log('Variablen false/ Desbloqueando botones');
   
}else if(bloquearBtn == true){
    console.log('Variable true/Bloqueando botones');
    const miBoton = document.querySelectorAll(".boton-item");

    miBoton.forEach((e)=>{
        e.addEventListener("mouseover", () => {
            console.log("El mouse está sobre el botón");
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Tiene que iniciar sesion',
              })
    
          });
    
          e.style.backgroundColor = "rgb(191, 191, 191)";
          e.style.color = "#656464";
          e.style.cursor = "not-allowed";
          
    })
}










/* let bloquearBoton = true;


if(bloquearBoton == true){
    const miBoton = document.querySelectorAll(".boton-item");

    miBoton.forEach((e)=>{
        e.addEventListener("mouseover", () => {
            console.log("El mouse está sobre el botón");
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Tiene que iniciar sesion',
              })
    
          });
    
          e.style.backgroundColor = "rgb(191, 191, 191)";
          e.style.color = "#656464";
          e.style.cursor = "not-allowed";
          
    })
} */







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario tarjeta de credito dinamico</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.17/jspdf.plugin.autotable.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Style/tarjetas.css">

</head>

<body>
    <div class="contenedor">

        <section class="tarjeta" id="tarjeta">
            <div class="delantera">
                <div class="logo-marca" id="logo-marca">
                    <!--<img src="img/logos/visa.png" alt="">-->
                </div>
                <img src="../img/tarjetas/chip-tarjeta.png" class="chip" alt="">
                <div class="datos">
                    <div class="grupo" id="numero">
                        <p class=" label">Numero Tarjera</p>
                        <p class="numero">#### #### #### ####</p>
                    </div>
                    <div class="flexbox">
                        <div class="grupo" id="nombre">
                            <p class="label">Nombre Tarjeta</p>
                            <p class="nombre">COOLBOXNET</p>
                        </div>
                        <div class="grupo" id="expiracion">
                            <p class="label"> Expiracion </p>
                            <p class="expiracion"><span class="mes">MM</span> / <span class="year"> AA</span></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="trasera">
                <!--Barra magnetica -->
                <div class="barra-magnetica"></div>
                <div class="datos">
                    <div class="grupo" id=firma>
                        <p class="label"> Firma</p>
                        <div class="firma">
                            <p></p>
                        </div>
                    </div>
                    <div class="grupo" id="ccv">
                        <p class="label">CCV</p>
                        <p class="ccv"></p>
                    </div>
                </div>
                <p class="leyenda">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
                    expercitationem, voluptates illo.
                </p>
                <a href="#" class="link-banco">www.tubanco.com</a>
            </div>

        </section>
        <!--Contenedor boton abrir formulario -->
        <div class="contenedor-btn">
            <button class="btn-abrir-formulario" id="btn-abrir-formulario">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </button>
        </div>
        <!--Formulario -->
        <form action="" id="formulario-tarjeta" class="formulario-tarjeta">

            <?php
            if (isset($_GET["producto"])) {
                $producto = $_GET["producto"];
                $cantidad = $_GET['cantidad'];
                $precio = $_GET['precio'];
                $total = $_GET['total'];
                $fecha = $_GET['fecha'];

                $nombre = $_GET['nombre'];
                $apellido = $_GET['apellido'];
                $direccion = $_GET['direccion'];
                $telefono = $_GET['telefono'];
            }
            ?>



            <div class="grupo">
                <label for="inputNumero"> Número Tarjeta</label>
                <input type="text" id="inputNumero" maxlength="19" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputNombre">Nombre</label>
                <input type="text" id="inputNombre" maxlength="30" autocomplete="off">
            </div>
            <!--------MES Y AÑO ----------->
            <div class="flexbox">
                <div class="grupo expira">
                    <label for="for selecMes">Expiracion</label>
                    <div class="flexbox">
                        <div class="grupo-select">
                            <select name="mes" id="selectMes">
                                <option disabled selected>Mes</option>
                            </select>
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="grupo-select">
                            <select name="year" id="selectYear">
                                <option disabled selected>Año</option>
                            </select>
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                    </div>
                </div>

                <div class="grupo ccv">
                    <label for="inputCCV">CCV</label>
                    <input type="text" id="inputCCV" maxlength="3">
                </div>
            </div>
            <button type="button" onclick="generatePDF()" class="btn-enviar">Enviar</button>


        </form>
    </div>

    <script src="../js/img.js"></script>
    <script>
        const ValorProducto = "<?php echo $producto ?>"
        const Valorcantidad = "<?php echo $cantidad ?>"
        const Valorprecio = "<?php echo $precio ?>"
        const Valortotal = "<?php echo $total ?>"
        const Valorfecha = "<?php echo $fecha ?>"

        const nombre = "<?php echo $nombre ?>"
        const apellido = "<?php echo $apellido ?>"
        const direccion = "<?php echo $direccion ?>"
        const telefono = "<?php echo $telefono ?>"


        const numTarjeta = document.querySelector("#inputNumero");





        const encabezados = ['Productos', 'Cantidad', 'Precio']

        const arreglo = [];
        let data = [];
        let nuevoArreglo = [];
        let arregloFinal = [];

        arreglo.push(ValorProducto, Valorcantidad, Valorprecio);

        data = arreglo.map(elemento => elemento.split(" - "));
        /* data.unshift(encabezados); */ //Agregar encabezado
        console.log("----------------------------");
        console.log(data);
        console.log("----------------------------");



        const resultado = [];

        // Obtener la longitud del primer subarreglo
        const len = data[0].length;

        for (let i = 0; i < len; i++) {
            const item = [];

            // Iterar por cada subarreglo y obtener el valor correspondiente
            for (let j = 0; j < data.length; j++) {
                item.push(data[j][i].trim());
            }

            resultado.push(item);
        }

        resultado.unshift(encabezados)
        console.log(resultado);




        const inputCard = document.querySelector('#inputNumero');
        const inputDate = document.querySelector('#inputDate');
        const inputCVV = document.querySelector('#inputCVV');

        const nombreTar = document.querySelector('#inputNombre');

        const CVV_Import = document.querySelector('#inputCCV');




        function generatePDF(e) {

              console.log(inputCard.value);
              console.log(nombreTar.value);
              console.log(CVV_Import.value);

              if(inputCard.value == "" || nombreTar.value == "" || CVV_Import.value == ""){
                Swal.fire({
                icon: 'warning',
                title: 'Completar los datos',
            })
              }else{

              

          


            const fechaActual = new Date();

            const dia = fechaActual.getDate();
            const mes = fechaActual.getMonth() + 1; // Sumar 1 porque enero es 0
            const anio = fechaActual.getFullYear();

            const hora = formatTime(fechaActual.getHours());
            const minutos = formatTime(fechaActual.getMinutes());
            const segundos = formatTime(fechaActual.getSeconds());



            function formatTime(time) {
                return time < 10 ? (`0${time}`) : time;

            }
            const FechaH = `Fecha de la factura: ${dia}/${mes}/${anio}`;

            const TiempoH = `Hora de la factura: ${hora}:${minutos}:${segundos}`



            var doc = new jsPDF();

            doc.autoTable({
                head: [resultado[0]], // se utiliza en la opción head para referirse a la primera fila de la matriz data, que es la fila de encabezado de la tabla.

                body: resultado.slice(1), //Obtenemos el array pero excluyendo la posicion 0 de cada array 
                theme: 'striped',
                styles: {
                    cellPadding: 6,
                    fontSize: 15,
                    valign: 'middle',

                    halign: 'center' //Texto alineado
                },
                columnStyles: {
                    0: {
                        cellWidth: 50
                    },
                    1: {
                        cellWidth: 50
                    },
                    2: {
                        cellWidth: 50
                    }
                },
                startY: 100,

            });

            doc.setFontSize(30);
            doc.text("COOLBOXNET", 15, 15);
            doc.setFontSize(15);
            doc.text(TiempoH, 130, 50);
            doc.text(FechaH, 130, 60);

            doc.text("Realizado por: ", 15, 50);
            doc.text(nombre + " " + apellido, 15, 60);

            doc.text("Direccion: ", 15, 73);
            doc.text(direccion, 15, 83);

            doc.text("Telefono: ", 130, 73);
            doc.text(telefono, 130, 80);

            doc.addImage(imgData, 160, 5, 40, 40);










            // Agregar el texto del precio total debajo de la tabla
            const precioTotalTexto = "PRECIO TOTAL: $" + Valortotal;

            const precioTotalPosicionX = doc.internal.pageSize.width - doc.getTextWidth(precioTotalTexto) - 50;

            doc.text(precioTotalTexto, precioTotalPosicionX, doc.autoTable.previous.finalY + 10);



            Swal.fire({
                icon: 'success',
                title: 'Pago realizado con exito',
            })


            doc.save('tabla.pdf');

            setInterval(() => {
            window.location.href = "../principal.php"
                
            }, 1800);


        }

    }
    </script>


    <script src="../js/tarjetas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://kit.fontawesome.com/3922c9a6a2.js" crossorigin="anonymous"></script>

</body>

</html>
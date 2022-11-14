
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabaco y Chanel</title>
    <link rel="icon" href="img/icono.png">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Vinculando Links Remember mis estilos peronaliados al final -->

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;700;900&display=swap" rel="stylesheet">



    <!-- vincular los plugins del css -->
    <link rel="stylesheet" href="css/plugins/jquery.jdSlider.css">
    <link rel="stylesheet" href="css/midarling.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- vincular los plugins del js -->
    <script src="js/plugins/jquery.jdSlider-latest.js"></script>

</head>

<body>
    <style>
        /* ESCRITORIO XL 1366px en adelante */


/* -------------------------------------
-------------GLOBALES-------------------
---------------------------------------- */

* {
    /* font-family: 'Open Sans', sans-serif; */
    font-family: 'PT Serif', serif;
}

ul,
ol {
    list-style: none;
}

a:visited,
a:link,
a:focus,
a:hover,
a:active {
    list-style: none;
    text-decoration: none;
    color: black;
}

.t-15 {
    font-size: 15px;
}

.t-20 {
    font-size: 20px;
}

.t-25 {
    font-size: 25px;
}

.t-30 {
    font-size: 30px;
}

.bg-black {
    background: black;
}

.text-darling {
    color: #f5d208;
}

.boton {
    background: black;
    color: #f5d208;
    border-radius: 5px;
}

.boton-invertido {
    background: #f5d208;
    color: black;
    border-radius: 5px;
    cursor: pointer;
    border: 1px solid black;
}

.botonF {
    background: #879EDC;
}

.botonG {
    background: #96E8A6;
}

.seccionMenu::-webkit-scrollbar {
    width: 0px;
}

body::-webkit-scrollbar {
    width: 5px;
}

body::-webkit-scrollbar-thumb {
    background: #f5d208;
    border: 1px solid black;
}

.cabecera h2 {
    font-size: 40px;
    padding-left: 10%;
}

.cabecera p {
    font-size: 40px;
}

.cabecera p:hover {
    font-weight: 900;
    cursor: pointer;
}

.soloPeru {
    color: #f5d208;
    font-size: 40px;
    position: fixed;
    bottom: 0px;
}

.otherWindow {
    background: rgba(0, 0, 0, .9);
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: 1000;
    overflow-y: auto;
}


/* =========================================================PRELOADER==================================================================*/

.preload {
    background: black;
    width: 100%;
    height: 100%;
    z-index: 1000;
    position: fixed;
    transition: 1s all;
}

.porcentaje {
    position: absolute;
    color: #f5d208;
    font-size: 50px;
    width: 100%;
    text-align: center;
    top: 60%;
}

.linea {
    position: absolute;
    background: black;
    width: 100%;
    height: 150px;
    top: 40%;
}

.relleno img {
    position: absolute;
    width: 150px;
    height: 150px;
    top: 0%;
    left: 0%;
    transition: 1s all;
}

.relleno .rellenito {
    height: 150px;
    background: black;
    width: 0%;
}

.fondoAmarillo {
    background: #f5d208;
}


/* =========================================================SECCION INSTRUCCIONES======================================================*/

.seccionInstrucciones {
    display: none;
}


/* =========================================================SECCION DINERO REAL========================================================*/

.seccionDineroReal {
    display: none;
}


/* =========================================================SECCION NOSOTROS===========================================================*/

.seccionNosotros {
    display: none;
}


/* =========================================================SECCION DARLIN=============================================================*/

.seccionDarling {
    display: none;
}


/* ===========================================================MENU=====================================================================*/

.seccionMenu {
    background: rgba(0, 0, 0, .9);
    width: 100%;
    height: 100%;
    z-index: 100;
    position: fixed;
    overflow-y: scroll;
    overflow-x: hidden;
    top: 100%;
    display: none;
    transition: .5s all;
}

.seccionMenu .grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

.seccionMenu .grid-item:nth-child(1) {
    height: 250px;
}

.seccionMenu .grid-item:nth-child(2) {
    height: 350px;
}

.seccionMenu .grid-item:nth-child(3) {
    height: 250px;
}

.seccionMenu .grid-item:nth-child(2) h3 {
    font-size: 35px;
    margin: 20px 0px;
    color: #f5d208;
}

.seccionMenu .grid-item:nth-child(2) h3:hover {
    font-weight: 900;
    cursor: pointer;
}

.seccionMenu .izquierda .row div:nth-child(1) p,
.seccionMenu .derecha .row div:nth-child(1) p {
    font-size: 30px;
    font-weight: 900;
    color: #f5d208;
}

.seccionMenu .izquierda .row div:nth-child(2) p,
.seccionMenu .derecha .row div:nth-child(2) p {
    font-size: 30px;
    padding: 10px 15px;
    border-radius: 5px;
    transition: .1s all;
}

.seccionMenu .izquierda .row div:nth-child(2) p:hover,
.seccionMenu .derecha .row div:nth-child(2) p:hover {
    cursor: pointer;
    font-weight: 900;
}

.seccionMenu .izquierda .row div:nth-child(3) p,
.seccionMenu .derecha .row div:nth-child(3) p {
    font-size: 30px;
    padding: 10px 15px;
    border-radius: 5px;
    transition: .1s all;
}

.seccionMenu .izquierda .row div:nth-child(3) p:hover,
.seccionMenu .derecha .row div:nth-child(3) p:hover {
    cursor: pointer;
    font-weight: 900;
}


/* ===========================================================HEADER===================================================================*/

header .grid-container {
    display: grid;
    grid-template-columns: 4fr 3fr 1fr 1fr 1fr;
    column-gap: 5px;
}

header .grid-item {
    height: 100px;
}

header .logo-container {
    display: grid;
    grid-template-columns: 3fr 1fr;
}

header .logo-container:hover {
    cursor: pointer;
}

header .logo-item {
    height: 100px;
}

header .logo-item:nth-child(1) h1 {
    margin-top: 20px;
    font-size: 45px;
    font-weight: 400;
}

header .logo-item:nth-child(2) {
    background: url(../img/icono.png);
    background-size: cover;
    background-position: center;
    width: 90%;
}

header .grid-item:nth-child(3) img {
    width: 90%;
    transition: .1s all;
}

header .grid-item:nth-child(3) img:hover {
    cursor: pointer;
    width: 95%;
}

header .grid-item:nth-child(4) img {
    width: 90%;
    transition: .1s all;
}

header .grid-item:nth-child(4) img:hover {
    cursor: pointer;
    width: 95%;
}

header .grid-item:nth-child(5) i {
    font-size: 70px;
    margin-top: 13px;
    transition: .1s all;
}

header .grid-item:nth-child(5) i:hover {
    cursor: pointer;
    font-size: 75px;
}


/* PRESENTACION */

.grid-presentacion {
    display: grid;
    grid-template-columns: 1fr 1fr;
}


/* ==============================================SECCION TESTIMONIOS==================================================================*/

.seccionTestimonios {
    display: none;
}

.seccionTestimonios .grid-container {
    transition: 1s all;
    margin-top: 200%;
}

.seccionTestimonios .grid-container {
    display: grid;
    row-gap: 20px;
}

.seccionTestimonios .grid-item {
    background: #f5d208;
    border-radius: 5px;
}

.seccionTestimonios .grid-item:nth-child(1) .testimonio-container,
.seccionTestimonios .grid-item:nth-child(2) .testimonio-container,
.seccionTestimonios .grid-item:nth-child(3) .testimonio-container,
.seccionTestimonios .grid-item:nth-child(4) .testimonio-container,
.seccionTestimonios .grid-item:nth-child(5) .testimonio-container,
.seccionTestimonios .grid-item:nth-child(6) .testimonio-container,
.seccionTestimonios .grid-item:nth-child(7) .testimonio-container,
.seccionTestimonios .grid-item:nth-child(8) .testimonio-container,
.seccionTestimonios .grid-item:nth-child(9) .testimonio-container,
.seccionTestimonios .grid-item:nth-child(10) .testimonio-container {
    display: grid;
}

.seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) img,
.seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) img,
.seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) img,
.seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) img,
.seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) img,
.seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) img,
.seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) img,
.seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) img,
.seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) img,
.seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) img {
    width: 50%;
    border: 1px solid black;
}

.seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) p,
.seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) p,
.seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) p,
.seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) p,
.seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) p,
.seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) p,
.seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) p,
.seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) p,
.seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) p,
.seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) p {
    font-size: 25px;
    margin-top: 7px;
    margin-bottom: 0px;
}

.seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(2) p,
.seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(2) p,
.seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(2) p,
.seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(2) p,
.seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(2) p,
.seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(2) p,
.seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(2) p,
.seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(2) p,
.seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(2) p,
.seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(2) p {
    margin: 0;
}


/* ===========================================================FOOTER===================================================================*/

footer {
    position: fixed;
    bottom: 0px;
    /* border-top: 1px solid black; */
}

.grid-redes {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

.abs-center {
    display: flex;
    align-items: center;
    justify-content: center;
    /* min-height: 100vh; */
}

.ongRegistro {
    display: none;
}

.grid-nosotros {
    margin-top: 80px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    column-gap: 10px;
}


/* -------------------------------------
-------TABLET HORIZONTAL LG 1024px------
---------------------------------------- */

@media(max-width:1199px) and (min-width:992px) {
    /* HEADER */
    header .logo-item:nth-child(1) h1 {
        margin-top: 12px;
        font-size: 55px;
    }
    header .logo-item:nth-child(2) {
        width: 100%;
    }
    header .grid-item:nth-child(3) img {
        margin-top: 8px;
        width: 95%;
    }
    header .grid-item:nth-child(3) img:hover {
        width: 100%;
    }
    header .grid-item:nth-child(4) img {
        margin-top: 8px;
        width: 95%;
    }
    header .grid-item:nth-child(4) img:hover {
        width: 100%;
    }
    header .grid-item:nth-child(5) i {
        font-size: 70px;
        margin-top: 15px;
    }
    /* SECCION PRESENTACION */
    .seccionPresentacion {
        margin: 10% 0%;
    }
    .seccionPresentacion .grid-item {
        height: 340px;
    }
    .seccionPresentacion .grid-item:nth-child(1) img {
        width: 99%;
    }
    .seccionPresentacion .grid-item:nth-child(2) p {
        font-size: 35px;
        margin: 12px 0px;
    }
    /* SECCION TESTIMONIOS */
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) img {
        width: 60%;
    }
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) p {
        font-size: 25px;
        margin-top: 8px;
        margin-bottom: 0px;
    }
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(2) p {
        font-size: 15px;
    }
}


/* -------------------------------------
-------TABLET VERTICAL MD 768px---------
---------------------------------------- */

@media(max-width:991px) and (min-width:768px) {
    /* SECCION MENU */
    .seccionMenu .grid-item:nth-child(1) {
        height: 250px;
    }
    .seccionMenu .grid-item:nth-child(2) {
        height: 280px;
    }
    .seccionMenu .grid-item:nth-child(3) {
        height: 250px;
    }
    .seccionMenu .grid-item:nth-child(2) h3 {
        font-size: 30px;
        margin: 15px 0px;
    }
    .seccionMenu .izquierda .row div:nth-child(1) p,
    .seccionMenu .derecha .row div:nth-child(1) p {
        font-size: 30px;
        font-weight: 900;
    }
    .seccionMenu .izquierda .row div:nth-child(2) p,
    .seccionMenu .derecha .row div:nth-child(2) p {
        font-size: 30px;
        padding: 10px 15px;
        border-radius: 5px;
    }
    .seccionMenu .izquierda .row div:nth-child(3) p,
    .seccionMenu .derecha .row div:nth-child(3) p {
        font-size: 30px;
        padding: 10px 15px;
        border-radius: 5px;
    }
    /* HEADER */
    header .grid-container {
        grid-template-columns: 4fr .5fr 1fr 1fr 1fr;
        column-gap: 0px;
    }
    header .logo-container {
        grid-template-columns: 3fr 1.1fr;
    }
    header .logo-item:nth-child(1) h1 {
        margin-top: 15px;
        font-size: 50px;
    }
    header .logo-item:nth-child(2) {
        width: 100%;
    }
    header .grid-item:nth-child(3) img {
        width: 90%;
        margin-top: 8px;
    }
    header .grid-item:nth-child(4) img {
        width: 90%;
        margin-top: 8px;
    }
    header .grid-item:nth-child(5) i {
        font-size: 70px;
        margin-top: 13px;
    }
    /* SECCION PRESENTACION */
    .seccionPresentacion .grid-container {
        grid-template-columns: 1fr;
    }
    .seccionPresentacion {
        margin: 8% 0%;
    }
    .seccionPresentacion .grid-item {
        height: 350px;
    }
    .seccionPresentacion .grid-item:nth-child(1) img {
        width: 70%;
    }
    .seccionPresentacion .grid-item:nth-child(2) p {
        font-size: 40px;
        text-align: center;
        margin: 50px 0px;
    }
    /* SECCION TESTIMONIOS */
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) img {
        width: 85%;
    }
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) p {
        font-size: 25px;
        margin-top: 8px;
        margin-bottom: 0px;
    }
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(2) p {
        font-size: 13.2px;
    }
    /* FOOTER */
    footer .grid-item:nth-child(1) div,
    footer .grid-item:nth-child(2) div,
    footer .grid-item:nth-child(3) div {
        height: 70px;
        margin: 15px 10px;
        border-radius: 5px;
    }
    footer .grid-item:nth-child(1) div p,
    footer .grid-item:nth-child(2) div p,
    footer .grid-item:nth-child(3) div p {
        font-size: 35px;
        padding-top: 8px;
    }
    footer .grid-item:nth-child(1) div p:hover,
    footer .grid-item:nth-child(2) div p:hover,
    footer .grid-item:nth-child(3) div p:hover {
        font-size: 38px;
    }
}


/* -------------------------------------
-------MOVIL HORIZONTAL SM 576px--------
---------------------------------------- */

@media(max-width:767px) and (min-width:576px) {
    /* PRELOADER */
    .porcentaje {
        top: 60%;
    }
    .linea {
        top: 10%;
    }
    /* SECCION MENU */
    .seccionMenu .grid-item:nth-child(1) {
        height: 200px;
    }
    .seccionMenu .grid-item:nth-child(2) {
        height: 235px;
    }
    .seccionMenu .grid-item:nth-child(3) {
        height: 200px;
    }
    .seccionMenu .grid-item:nth-child(2) h3 {
        font-size: 25px;
        margin: 15px 0px;
    }
    .seccionMenu .izquierda .row div:nth-child(1) p,
    .seccionMenu .derecha .row div:nth-child(1) p {
        font-size: 23px;
        font-weight: 900;
    }
    .seccionMenu .izquierda .row div:nth-child(2) p,
    .seccionMenu .derecha .row div:nth-child(2) p {
        font-size: 25px;
        padding: 10px 15px;
        border-radius: 5px;
    }
    .seccionMenu .izquierda .row div:nth-child(3) p,
    .seccionMenu .derecha .row div:nth-child(3) p {
        font-size: 25px;
        padding: 10px 15px;
        border-radius: 5px;
    }
    .soloPeru {
        font-size: 30px;
        position: relative;
    }
    /* HEADER */
    header .grid-container {
        grid-template-columns: 5fr 1fr 1fr;
        column-gap: 0px;
    }
    header .logo-container {
        grid-template-columns: 3fr 1.1fr;
    }
    header .logo-item:nth-child(1) h1 {
        margin-top: 15px;
        font-size: 50px;
    }
    header .logo-item:nth-child(2) {
        width: 100%;
    }
    header .grid-item:nth-child(5) i {
        font-size: 70px;
        margin-top: 13px;
    }
    /* SECCION PRESENTACION */
    .seccionPresentacion {
        margin: 10px 0px;
    }
    .seccionPresentacion .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .seccionPresentacion .grid-item {
        height: 190px;
    }
    .seccionPresentacion .grid-item:nth-child(1) img {
        width: 99%;
    }
    .seccionPresentacion .grid-item:nth-child(2) p {
        font-size: 20px;
        margin-top: 5px;
    }
    /* SECCION TESTIMONIOS */
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) img {
        width: 100%;
    }
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) p {
        font-size: 25px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(2) p {
        font-size: 12.2px;
    }
    /* FOOTER */
    footer .grid-container {
        grid-template-columns: 1fr;
    }
    footer .grid-item {
        height: 100px;
    }
    footer .grid-item:nth-child(4) div {
        height: 70px;
        margin: 15px 10px;
        border-radius: 5px;
    }
    footer .grid-item:nth-child(4) div p {
        font-size: 40px;
        transition: .1s all;
    }
    footer .grid-item:nth-child(4) div p:hover {
        cursor: pointer;
    }
}


/*--------------------------------------
------- MOVIL VERTICAL 320px------------
---------------------------------------- */

@media(max-width:575px) {
    /* PRELOADER */
    .porcentaje {
        top: 60%;
    }
    .linea {
        top: 30%;
    }
    /* SECCION MENU */
    .cabecera h2 {
        padding-left: 20%;
    }
    .seccionInstrucciones .cabecera h2 {
        padding-left: 5%;
    }
    .seccionDineroReal .cabecera h2 {
        padding-left: 5%;
    }
    .seccionMenu .grid-container {
        grid-template-columns: 1fr;
    }
    .seccionMenu .grid-item:nth-child(1) {
        height: 150px;
    }
    .seccionMenu .grid-item:nth-child(2) {
        height: 210px;
        grid-row-start: 1;
    }
    .seccionMenu .grid-item:nth-child(3) {
        height: 150px;
    }
    .seccionMenu .grid-item:nth-child(2) h3 {
        font-size: 25px;
        margin: 10px 0px;
    }
    .seccionMenu .izquierda .row div:nth-child(1) p,
    .seccionMenu .derecha .row div:nth-child(1) p {
        font-size: 20px;
        font-weight: 900;
    }
    .seccionMenu .izquierda .row div:nth-child(2) p,
    .seccionMenu .derecha .row div:nth-child(2) p {
        font-size: 25px;
        padding: 5px 0px;
        border-radius: 5px;
    }
    .seccionMenu .izquierda .row div:nth-child(3) p,
    .seccionMenu .derecha .row div:nth-child(3) p {
        font-size: 25px;
        padding: 5px 0px;
        border-radius: 5px;
    }
    .soloPeru {
        font-size: 20px;
        position: relative;
    }
    /* HEADER */
    header .grid-container {
        grid-template-columns: 4fr 1fr;
        column-gap: 0px;
    }
    header .grid-item {
        height: 88px;
    }
    header .logo-container {
        grid-template-columns: 2fr 1fr;
    }
    header .logo-item:nth-child(1) h1 {
        margin-top: 20px;
        font-size: 35px;
        font-weight: 100;
    }
    header .logo-item:nth-child(1) {
        height: 88px;
    }
    header .logo-item:nth-child(2) {
        width: 90px;
        height: 100%;
    }
    header .grid-item:nth-child(5) i {
        font-size: 50px;
        margin-top: 20px;
    }
    header .grid-item:nth-child(5) i:hover {
        font-size: 55px;
    }
    /* SECCION PRESENTACION */
    .seccionPresentacion {
        margin: 10px 0px;
    }
    .seccionPresentacion .grid-container {
        display: grid;
        grid-template-columns: 1fr;
    }
    .seccionPresentacion .grid-item {
        height: 190px;
    }
    .seccionPresentacion .grid-item:nth-child(1) img {
        width: 85%;
    }
    .seccionPresentacion .grid-item:nth-child(2) p {
        font-size: 20px;
        text-align: center;
        margin: 20px 10px;
    }
    /* SECCION TESTIMONIOS */
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) img,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) img {
        width: 42px;
    }
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(1) p,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(1) p {
        font-size: 20px;
        margin-top: 8px;
        margin-bottom: 5px;
    }
    .seccionTestimonios .grid-item:nth-child(1) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(2) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(3) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(4) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(5) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(6) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(7) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(8) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(9) .testimonio-item:nth-child(2) p,
    .seccionTestimonios .grid-item:nth-child(10) .testimonio-item:nth-child(2) p {
        font-size: 12.2px;
    }
    /* FOOTER */
    footer .grid-container {
        grid-template-columns: 1fr;
    }
    footer .grid-item {
        height: 88px;
    }
    footer .grid-item:nth-child(4) div {
        height: 58px;
        margin: 15px 10px;
        border-radius: 5px;
    }
    footer .grid-item:nth-child(4) div p {
        font-size: 30px;
        padding-top: 4px;
        transition: .1s all;
    }
    footer .grid-item:nth-child(4) div p:hover {
        cursor: pointer;
    }
}
    </style>
    <header class="container-fluid p-0" style="background-color: rgba(0, 0, 0, .1);">

        <div class="container p-0 ">

            <div class="grid-container">

                <!-- LOGOTIPO -->

                <div class="botonLogo grid-item">

                    <div class="logo-container">

                        <!-- LOGO -->

                        <div class="logo-item ">

                            <h1 class="pl-2">Tabaco y Chanel</h1>

                        </div>

                        <!-- ICONO -->

                        <div class="logo-item "></div>

                    </div>

                </div>

                <!-- ESPACIO EXTRA -->

                <div class="d-none d-sm-block grid-item"></div>

                @if (Route::has('login'))
                <div class="d-none d-md-block grid-item text-right pt-1">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            </div>

        </div>

    </header>

    <!-- CONTENT -->
    <div class="grid-presentacion container mt-3 p-0">
        <div class="grid-item">
            <img class="img-fluid" src="{{URL::asset('img/img1.webp')}}" alt="" style="border: 2px solid black;border-radius: 20px;">
        </div>
        <div class="grid-item" style="position: relative;">
            <p class="text-center" style="position: absolute; top: 0%;transform: translate(0%,50%);font-size: 25px;font-weight: 600;">
                Todos nosotros, con esfuerzo y disciplina, tenemos la capacidad de controlar nuestros pensamientos y nuestras acciones. Esto es parte del proceso del desarrollo de la madurez espiritual, física y emocional
            </p>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="container-fluid" style="height: 100px;width: 100%;background-color: rgba(0, 0, 0, .1);">
        <div class=" container " style="height: 100px;position: relative; ">

            <div class=" grid-redes" style="width: 500px;height: 100px;">
                <div class=" text-center">
                    <i class="fa-brands fa-square-whatsapp mt-3" style="font-size: 70px;cursor: pointer;"></i>
                </div>
                <div class=" text-center">
                    <i class="fa-brands fa-square-facebook mt-3" style="font-size: 70px;cursor: pointer;"></i>
                </div>
                <div class=" text-center">
                    <i class="fa-brands fa-square-instagram mt-3" style="font-size: 70px;cursor: pointer;"></i>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js "></script>
    <script src="https://kit.fontawesome.com/3fb3f6418b.js" crossorigin="anonymous"></script>
</body>

</html>

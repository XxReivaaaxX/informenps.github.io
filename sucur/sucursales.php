<?php
include_once '../consultphp/conexion_bd.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" type="img" href="../img/banco-falabella.svg" />
    <title>Sucursales</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            color: white;
        }

        body {
            color: #000;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
        }

        .contenedor {
            width: 97%;
            margin: auto;
        }

        header {
            padding: 12px 0;
        }

        .wrapper {
            display: flex;
            padding-top: 0px;
            justify-content: center;
            background-color: #008f39;
        }

        .collapsible {
            max-width: 450px;
            overflow: hidden;
            font-weight: 500;
        }

        .collapsible input {
            display: none;
        }

        .collapsible label {
            position: relative;
            font-weight: 600;
            /*background: white ; */
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.895) 0 4px 11px 0 rgba(0, 0, 0, 0.8);
            color: #BDECB6;
            display: block;
            margin-bottom: 10px;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
            z-index: 1;
            font-size: 18px;
            padding-left: 130px;
        }

        .collapsible label:after {
            content: "";
            position: absolute;
            right: 180px;
            width: 29px;
            height: 25px;
            background: url(../img/icon12.png) no-repeat 0 0;
            transition: all 0.3s ease;
        }

        .collapsible input:checked+label::after {
            transform: rotate(90deg);
        }

        .collapsible-text {
            max-height: 1px;
            overflow: hidden;
            border-radius: 4px;
            line-height: 1.4;
            position: relative;
            top: -100%;
            opacity: 0.5;
            transition: all 0.3s ease;
        }

        .collapsible input:checked~.collapsible-text {
            max-height: 300px;
            padding-bottom: 25px;
            /*background: green; */
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.895) 0 4px 11px 0 rgba(0, 0, 0, 0.8);
            opacity: 1;
            top: 0;
        }


        .collapsible-text p {
            padding-left: 15px;
            padding-right: 15px;
            font-size: 15px;

        }

        header .contenedor {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 125px;

        }

        header .logo {
            height: 130px;
            width: 10px;
            margin-left: 50px;
            padding-left: 0px;
            padding-top: 10px;

        }

        header nav a {
            color: #AAA;
            text-decoration: none;
            margin-right: 9px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 26px;
            justify-content: space-between;
            align-items: center;
            padding: 0%;
            width: 100px;
            height: 100px;

        }

        .imagen-principal {
            font-size: 16px;
            min-height: 18.10em;
            color: white;
            background: url(../img/fondo1fal.jpeg);
            border-radius: 80px;
            background-position: center center;
            background-size: cover;
            display: flex;
            padding: 5px;
        }

        /* SLIDER */
        main {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            /*background-color: #BDECB6;*/
        }

        .contenedorr img {
            max-width: 300%;
            width: 1000px;
        }

        .contenedorr {
            position: relative;
            max-width: 1000px;
            width: 100%;
            border-radius: 6px;
            overflow: hidden;
        }

        .contenedorr h1 {
            font-size: 40px;
            text-align: center;
            color: #000;
        }

        .contenedorr h2 {
            text-align: center;
            background: #008f39;
            margin-bottom: 10px;
            border-radius: 3px;
            border-bottom: 4px;
            font-size: 20px;
            color: #BDECB6;
        }

        .slider {
            display: flex;
            transform: translate3d(0, 0, 0);
            transition: all 600ms;
            animation-name: autoplay;
            animation-duration: 6.5s;
            animation-direction: alternate;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
        }

        .item-slider {
            position: relative;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            max-width: 100%;
        }

        .paginacion-hover {
            position: absolute;
            bottom: 20px;
            left: 0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .item-paginacion {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px solid green;
            width: 16px;
            height: 16px;
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer;
            background: white;
            margin: 0 10px;
            text-align: center;
            transition: all 300ms;
        }

        .paginacion-hover:hover {
            transform: scale(2);
        }

        .paginacion-hover img {
            display: inline-block;
            max-width: none;
            height: 100%;
            transform: scale(1);
            opacity: 0;
            transition: all 300ms;
        }

        .paginacion-hover:hover img {
            opacity: 1;
            transform: scale(1);
        }

        input[id="1"]:checked~.slider {
            animation: none;
            transform: translate3d(0, 0, 0);
        }

        input[id="1"]:checked~.paginacion-hover .item-paginacion[for="1"] {
            background: #fff;
        }

        input[id="2"]:checked~.slider {
            animation: none;
            transform: translate3d(calc(-100%*1), 0, 0);
        }

        input[id="2"]:checked~.paginacion-hover .item-paginacion[for="3"] {
            background: #fff;
        }

        input[id="3"]:checked~.slider {
            animation: none;
            transform: translate3d(calc(-100%*2), 0, 0);
        }

        input[id="3"]:checked~.paginacion-hover .item-paginacion[for="3"] {
            background: #fff;
        }

        @keyframes autoplay {
            33% {
                transform: translate3d(calc(-100%*0), 0, 0);
            }

            66% {
                transform: translate3d(calc(-100%*1), 0, 0);
            }

            100% {
                transform: translate3d(calc(-100%*2), 0, 0);
            }
        }

        .titulo-des {
            margin-left: 90px;
            font-size: 30px;
            color: #000;
        }

        /* DESCRIPCION */
        .contenedor-des {
            display: flex;
            margin-top: 15px;
            padding: 0px;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            /*background: #cdcdcd;*/
        }

        .descripcion {
            padding-top: 0%;
            padding-left: 40px;
            font-size: 40px;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #008f39;
            text-shadow: 0 0.1em 20px black, 0.05em -0.03em 0 black, 0.05em 0.005em 0 black, 0em 0.08em 0 black, 0.05em 0.08em 0 black, 0px -0.03em 0 black, -0.03em -0.03em 0 black, -0.03em 0.08em 0 black, -0.03em 0 0 black;
        }

        p span {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            display: inline-block;

        }

        p span:first-child {
            -webkit-animation: bop 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards infinite alternate;
            animation: bop 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards infinite alternate;
        }

        p span:last-child {
            -webkit-animation: bopB 1s 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards infinite alternate;
            animation: bopB 1s 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards infinite alternate;
        }

        @-webkit-keyframes bop {
            0% {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }

            50%,
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes bop {
            0% {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }

            50%,
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-webkit-keyframes bopB {
            0% {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }

            80%,
            100% {
                -webkit-transform: scale(1) rotateZ(-3deg);
                transform: scale(1) rotateZ(-3deg);
            }
        }

        @keyframes bopB {
            0% {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }

            80%,
            100% {
                -webkit-transform: scale(1) rotateZ(-3deg);
                transform: scale(1) rotateZ(-3deg);
            }
        }

        .servicios {
            padding-bottom: 30px;
        }

        .servicio-cont {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes show {
            from {
                opacity: 0;
                scale: 25%;
            }

            to {
                opacity: 1;
                scale: 100%;
            }
        }

        .contenedor .servicio-cont {
            view-timeline-name: --image;
            view-timeline-axis: block;
            animation-timeline: --image;
            animation-name: show;
            /*animation-range: entry 25% cover 40%; */
        }

        .servicio-individual {
            width: 28%;
            text-align: center;
            justify-content: center;
        }

        .servicio-individual img {
            width: 90%;
            cursor: pointer;
        }

        .servicio-individual h3 {
            margin: 10px 0;
            color: #000;
        }

        main .sobre-nosotros {
            padding: 30px 0 60px 0;
        }

        .contenedor-sobre-nosotros {
            display: flex;
            justify-content: space-evenly;
        }

        .imagen {
            width: 40%;
        }

        .sobre-nosotros .contenido-textos {
            width: 48%;
        }

        .contenido-textos {
            /*background: #cdcdcd;*/
            padding-bottom: 10px;
            border-radius: 10px;
            padding-left: 10px;
        }

        .contenido-textos h3 {
            margin-bottom: 15px;
            color: #000;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .contenido-textos h3 span {
            background: #008000;
            color: #fff;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
            width: 30px;
            height: 30px;
            padding: 2px;
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
            margin-right: 5px;
        }

        .contenido-textos p {
            padding: 0px 0px 15px 15px;
            font-weight: 300;
            text-align: justify;
            color: #000;
        }

        /* RESEÑAS-COMENTARIOS  */
        .containers {
            padding-left: 10%;
            display: flex;
            width: 1040px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .card {
            margin: 10px;
            background-color: #eeeeef;
            border-radius: 10px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 300px;
        }

        .card-header img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            min-height: 250px;
        }

        .tag {
            background: #cccccc;
            border-radius: 50px;
            font-size: 12px;
            margin: 0;
            color: #fff;
            padding: 2px 10px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .tag-green {
            background-color: #008f39;
        }

        .tag-red {
            background-color: #a52019;
        }

        .tag-yellow {
            background-color: #e5be01;
        }

        .card-body p {
            font-size: 13px;
            margin: 0 0 40px;
            color: #000;
        }

        .h5 {
            color: #000;
        }

        .user {
            display: flex;
            margin-top: auto;
        }

        .user img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
            animation: mover 5s infinite ease-in-out;
        }

        @keyframes mover {
            0% {
                transform: rotateY(0);
            }

            100% {
                transform: rotateY(100px);
            }

        }

        .user-info h5 {
            margin: 0;
        }

        .user-info small {
            color: #545d7a;
        }

        /*Tarjeta Of */
        .cards {
            display: flex;
            justify-content: space-evenly;
        }

        .cards .card {
            background: #eeeeef;
            display: flex;
            width: 46%;
            height: 200px;
            align-items: center;
            justify-content: space-evenly;
            border-radius: 5px;
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.6);
        }

        .cards .card img {
            width: 200px;
            height: 180px;
            object-fit: cover;
            border: 3px solid #fff;
            border-radius: 50%;
            display: block;
            cursor: pointer;
        }

        .cards .card>.contenido-texto-card {
            width: 60%;
            color: #000;
            text-align: center;
            font-size: 25px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-decoration: none;
        }
    </style>
    <div class="wrapper">
        <div class="collapsible">
            <input type="checkbox" id="collapsible-head">
            <label for="collapsible-head">SUCURSALES</label>
            <div class="collapsible-text">
                <p>Acá podrán visualizar todo lo relacionado
                    con las oficinas y su NPS del mes.
                </p>
            </div>
        </div>
    </div>
    <header>
        <div class="contenedor">
            <a href="../pag_fd/inicio.php" class="logo"><img src="../img/logofalabella.png" width="290" height="100"></a>
            <nav>
                <a href="../pag_fd/inicio.php"><img src="../img/nps,log.png" height="150" width="220">
                    <a href="../pag_fd/inicio.php"><img src="../img/banderacol.png" height="150" width="">
                    </a>
                </a>
            </nav>
        </div>
        <br>
        <div class="imagen-principal">
            <div class="contenedor">
            </div>
        </div>
    </header>
    <main>
        <div class="contenedorr">
            <div class="contenedorr">
                <h1>Sucursales</h1><br>
                <h2>Venta - Atencion</h2>
                <input type="radio" id="1" name="imagen-slide" hidden>
                <input type="radio" id="2" name="imagen-slide" hidden>
                <input type="radio" id="3" name="imagen-slide" hidden>
                <div class="slider">
                    <div class="item-slider">
                        <img src="../img/of122p.png" height="550">
                    </div>
                    <div class="item-slider">
                        <img src="../img/oficina_2.png" height="550">
                    </div>
                    <div class="item-slider">
                        <img src="../img/fondopo.png" height="550">
                    </div>
                </div>
                <div class="paginacion-hover">
                    <label class="item-paginacion" for="1">
                        <img src="../img/ofi122.jpg">
                    </label>
                    <label class="item-paginacion" for="2">
                        <img src="../img/oficina_2.png">
                    </label>
                    <label class="item-paginacion" for="3">
                        <img src="../img/oficina_3.png">
                    </label>
                </div>
            </div>
    </main>
    <br>
    <h1 class="titulo-des">Información general</h1>
    <div class="contenedor-des">
        <!--<h1 class="titulo-des">Banco Falabella</h1>-->
        <video class="video" width="600" height="400" controls src="../videos/videofi.mp4">
            <style>
                .video {
                    padding-top: 0%;
                    padding-left: 60px;
                    padding-bottom: 3%;
                }
            </style>
        </video>
        <p class="descripcion"><span>¡De Gennial a </span><br><span>Gennials!</span>
        </p>
    </div>
    <section class="servicios">
        <div class="contenedor">
            <h4 class="titulo-suc">A detalle...</h4>
            <style>
                .titulo-suc {
                    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                    text-align: center;
                    color: #000;
                    font-size: 25px;
                    text-decoration: none;
                }
            </style>
            <br>
            <div class="servicio-cont">
                <div class="servicio-individual">
                    <a href="../panel_dash/sucur/panel_suc.html"><img src="../img/oficina_1.jpg">
                        <h3>Venta</h3>
                    </a>
                </div>
                <div class="servicio-individual">
                    <a href="../pag_nps/npsatencion.html"><img src="../img/oficina_3.png">
                        <h3>Atención</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <main>
        <section class="contenedor_-sobre-nosotros">
            <h4 class="titulo-suc">Recuérdale al cliente los beneficios que tiene con <br>
                su tarjeta y el manejo de la App</h4>
            <br><br>
            <div class="contenedor-sobre-nosotros"><br><br>
                <img src="../img/benef.jpg" alt="" class="imagen">
                <div class="contenido-textos">
                    <br>
                    <div class="personalizacion">
                        <h3> <span>1</span>Promociones Mensuales y Puntos CMR<img class="img1" src="../img/benef_desc.png"
                                alt="" height="50px" width="50px"></h3>
                        <p>Pagando con la tarjeta débito o crédito podrá acceder a múltiples beneficios <br>
                            mensuales.
                        </p><br>
                    </div>
                    <style>
                        .personalizacion {
                            border-radius: 12px;
                            background-color: #eeeeef;
                            padding-left: 12px;
                            padding-bottom: 10px;
                        }

                        .img1 {
                            display: inline;
                        }
                    </style><br>
                    <div class="personalizacion">
                        <h3> <span>2</span>Tarjetas y cuentas como:
                            Débito, Crédito, PAC, CDT/CDAT <img class="img1" src="../img/icontarjetas.png" alt=""
                                height="50px" width="80px"></h3>
                        <p>Cada una de ellas le servirá al cliente, para compras y/o ahorros.
                        </p><br>
                    </div><br>
                    <div class="personalizacion">
                        <h3> <span>3</span>Uso de la App para pagos y variedad de información <img class="img1"
                                src="../img/iconapp.png" alt="" height="50px" width="50px"></h3>
                        <p> Dentro de la App de Banco Falaballa, el cliente podrá manejar sus pagos, <br>
                            saber mas información de créditos y de esta manera poder solicitarlos.
                        </p>
                    </div>
                </div>
        </section>
    </main><br><br>
    <h1 class="titulo-des">Comentarios de algunos clientes</h1><br><br>
    <div class="containers">
        <div class="card">
            <div class="card-header">
                <img src="../img/icontriste.png" alt="rover" />
            </div>
            <div class="card-body">
                <span class="tag tag-red">Detractor</span><br>
                <p>
                <?php 
                    $def_1 = "Venta: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' AND TIPO = 'RED OFICINAS'
                     AND Tipo_Respuesta = 'DETRACTOR'  AND COMENTARIO_CLIENTE != ''
                     --OR NIVEL_1 = 'VENTA'--
                     ";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_1, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?>
                </p>
                <p>
                <?php 
                    $def_1 = "Atención: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' AND TIPO = 'RED OFICINAS'
                     AND Tipo_Respuesta = 'DETRACTOR'  AND COMENTARIO_CLIENTE != '' ";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_1, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?>
                </p>
                <div class="user">
                    <img src="../img/users.png" alt="user" />
                    <div class="user-info">
                        <p>Clientes<br>
                            BFCO</p>
                        <small>
                            <?php
                    $tsql = "SELECT TOP 1 PERIODO_EXPERIENCIA
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202501'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $obj['PERIODO_EXPERIENCIA'] .'</br>';
                    }
                    ?></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="../img/iconneutral.png" alt="ballons" />
            </div>
            <div class="card-body">
                <span class="tag tag-yellow">Neutro</span><br>
                <p>
                <?php 
                    $def_1 = "Venta: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' AND TIPO = 'RED OFICINAS'
                     AND Tipo_Respuesta = 'NEUTRO'  AND COMENTARIO_CLIENTE != ''
                     --AND NIVEL_1 = 'VENTA'
                     ";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_1, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?>
                </p>
                <p>
                <?php 
                    $def_1 = "Atención: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' AND TIPO = 'RED OFICINAS'
                     AND Tipo_Respuesta = 'NEUTRO'  AND COMENTARIO_CLIENTE != '' ";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_1, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?>
                </p>
                <div class="user">
                    <img src="../img/users.png" alt="user" />
                    <div class="user-info">
                        <p>Clientes <br>
                            BFCO</p>
                        <small>        <?php
                    $tsql = "SELECT TOP 1 PERIODO_EXPERIENCIA
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202501'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $obj['PERIODO_EXPERIENCIA'] .'</br>';
                    }
                    ?></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="../img/iconfeliz.png" alt="city" />
            </div>
            <div class="card-body">
                <span class="tag tag-green">Promotor</span><br>
                <p>
                <?php 
                    $def_1 = "Venta: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' AND TIPO = 'RED OFICINAS'
                     AND Tipo_Respuesta = 'PROMOTOR'  AND COMENTARIO_CLIENTE != ''
                     --AND NIVEL_1 = 'VENTA'
                     ";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_1, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?>
                </p>
                <p>
                <?php 
                    $def_1 = "Atención: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202412' AND TIPO = 'RED OFICINAS'
                     AND Tipo_Respuesta = 'PROMOTOR' AND COMENTARIO_CLIENTE != '' ";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $def_1, $obj['COMENTARIO_CLIENTE'] .'</br>';
                    }
                    ?>
                </p>
                <div class="user">
                    <img src="../img/users.png" alt="user" />
                    <div class="user-info">
                        <p>Clientes <br>
                            BFCO</p>
                        <small>        <?php
                    $tsql = "SELECT TOP 1 PERIODO_EXPERIENCIA
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202501'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $obj['PERIODO_EXPERIENCIA'] .'</br>';
                    }
                    ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <h4 class="titulo-suc">Detalle General Asesores</h4><br>
    <section class="embajadores contenedor">
        <div class="cards">
            <div class="card">
                <img src="../img/oficina_4.jpg" alt="">
                <div class="contenido-texto-card">
                    <a href="oficinasgen.html">
                        <h4 class="titulo-suc">¡Haz clic acá!</h4>
                    </a>
                </div>
            </div>
    </section><br><br>
    <div class="contenedor-des">
        <h1 class="titulo-desc">¡Importante! antes de finalizar
            tú atención con el cliente, <br>recuérdale calificar la App</h1>
        <img class="img" width="500" height="200" controls src="../img/Banner.png">
        <style>
            .img {
                padding-top: 0%;
                padding-left: 20px;
                padding-bottom: 3%;
            }

            .titulo-desc {
                font-size: 20px;
                color: #000;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                background: #eeeeef;
                border-radius: 12px;
                padding: 15px;

            }
        </style>
    </div>
    <footer class="footer">
        <h3>Experiencia del Cliente Banco Falabella Colombia</h3>
    </footer>
    <style>
        .footer {
            background: #008f39;
            text-align: center;
            border-radius: 25px;
            padding: 15px;
        }

        .footer h3 {
            color: #BDECB6;
        }
    </style>
    	<p id="number" class="text-success" style="font-size:8px;"></p>

<script type="text/javascript">
    n = 50
    var l = document.getElementById("number");
    var id = window.setInterval(function(){
        document.onmousemove = function(){
            n = 50
        };
        
        l.innerText = n;
        n--;

        if(n <= -1){
            swal("La sesión ha expirado");
            location.href="../login/login.php";
    }
    }, 2000);
    
    </script>
</body>

</html>
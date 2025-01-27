<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="icon" type="img" href="../img/banco-falabella.svg">
	<title>Informe NPS BFCO</title>
</head>

<body>
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			background: #E9ECF4;
			color: #000;
			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
		}

		body::-webkit-scrollbar-track {
			background: #008f39
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
			right: 179px;
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
			color: white;
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

		.contenedor {
			width: 90%;
			max-width: 1000px;
			margin: 20px auto;
			display: grid;
			grid-gap: 20px;
			grid-template-columns: repeat(3, 1fr);
			grid-template-rows: repeat(4, auto);
			grid-template-areas: "header 	header 		header"
				"sidebar	contenido contenido"
				"sidebar	widget-1 	widget-2"
				"footer 	footer 		footer";
		}

		.contenedor>div,
		.contenedor .header,
		.contenedor .contenido,
		.contenedor .sidebar,
		.contenedor .footer {
			background: #fff;
			padding: 20px;
			border-radius: 8px;
		}

		.contenedor .header {
			background: black;
			color: #fff;
			grid-area: header;
		}

		.contenedor .header img {
			width: 100%;
		}

		.contenedor .contenido {
			grid-area: contenido;
		}

		.contenedor .sidebar {
			background: #008f39;
			text-align: left;
			align-items: center;
			justify-content: center;
			min-height: 100px;
			grid-area: sidebar;
		}

		#myImg {
			border-radius: 5px;
			cursor: pointer;
			transition: 0.3s;
		}

		#myImg:hover {
			opacity: 0.7;
		}

		#myImg2 {
			border-radius: 5px;
			cursor: pointer;
			transition: 0.3s;
		}

		#myImg2:hover {
			opacity: 0.7;
		}

		.modal {
			display: none;
			position: fixed;

			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgb(0, 0, 0);
			background-color: rgba(0, 0, 0, 0.9);
		}

		.modal-content {
			margin: auto;
			display: block;
			width: 80%;
			max-width: 700px;
		}

		#caption {
			margin: auto;
			display: block;
			width: 80%;
			max-width: 700px;
			text-align: center;
			color: #ccc;
			padding: 10px 0;
			height: 150px;
		}

		.modal-content,
		#caption {
			-webkit-animation-name: zoom;
			-webkit-animation-duration: 0.6s;
			animation-name: zoom;
			animation-duration: 0.6s;
		}

		@-webkit-keyframes zoom {
			from {
				-webkit-transform: scale(0)
			}

			to {
				-webkit-transform: scale(1)
			}
		}

		@keyframes zoom {
			from {
				transform: scale(0)
			}

			to {
				transform: scale(1)
			}
		}

		.close {
			position: absolute;
			top: 15px;
			right: 35px;
			color: #f1f1f1;
			font-size: 40px;
			font-weight: bold;
			transition: 0.3s;
		}

		.close:hover,
		.close:focus {
			color: #bbb;
			text-decoration: none;
			cursor: pointer;
		}

		@media only screen and (max-width: 700px) {
			.modal-content {
				width: 100%;
			}
		}

		.contenedor .widget-1 {
			grid-area: widget-1;
		}

		.contenedor .widget-1 img {
			width: 100%;
		}

		.contenedor .widget-2 {
			grid-area: widget-2;
		}

		.contenedor .widget-2 img {
			width: 100%;
		}

		.contenedor .footer {
			background: #008f39;
			color: #BDECB6;
			text-align: center;
			grid-area: footer;
		}

		.sidebar h3 {
			text-align: center;
		}

		/* Menu vertical*/

		.vertical-menu {
			width: 100%;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.vertical-menu a {
			background-color: #D2F4E4;
			color: black;
			display: block;
			padding: 12px;
			text-decoration: none;
		}

		.vertical-menu a:hover {
			background-color: #ccc;
		}

		.vertical-menu a.active {
			background-color: #20603D;
			color: white;
		}

		/* Menu horizontal*/
		.horizontal-menu ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		.horizontal-menu ul li {
			float: left;
		}

		.horizontal-menu ul li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.horizontal-menu ul li a:hover:not(.activa) {
			background-color: #008f39;
		}

		.horizontal-menu .activa {
			background-color: #20603D;

		}

		/*Responsiv*/
		@media screen and (max-width: 768px) {
			.contenedor {
				grid-template-areas: "header 	header 		header"
					"contenido 	contenido 	contenido"
					"sidebar 	sidebar 	sidebar"
					"widget-1 	widget-1 	widget-1"
					"widget-2 	widget-2 	widget-2"
					"footer 	footer 		footer";
			}

			.contenedor .widget-1 img {
				width: 65%;
			}

			.contenedor .widget-2 img {
				width: 65%;
			}
		}
	</style>
	<div class="wrapper">
		<div class="collapsible">
			<input type="checkbox" id="collapsible-head">
			<label for="collapsible-head">INFORME NPS </label>
			<div class="collapsible-text">
				<p>Bienvenidos a este espacio donde podrán visualizar todo lo relacionado
					con el NPS.
				</p>
			</div>
		</div>
	</div>
	<div class="contenedor">
		<header class="header">
			<img src="../img/fondo1fal.jpeg" alt="banner">
			<nav class="horizontal-menu">
				<ul>
					<li class="activa"><a href="inicio.html">Inicio</a>
						<style>
							.activa {
								cursor: pointer;
							}
						</style>
					</li>
					<li><a href="../sucur/enc_sucursales.php">Encuestas Sucursales</a></li>
					<li><a href="../can_dig/enc_canalesdig.php">Encuestas Canales Digitales</a></li>
					<li><a href="callcenter.html">Call Center</a></li>
					<li><a href="../dgtu/dgtu.php">Digiturno</a></li>
				</ul>
			</nav>
		</header>
		<main class="contenido">
			<h1>Corte 20 de Enero 2025</h1>
			<br>
			<p>
				Informe de NPS actualizado al día 20 de enero del 2025
				con atenciones actualizado al día 22 de enero del 2025.
				<br><br>
				Enlace Excel <a
					href="https://falabella.sharepoint.com/sites/InformeNPS/Documentos%20compartidos/Forms/AllItems.aspx?id=%2Fsites%2FInformeNPS%2FDocumentos%20compartidos%2FInforme%20NPS&p=true&ga=1">
					Informe NPS</a> la contraseña del archivo es 1.
				<br><br>
			</p>
		</main>
		<aside class="sidebar">
			<h4>Canales</h4>
			<style>
				h4 {
					text-align: center;
					color: #BDECB6;
				}
			</style>
			<nav class="vertical-menu">
				<a href="../sucur/sucursales.php"><i class="fa fa-building" aria-hidden="true"></i> Sucursales</a>
				<a href="../can_dig/canalesdig.php"><i class="fa fa-whatsapp" aria-hidden="true"></i> Canales Digitales</a>
				<a href="../cartera/cartera.html"><i class="fa fa-users" aria-hidden="true"></i> Cartera</a>
			</nav>
			<video width="400" height="200" controls src="../videos/videoinicial.mp4">
			</video>
		</aside>
		<div class="widget-1">
			<img id="myImg2" src="../img_panel/imagen.png">
			<br>
		</div>
		<div class="widget-2">
			<img id="myImg" src="../img_panel/imagen (1).png">
			<br>
			<div id="myModal" class="modal">
				<span class="close">&times;</span>
				<img class="modal-content" id="img01">
				<div id="caption"></div>
			</div>
		</div>
		<script>
			var modal = document.getElementById("myModal");
			var img = document.getElementById("myImg");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function () {
				modal.style.display = "block";
				modalImg.src = this.src;
				captionText.innerHTML = this.alt;
			}
			var span = document.getElementsByClassName("close")[0];
			span.onclick = function () {
				modal.style.display = "none";
			}
		</script>
		<script>
			var modal = document.getElementById("myModal");
			var img = document.getElementById("myImg2");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function () {
				modal.style.display = "block";
				modalImg.src = this.src;
				captionText.innerHTML = this.alt;
			}
			var span = document.getElementsByClassName("close")[0];
			span.onclick = function () {
				modal.style.display = "none";
			}
		</script>
		<footer class="footer">
			<h3>Experiencia del Cliente Banco Falabella Colombia</h3>
		</footer>
	</div>
	<p id="number" style="font-size:8px;"></p>

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
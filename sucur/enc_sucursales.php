<?php
include_once '../consultphp/conexion_bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
	<link rel="icon" type="img" href="../img/banco-falabella.svg" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
	<title>Encuestas Sucursales</title>
</head>

<body>
	<div class="wrapper">
		<div class="collapsible">
			<input type="checkbox" id="collapsible-head">
			<label for="collapsible-head">ENCUESTAS SUCURSALES</label>
			<div class="collapsible-text">
				<p>Acá podrán visualizar las encuestas que se han tenido en el mes en
					Oficinas.
				</p>
			</div>
		</div>
	</div>
	<br>
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			background: #fff;
			color: #000;
			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
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
			right: 75px;
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
			font-family: 'Oswald', sans-serif;
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
			padding-left: 160px;
		}

		.collapsible label:after {
			content: "";
			position: absolute;
			right: 53px;
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
			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
			color: white;

		}

		table th {
			background-color: #008f39;
			color: white;
		}
	</style>
	</head>
	<header>
		<div class="contenedor">
			<a href="../pag_fd/inicio.html" class="logo"><img src="../img/logofalabella.png" width="290" height="100"></a>
			<nav>
				<a href="../pag_fd/inicio.html"><img src="../img/nps,log.png" height="150" width="220">
					<a href="../pag_fd/inicio.html"><img src="../img/banderacol.png" height="150" width="">
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
	<br><br>
	<body>
	<table id="example" class="display" style="width:100%">
			<tr>
				<th>Tienda</th>
				<th>Encuesta Completada</th>
				<th>Mes</th>
				<th>Año</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			$sql = "SELECT tienda, count(encuesta_completada) as encuesta_completada, mes, año,
			sum(cast((encuesta_completada) as varchar(50))) as Total FROM canales.dbo.ENVIOS_SUCURSALES_GEN 
			group by tienda, mes, año";
			$stmt = sqlsrv_query($conn, $sql );
			if( $stmt === false) {
				die(print_r( sqlsrv_errors(), true));
			}
			while($row = sqlsrv_fetch_array($stmt)) { ?>
			<tr>
				<td style="text-align: center;"><?php echo $row['tienda']; ?></td>
				<td style="text-align: center;"><?php echo $row['encuesta_completada']; ?></td>
				<td style="text-align: center;"><?php echo $row['mes']; ?></td>
				<td style="text-align: center;"><?php echo $row['año']; ?></td>
				<td style="text-align: center;">Total<?php echo $row['Total']; ?></td>
			</tr>
			<?php
			}
			?>
		</tbody>
			</table>
		<footer class="footer">
			<h3>Experiencia del Cliente Banco Falabella Colombia</h3>
			<style>
				.footer {
					background: #008f39;
					text-align: center;
					border-radius: 15px;
					padding: 10px;
				}

				.footer h3 {
					color: #BDECB6;
				}
			</style>
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>

		<script>
			$(document).ready(function () {
				var table = $('#example').DataTable({
					orderCellsTop: true,
					fixedHeader: true
				});
			});
		</script>
	</body>

</html>
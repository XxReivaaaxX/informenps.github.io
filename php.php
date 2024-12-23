<?php
include('pp.php');

$tsql = "SELECT		
 ID
,ID_CLIENTE
,FECHA_EXPERIENCIA
,SEMANA_LIQUIDACION
,NOTA
,COMENTARIO_CLIENTE
,CEDULA_EJECUTIVO
,NOMBRE_EJECUTIVO

FROM		Canales.dbo.REPORTING_NPS_DETALLE		AS A
WHERE		/*Tipo NOT IN ('Backoffice') AND */
			PERIODO_EXPERIENCIA BETWEEN (SELECT PERIODO FROM INFORMES_COMERCIALES..TBL_INFO_PERIODO_HIST WHERE COSECHA = (SELECT COSECHA-6 FROM INFORMES_COMERCIALES..TBL_INFO_PERIODO_HIST WHERE PERIODO = (SELECT MAX(PERIODO_EXPERIENCIA) FROM Canales.dbo.REPORTING_NPS_DETALLE)))
			AND (SELECT MAX(PERIODO_EXPERIENCIA) FROM Canales.dbo.REPORTING_NPS_DETALLE)";
$stmt = sqlsrv_query($conn, $tsql);
if ($stmt == false) {
   echo 'Error';
}
while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
   echo $obj['ID'] .'</br>';
   echo $obj['ID_CLIENTE'] .'</br>';
   echo $obj['SEMANA_LIQUIDACION'] .'</br>';
   echo $obj['NOTA'] .'</br>';
   echo $obj['COMENTARIO_CLIENTE'] .'</br>';
   echo $obj['CEDULA_EJECUTIVO'] .'</br>';
   echo $obj['NOMBRE_EJECUTIVO'] .'</br>';
}

?>

<style type="text/css">
	table.tableizer-table {
		font-size: 12px;
		border: 1px solid #CCC; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 3px;
		border: 1px solid #CCC;
	}
	.tableizer-table th {
		background-color: #104E8B; 
		color: #FFF;
		font-weight: bold;
	}
</style>
<table class="tableizer-table">
<thead><tr class="tableizer-firstrow"><th>Indicadores</th><th>202407</th><th>202408</th><th>202409</th><th>202410</th><th>202411</th><th>202412</th></tr></thead><tbody>
 <tr><td># Respuestas</td><td>2.768</td><td>2.506</td><td>2.230</td><td>2.196</td><td>1.210</td><td>551</td></tr>
 <tr><td># Promotores</td><td>2.007</td><td>1.856</td><td>1.620</td><td>1.588</td><td>895</td><td>397</td></tr>
 <tr><td># Detractores</td><td>401</td><td>356</td><td>327</td><td>335</td><td>171</td><td>88</td></tr>
 <tr><td># Neutros</td><td>360</td><td>294</td><td>283</td><td>273</td><td>144</td><td>66</td></tr>
 <tr><td>% Promotores</td><td>73%</td><td>74%</td><td>73%</td><td>72%</td><td>74%</td><td>72%</td></tr>
 <tr><td>% Neutros</td><td>13%</td><td>12%</td><td>13%</td><td>12%</td><td>12%</td><td>12%</td></tr>
 <tr><td>% Detractores</td><td>14%</td><td>14%</td><td>15%</td><td>15%</td><td>14%</td><td>16%</td></tr>
 <tr><td>% NPS Total</td><td>58,02%</td><td>59,86%</td><td>57,98%</td><td>57,06%</td><td>59,83%</td><td>56,08%</td></tr>
</tbody></table>



<style type="text/css">
	table.tableizer-table {
		font-size: 12px;
		border: 1px solid #CCC; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 3px;
		border: 1px solid #CCC;
	}
	.tableizer-table th {
		background-color: #104E8B; 
		color: #FFF;
		font-weight: bold;
	}
</style>
<table class="tableizer-table">
<thead><tr class="tableizer-firstrow"><th>Tienda</th><th>Envíos Abiertos</th><th>Encuesta Completada (Respuestas)</th></tr></thead><tbody>
 <tr><td>Sucursal</td><td>19452</td><td>19452</td></tr>
 <tr><td>junio</td><td>539</td><td>539</td></tr>
 <tr><td>julio</td><td>4519</td><td>4519</td></tr>
 <tr><td>agosto</td><td>3811</td><td>3811</td></tr>
 <tr><td>septiembre</td><td>3951</td><td>3951</td></tr>
 <tr><td>octubre</td><td>3696</td><td>3696</td></tr>
 <tr><td>noviembre</td><td>2936</td><td>2936</td></tr>
 <tr><td>Calle 122</td><td>25</td><td>25</td></tr>
 <tr><td>Falabella Alegra</td><td>1</td><td>1</td></tr>
 <tr><td>Falabella Arkadia</td><td>31</td><td>31</td></tr>
 <tr><td>Falabella Buenavista</td><td>59</td><td>59</td></tr>
 <tr><td>Falabella Cacique</td><td>32</td><td>32</td></tr>
 <tr><td>Falabella Caracolí</td><td>41</td><td>41</td></tr>
 <tr><td>Falabella Cartagena el Castillo</td><td>37</td><td>37</td></tr>
 <tr><td>Falabella Centro Mayor</td><td>85</td><td>85</td></tr>
 <tr><td>Falabella Colina Campestre</td><td>90</td><td>90</td></tr>
 <tr><td>Falabella Diver Plaza</td><td>68</td><td>68</td></tr>
 <tr><td>Falabella Fontanar Chia</td><td>83</td><td>83</td></tr>
 <tr><td>Falabella Galerias</td><td>82</td><td>82</td></tr>
 <tr><td>Falabella Hayuelos</td><td>80</td><td>80</td></tr>
 <tr><td>Falabella Ibague</td><td>55</td><td>55</td></tr>
 <tr><td>Falabella Jardin Plaza</td><td>53</td><td>53</td></tr>
 <tr><td>Falabella Manizales</td><td>48</td><td>48</td></tr>
 <tr><td>Falabella Multiplaza</td><td>42</td><td>42</td></tr>
 <tr><td>Falabella Pereira</td><td>40</td><td>40</td></tr>
 <tr><td>Falabella Plaza Central</td><td>91</td><td>91</td></tr>
 <tr><td>Falabella Primavera</td><td>32</td><td>32</td></tr>
 <tr><td>Falabella San Diego</td><td>62</td><td>62</td></tr>
 <tr><td>Falabella Santafe</td><td>58</td><td>58</td></tr>
 <tr><td>Falabella Santafe Medellín</td><td>52</td><td>52</td></tr>
 <tr><td>Falabella Suba</td><td>87</td><td>87</td></tr>
 <tr><td>Falabella Titan</td><td>82</td><td>82</td></tr>
 <tr><td>Falabella Unicentro</td><td>89</td><td>89</td></tr>
 <tr><td>Falabella World Trade Center</td><td>54</td><td>54</td></tr>
 <tr><td>Homecenter Armenia</td><td>23</td><td>23</td></tr>
 <tr><td>Homecenter Barranquilla</td><td>23</td><td>23</td></tr>
 <tr><td>Homecenter Barranquilla Centro</td><td>31</td><td>31</td></tr>
 <tr><td>Homecenter Barranquilla Sur</td><td>28</td><td>28</td></tr>
 <tr><td>Homecenter Bello</td><td>41</td><td>41</td></tr>
 <tr><td>Homecenter Bucaramanga</td><td>31</td><td>31</td></tr>
 <tr><td>Homecenter Cali Mall Plaza</td><td>9</td><td>9</td></tr>
 <tr><td>Homecenter Cali Norte</td><td>53</td><td>53</td></tr>
 <tr><td>Homecenter Cali Sur</td><td>72</td><td>72</td></tr>
 <tr><td>Homecenter Calima</td><td>27</td><td>27</td></tr>
 <tr><td>Homecenter Calle 80</td><td>85</td><td>85</td></tr>
 <tr><td>Homecenter Cartagena</td><td>31</td><td>31</td></tr>
 <tr><td>Homecenter Cedritos</td><td>56</td><td>56</td></tr>
 <tr><td>Homecenter Chia</td><td>45</td><td>45</td></tr>
 <tr><td>Homecenter Cúcuta</td><td>49</td><td>49</td></tr>
 <tr><td>Homecenter Dorado</td><td>41</td><td>41</td></tr>
 <tr><td>Homecenter Envigado</td><td>51</td><td>51</td></tr>
 <tr><td>Homecenter Girardot</td><td>40</td><td>40</td></tr>
 <tr><td>Homecenter Ibague</td><td>37</td><td>37</td></tr>
 <tr><td>Homecenter Industriales</td><td>18</td><td>18</td></tr>
 <tr><td>Homecenter Manizales</td><td>29</td><td>29</td></tr>
 <tr><td>Homecenter Molinos</td><td>46</td><td>46</td></tr>
 <tr><td>Homecenter Montería</td><td>17</td><td>17</td></tr>
 <tr><td>Homecenter Mosquera</td><td>39</td><td>39</td></tr>
 <tr><td>Homecenter Neiva</td><td>29</td><td>29</td></tr>
 <tr><td>Homecenter Norte</td><td>36</td><td>36</td></tr>
 <tr><td>Homecenter Palmira</td><td>34</td><td>34</td></tr>
 <tr><td>Homecenter Pereira</td><td>25</td><td>25</td></tr>
 <tr><td>Homecenter Rio Negro</td><td>27</td><td>27</td></tr>
 <tr><td>Homecenter San Fernando</td><td>38</td><td>38</td></tr>
 <tr><td>Homecenter San Juan</td><td>38</td><td>38</td></tr>
 <tr><td>Homecenter Santa Marta</td><td>25</td><td>25</td></tr>
 <tr><td>Homecenter Soacha</td><td>29</td><td>29</td></tr>
 <tr><td>Homecenter Sur</td><td>43</td><td>43</td></tr>
 <tr><td>Homecenter Tintal</td><td>12</td><td>12</td></tr>
 <tr><td>Homecenter Tuluá</td><td>20</td><td>20</td></tr>
 <tr><td>Homecenter Tunja</td><td>30</td><td>30</td></tr>
 <tr><td>Homecenter Valledupar</td><td>16</td><td>16</td></tr>
 <tr><td>Homecenter Villavicencio</td><td>20</td><td>20</td></tr>
 <tr><td>Homecenter Yopal</td><td>16</td><td>16</td></tr>
 <tr><td>PSE</td><td>3</td><td>3</td></tr>
 <tr><td>Punto Red</td><td>1</td><td>1</td></tr>
 <tr><td>Supernumerarios</td><td>13</td><td>13</td></tr>
 <tr><td>Total general</td><td>19452</td><td>19452</td></tr>
</tbody></table>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
	<link rel="icon" type="img" href="img/banco-falabella.svg" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
	<title>Encuestas Sucursales</title>
</head>
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
			color: #000;
		}

		.contenedor {
			width: 97%;
			margin: auto;
		}

		header {
			padding: 12px 0;
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
			background: url(img/fondo1fal.jpeg);
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
			right: 75px;
			width: 29px;
			height: 25px;
			background: url(img/icon12.png) no-repeat 0 0;
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
			<a href="sucursales.html" class="logo"><img src="img/logofalabella.png" width="290" height="100"></a>
			<nav>
				<a href="sucursales.html"><img src="img/nps,log.png" height="150" width="220">
					<a href="sucursales.html"><img src="img/banderacol.png" height="150" width="">
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

	<body>

		<table id="example" class="display" style="width:100%">
			<thead><tr class="tableizer-firstrow"><th>Tienda</th><th>Envíos Abiertos</th><th>Encuesta Completada (Respuestas)</th></tr></thead><tbody>
				<tr><td>Calle 122</td><td>25</td><td>25</td></tr>
				<tr><td>Falabella Alegra</td><td>1</td><td>1</td></tr>
				<tr><td>Falabella Arkadia</td><td>31</td><td>31</td></tr>
				<tr><td>Falabella Buenavista</td><td>59</td><td>59</td></tr>
				<tr><td>Falabella Cacique</td><td>32</td><td>32</td></tr>
				<tr><td>Falabella Caracolí</td><td>41</td><td>41</td></tr>
				<tr><td>Falabella Cartagena el Castillo</td><td>37</td><td>37</td></tr>
				<tr><td>Falabella Centro Mayor</td><td>85</td><td>85</td></tr>
				<tr><td>Falabella Colina Campestre</td><td>90</td><td>90</td></tr>
				<tr><td>Falabella Diver Plaza</td><td>68</td><td>68</td></tr>
				<tr><td>Falabella Fontanar Chia</td><td>83</td><td>83</td></tr>
				<tr><td>Falabella Galerias</td><td>82</td><td>82</td></tr>
				<tr><td>Falabella Hayuelos</td><td>80</td><td>80</td></tr>
				<tr><td>Falabella Ibague</td><td>55</td><td>55</td></tr>
				<tr><td>Falabella Jardin Plaza</td><td>53</td><td>53</td></tr>
				<tr><td>Falabella Manizales</td><td>48</td><td>48</td></tr>
				<tr><td>Falabella Multiplaza</td><td>42</td><td>42</td></tr>
				<tr><td>Falabella Pereira</td><td>40</td><td>40</td></tr>
				<tr><td>Falabella Plaza Central</td><td>91</td><td>91</td></tr>
				<tr><td>Falabella Primavera</td><td>32</td><td>32</td></tr>
				<tr><td>Falabella San Diego</td><td>62</td><td>62</td></tr>
				<tr><td>Falabella Santafe</td><td>58</td><td>58</td></tr>
				<tr><td>Falabella Santafe Medellín</td><td>52</td><td>52</td></tr>
				<tr><td>Falabella Suba</td><td>87</td><td>87</td></tr>
				<tr><td>Falabella Titan</td><td>82</td><td>82</td></tr>
				<tr><td>Falabella Unicentro</td><td>89</td><td>89</td></tr>
				<tr><td>Falabella World Trade Center</td><td>54</td><td>54</td></tr>
				<tr><td>Homecenter Armenia</td><td>23</td><td>23</td></tr>
				<tr><td>Homecenter Barranquilla</td><td>23</td><td>23</td></tr>
				<tr><td>Homecenter Barranquilla Centro</td><td>31</td><td>31</td></tr>
				<tr><td>Homecenter Barranquilla Sur</td><td>28</td><td>28</td></tr>
				<tr><td>Homecenter Bello</td><td>41</td><td>41</td></tr>
				<tr><td>Homecenter Bucaramanga</td><td>31</td><td>31</td></tr>
				<tr><td>Homecenter Cali Mall Plaza</td><td>9</td><td>9</td></tr>
				<tr><td>Homecenter Cali Norte</td><td>53</td><td>53</td></tr>
				<tr><td>Homecenter Cali Sur</td><td>72</td><td>72</td></tr>
				<tr><td>Homecenter Calima</td><td>27</td><td>27</td></tr>
				<tr><td>Homecenter Calle 80</td><td>85</td><td>85</td></tr>
				<tr><td>Homecenter Cartagena</td><td>31</td><td>31</td></tr>
				<tr><td>Homecenter Cedritos</td><td>56</td><td>56</td></tr>
				<tr><td>Homecenter Chia</td><td>45</td><td>45</td></tr>
				<tr><td>Homecenter Cúcuta</td><td>49</td><td>49</td></tr>
				<tr><td>Homecenter Dorado</td><td>41</td><td>41</td></tr>
				<tr><td>Homecenter Envigado</td><td>51</td><td>51</td></tr>
				<tr><td>Homecenter Girardot</td><td>40</td><td>40</td></tr>
				<tr><td>Homecenter Ibague</td><td>37</td><td>37</td></tr>
				<tr><td>Homecenter Industriales</td><td>18</td><td>18</td></tr>
				<tr><td>Homecenter Manizales</td><td>29</td><td>29</td></tr>
				<tr><td>Homecenter Molinos</td><td>46</td><td>46</td></tr>
				<tr><td>Homecenter Montería</td><td>17</td><td>17</td></tr>
				<tr><td>Homecenter Mosquera</td><td>39</td><td>39</td></tr>
				<tr><td>Homecenter Neiva</td><td>29</td><td>29</td></tr>
				<tr><td>Homecenter Norte</td><td>36</td><td>36</td></tr>
				<tr><td>Homecenter Palmira</td><td>34</td><td>34</td></tr>
				<tr><td>Homecenter Pereira</td><td>25</td><td>25</td></tr>
				<tr><td>Homecenter Rio Negro</td><td>27</td><td>27</td></tr>
				<tr><td>Homecenter San Fernando</td><td>38</td><td>38</td></tr>
				<tr><td>Homecenter San Juan</td><td>38</td><td>38</td></tr>
				<tr><td>Homecenter Santa Marta</td><td>25</td><td>25</td></tr>
				<tr><td>Homecenter Soacha</td><td>29</td><td>29</td></tr>
				<tr><td>Homecenter Sur</td><td>43</td><td>43</td></tr>
				<tr><td>Homecenter Tintal</td><td>12</td><td>12</td></tr>
				<tr><td>Homecenter Tuluá</td><td>20</td><td>20</td></tr>
				<tr><td>Homecenter Tunja</td><td>30</td><td>30</td></tr>
				<tr><td>Homecenter Valledupar</td><td>16</td><td>16</td></tr>
				<tr><td>Homecenter Villavicencio</td><td>20</td><td>20</td></tr>
				<tr><td>Homecenter Yopal</td><td>16</td><td>16</td></tr>
				<tr><td>PSE</td><td>3</td><td>3</td></tr>
				<tr><td>Punto Red</td><td>1</td><td>1</td></tr>
				<tr><td>Supernumerarios</td><td>13</td><td>13</td></tr>
				<tr><td>Total general</td><td>19452</td><td>19452</td></tr>
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
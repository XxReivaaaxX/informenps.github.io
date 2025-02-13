<?php
include '../../consultphp/conexion_bd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../cart/panel.css">
	<link rel="icon" type="img" href="../../img/banco-falabella.svg">
	<title>Panel NPS Canales | 	Informe NPS </title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="../../pag_fd/inicio.php" class="brand"><img src="../../img/banco-falabella.svg" alt="" height="55px" width="55px"> Panel Informe NPS | Canales</a>
		<ul class="side-menu">
			<li>
				<a href="#"><i class='bx bx-buildings icon'></i> Sucursales <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="../sucur/sucur_venta/panel_suc_venta.php">Venta</a></li>
					<li><a href="../sucur/sucur_atencion/panel_suc_atencion.php">Atención</a></li>
				</ul>
			</li>
			<li><a href="../cart/panel_cart.php"><i class='bx bxs-group icon'></i> Cartera</a></li>
			<li><a href="../calif_app/panel_calif_app.php"><i class='bx bx-star icon'></i> Calificación App</a></li>
			<li><a href="../callcenter/panel_call.php"><i class='bx bx-phone icon'></i> Call Center</a></li>
			<li>
				<a href="#?"><i class='bx bxl-whatsapp icon'></i> Canales Digitales <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="../canales_digitales/app/panel_app.php">App</a></li>
					<li><a href="../canales_digitales/web/panel_web.php">Web</a></li>
					<li><a href="../canales_digitales/wp/panel_wp.php">Whatsapp</a></li>
				</ul>
			</li>
		</ul>
		<div class="ads">
			<div class="wrapper">
				<a href="#?" class="btn-upgrade">Banco Falabella Colombia</a>
				<p>Experiencia del Cliente | <span>2025</span></p>
			</div>
		</div>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Próximamente...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<!-- Notificaciones-->
			<!--<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			<a href="#" class="nav-link">
				<i class='bx bxs-message-square-dots icon' ></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>-->
			<div class="profile">
				<img src="../../img/banderacol.png" alt="">
				<!--Perfil-->
				<!--<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Perfil</a></li>
					<li><a href="#"><i class='bx bxs-cog' ></i> Opciones</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Cierra</a></li>
				</ul>-->
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<h1 class="title">NPS Cartera & Rolling</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Panel</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Inicio</a></li>
			</ul>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>04/02/2025</h2>
							<p>Fecha de actualización</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="100%"></span>
					<span class="label">100%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>45.01%</h2>
							<p>NPS Cartera</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="60%"></span>
					<span class="label">60%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>42,03%</h2>
							<p>NPS Cartera Rolling</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="97%"></span>
					<span class="label">97%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>25.000</h2>
							<p>Encuestas enviadas "Primer envío"</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div><br>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>20.875</h2>
							<p>Encuestas enviadas "Segundo envío"</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div><br>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>20.875</h2>
							<p>Encuestas enviadas "Tercer envío"</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div><br>
				</div>
			</div>

			<!-- PP -->
                <div class="data">
                    <div class="content-data">
                        <div class="head">
                            <h3>NPS Cartera Febrero</h3>
                            <!--<div class="menu">
							<i class='bx bx-dots-horizontal-rounded icon'></i>
							<ul class="menu-link">
								<li><a href="#"></a></li>
								<li><a href="#">Save</a></li>
								<li><a href="#">Remove</a></li>
							</ul>
						</div>-->
                        </div>
                        <div class="chart">
                            <div id="chart"></div>
                        </div>
                    </div>
                    <!--<div class="data">
                    <div class="content-data">
                        <div class="head">
                            <h3>Promedio NPS <br> Sucursales Atención <br> 2024 - 2025</h3>
                        </div>
                            <div id="chart2"></div>
                        </div>
                    </div>-->
                </div>
                <div class="data">
                    <div class="content-data">
                        <div class="head">
                            <h3>Comentarios de algunos clientes</h3>
                        </div>
                        <div class="containers">
                            <div class="card">
                                <div class="card-header">
                                    <img src="../../../img/icontriste.png" alt="rover" />
                                </div>
                                <div class="card-body">
                                    <span class="tag tag-red">Detractor</span><br>
                                    <p>
                                        <?php 
                    $def_1 = "Comentario: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM Canales.dbo.REPORTING_NPS_DETALLE 
                     WHERE PERIODO_EXPERIENCIA = '202501' AND CANAL = 'OTROS CANALES'
                     AND Tipo_Respuesta = 'DETRACTOR'  AND NIVEL_2 = 'CARTERA'
                     AND COMENTARIO_CLIENTE != '' ";
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
                                        <img src="../../../img/users.png" alt="user" />
                                        <div class="user-info">
                                            <p>Clientes<br>
                                                BFCO</p>
                                            <small>
                                                <?php
                    $tsql = "SELECT TOP 1 PERIODO_EXPERIENCIA
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202502'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $obj['PERIODO_EXPERIENCIA'] .'</br>';
                    }
                    ?>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <img src="../../../img/iconneutral.png" alt="ballons" />
                                </div>
                                <div class="card-body">
                                    <span class="tag tag-yellow">Neutro</span><br>
                                    <p>
                                        <?php 
                    $def_1 = "Comentario: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM Canales.dbo.REPORTING_NPS_DETALLE 
                     WHERE PERIODO_EXPERIENCIA = '202501' AND CANAL = 'OTROS CANALES'
                     AND Tipo_Respuesta = 'NEUTRO'  AND NIVEL_2 = 'CARTERA'
                     AND COMENTARIO_CLIENTE != '' ";
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
                                        <img src="../../../img/users.png" alt="user" />
                                        <div class="user-info">
                                            <p>Clientes <br>
                                                BFCO</p>
                                            <small>
                                                <?php
                    $tsql = "SELECT TOP 1 PERIODO_EXPERIENCIA
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202502'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $obj['PERIODO_EXPERIENCIA'] .'</br>';
                    }
                    ?>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <img src="../../../img/iconfeliz.png" alt="city" />
                                </div>
                                <div class="card-body">
                                    <span class="tag tag-green">Promotor</span><br>
                                    <p>
                                        <?php 
                    $def_1 = "Comentario: ";
                    $tsql = "SELECT TOP 1 COMENTARIO_CLIENTE 
                     FROM Canales.dbo.REPORTING_NPS_DETALLE
                     WHERE PERIODO_EXPERIENCIA = '202501' AND CANAL = 'OTROS CANALES'
                     AND Tipo_Respuesta = 'PROMOTOR'  AND NIVEL_2 = 'CARTERA'
                     AND COMENTARIO_CLIENTE != '' ";
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
                                        <img src="../../../img/users.png" alt="user" />
                                        <div class="user-info">
                                            <p>Clientes <br>
                                                BFCO</p>
                                            <small>
                                                <?php
                    $tsql = "SELECT TOP 1 PERIODO_EXPERIENCIA
                     FROM Canales.dbo.REPORTING_NPS_DETALLE tablesample('1')
                     WHERE PERIODO_EXPERIENCIA = '202502'";
                     $stmt = sqlsrv_query($conn, $tsql);
                     if ($stmt == false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo $obj['PERIODO_EXPERIENCIA'] .'</br>';
                    }
                    ?>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data">
                    <div class="content-data">
                        <div class="head">
                            <h3>NPS 2024 - NPS 2025  Mes x Mes</h3>
                        </div>
                        <div id="chart2"></div>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Detalle Asesores</h3>
                    </div><br><br>
                    <div class="cards">
                        <div class="card">
                            <div class="contenido-texto-card">
                                <a href="../../../sucur/detalleasesores_suc.php">
                                    <h4 class="titulo-suc">¡Haz clic acá!</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-data">
					<div class="head">
						<h3>Chatbot Cartera</h3>
						<div class="menu">
							<i class='bx bx-dots-horizontal-rounded icon'></i>
							<ul class="menu-link">
								<li><a href="../../panel_dash/calif_app/panel_calif_app.php" class="btn-delete">Nuevo Chat</a></li>
							</ul>
						</div>
					</div>
					<div class="chat-box">
						<p class="day"><span>Hoy</span></p>
						<div class="msg">
								<p class="cx">Hola Gennial, en que te puedo ayudar?</p>
								<div class="scroller"></div><br><br><br><br><br><br><br><br><br><br>
							</div>
						</div>
						<form class="chat" method="post" autocomplete="off">
							<div><br><br><br>
								<input type="text" name="chat" id="chat" placeholder="Alguna duda?">
							</div><br>
							<div>
								<input type="submit" value="Enviar" id="btn">
							</div>
				</form>
						
						</div>
					</div>
				</div>
			</div>
		</main>
        <!-- MAIN -->
    </section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../cart/panel.js"></script>
	<script src="../../botcx/bot.js"></script>
</body>
</html>
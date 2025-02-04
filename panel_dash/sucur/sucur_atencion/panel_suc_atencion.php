<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../sucur_atencion/panel.css">
	<link rel="icon" type="img" href="../../../img/banco-falabella.svg">
	<title>Panel NPS Canales | 	Informe NPS </title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="../../pag_fd/inicio.php" class="brand"><img src="../../../img/banco-falabella.svg" alt="" height="55px" width="55px"> Panel Informe NPS | Canales</a>
		<ul class="side-menu">
			<li>
				<a href="#"><i class='bx bx-buildings icon'></i> Sucursales <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="../sucur_venta/panel_suc_venta.php">Venta</a></li>
					<li><a href="../sucur_atencion/panel_suc_atencion.php">Atención</a></li>
				</ul>
			</li>
			<li><a href="../../cart/panel_cart.php"><i class='bx bxs-group icon'></i> Cartera</a></li>
			<li><a href="../../calif_app/panel_calif_app.php"><i class='bx bx-star icon'></i> Calificación App</a></li>
			<li><a href="../../callcenter/panel_call.php"><i class='bx bx-phone icon'></i> Call Center</a></li>
			<li>
				<a href="#?"><i class='bx bxl-whatsapp icon'></i> Canales Digitales <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="../../canales_digitales/app/panel_app.php">App</a></li>
					<li><a href="../../canales_digitales/web/panel_web.php">Web</a></li>
					<li><a href="../../canales_digitales/wp/panel_wp.php">Whatsapp</a></li>
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
				<img src="../../../img/banderacol.png" alt="">
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
			<h1 class="title">Calificación App</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Panel</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Inicio</a></li>
			</ul>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>30/01/2025</h2>
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
							<h2>3.7</h2>
							<p>Calificación App IOS</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="60%"></span>
					<span class="label">60%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>4.8</h2>
							<p>Calificación App Android</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="97%"></span>
					<span class="label">97%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>2.100</h2>
							<p>Comentarios App IOS</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div><br>
					<img src="../../../img/app.gif" alt="" height="150px" width="220px">
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>20.875</h2>
							<p>Comentarios App Android</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div><br>
					<img src="../../../img/app.gif" alt="" height="150px" width="220px">
				</div>
			</div>
			<div class="data">
				<div class="content-data">
					<div class="head">
						<h3>Gráfica</h3>
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
				<div class="content-data">
					<div class="head">
						<h3>Chatbot Calificación App</h3>
						<div class="menu">
							<i class='bx bx-dots-horizontal-rounded icon'></i>
							<ul class="menu-link">
								<li><a href="../sucur_atencion/panel_suc_atencion.php" class="btn-delete">Nuevo Chat</a></li>
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
	<script src="../sucur_atencion/panel.js"></script>
	<script src="../../../../botcx/bot.js"></script>
</body>
</html>	
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="../login/css_login/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="../login/css_login/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
   <link rel="icon" type="img" href="../img/banco-falabella.svg" />
   <title>Inicio de sesión</title>
</head>

<body>
   <div class="container">
      <div class="img">
         <img src="../img/gennial.png">
      </div>
      <div class="login-content">
         <form method="POST" action="">
            <img src="../img/iconlog.png">
            <h2 class="title">BIENVENIDOS</h2>
            <?php 
            include("../consultphp/conexion_bd.php");
            include("../consultphp/controlador.php");
            ?>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user" style="color:#008f39"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input id="usuario" type="text" class="input" name="usuario">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock" style ="color:#008f39"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>

           <!--- <div class="text-center">
               <a class="font-italic isai5" href="">Olvidé mi contraseña</a>
               <a class="font-italic isai5" href="">Registrarse</a>
            </div> -->
            <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
         </form>
      </div>
   </div>
   <script src="login/../js_login/fontawesome.js"></script>
   <script src="login/../js_login/main.js"></script>
   <script src="login/../js_login/main2.js"></script>
   <script src="login/../js_login/jquery.min.js"></script>
   <script src="login/../js_login/bootstrap.js"></script>
   <script src="login/../js_login/bootstrap.bundle.js"></script>

</body>

</html>
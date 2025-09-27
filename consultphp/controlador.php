<?php
include "../consultphp/conexion_bd.php";

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["password"];
        $query = "SELECT * FROM Canales.dbo.USUARIO WHERE usuario = '$usuario' AND clave = '$clave'";
        
        $sql = odbc_exec($conn, $query);

        if (!$sql) {
            echo '<div class="alert alert-danger">Error en la consulta</div>';
        } elseif (odbc_fetch_row($sql)) {
            header("Location: ../pag_fd/inicio.php");
            exit();
        } else {
            echo '<div class="alert alert-danger">Acceso Denegado</div>';
        }
    }
}
?>

<?php
if(!empty($_POST["btningresar"])){
    if(empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    }else{
        $usuario = $_POST["usuario"];
        $clave = $_POST["password"];
        $query = ("SELECT * FROM Canales.dbo.USUARIO WHERE usuario = '$usuario' and clave ='$clave'");
        $sql = sqlsrv_query($conn, $query);
        if( $sql === false) {
            die(print_r( sqlsrv_errors(), true));
        }else{
           echo '';
        }
        if ($row = sqlsrv_fetch_array($sql)) {
            header("location:../pag_fd/inicio.php");
        }else{
            echo '<div class="alert alert-danger">Acceso Denegado</div>';
        }
    }
}
?>
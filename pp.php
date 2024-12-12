<?php
$inc = include("conexion.php");
if($inc){
    $consulta = "SELECT * FROM CART_ID";
    $resultado = mysqli_query($conn, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $ID_CLIENTE = $row['ID_CLIENTE']; 
        }
        ?>
    }
}
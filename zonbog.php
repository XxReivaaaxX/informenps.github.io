<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$consulta = "SELECT * FROM CART_ID"
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
foreach ($data as $dat) {
    ?>

    <tr>
        <td><?php echo $dat['ID_CLIENTE']?></td>
    </tr>
    <?php
}  
?>


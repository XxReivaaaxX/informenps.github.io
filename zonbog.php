<?php
    $conexion=mysql_connect('CO1P84S\REP04','DWHUSER','dwhuser','Canales');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <td>ID_CLIENTE</td>
        </tr>
  
<?php
$sql="SELECT * FROM CART_ID";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['ID_CLIENTE']?></td>
    </tr>
<?php
}
?>
</table>
</body>
</html>
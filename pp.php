<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $serverName = "CO1P84S\REP04";
    $database = "Canales";
    $uid = "";
    $pass = "";

    $connection =  [
        "Database" => $database,
        "Uid" => $uid,
        "PWD" => $pass
    ];


    $conn = sqlsrv_connect($serverName, $connection);
    if (!$conn)
        die(print_r(sqlsrv_errors(), true));

    $tsql = "SELECT top 1 * REPORTING_NPS_DETALLE";
    $stmt = sqlsrv_query($conn, $tsql);

    if ($stmt == false) {
        echo 'Error';
    }
    while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo $obj['Nombre_Ejecutivo'] . '</br>';
    }
    ?>

</body>

</html>
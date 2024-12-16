<?php
    $serverName = "CO1P84S\REP04";
    $database = "Canales";
    $uid = "";
    $pass = "";
    $header = ('Content-type:  text/plain; charset=utf-8');

    $connection =  [
        "Database" => $database,
        "Uid" => $uid,
        "PWD" => $pass
    ];

    $conn = sqlsrv_connect($serverName, $connection);
    if( $conn ) {
        echo "";
   }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r(sqlsrv_errors(), true));
   }
    ?>

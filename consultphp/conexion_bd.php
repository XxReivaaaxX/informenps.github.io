<?php
   $serverName = "CO1P84S\\REP04";
$connectionInfo = array(
    "Database" => "Canales",
    "CharacterSet" => "UTF-8",
    "TrustServerCertificate" => true,
    "Encrypt" => false,
    "IntegratedSecurity" => true
);
$conn = sqlsrv_connect($serverName, $connectionInfo);

    ?>


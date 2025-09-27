<?php
$serverName = "CO1P84S\\REP04";
$connectionInfo = array(
    "Database" => "Canales",
    "CharacterSet" => "UTF-8",
    "Encrypt" => false,
    "TrustServerCertificate" => true
);

$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo "✅ Conexión exitosa.";
} else {
    echo "❌ Conexión no se pudo establecer.<br>";
    die(print_r(sqlsrv_errors(), true));
}
?>


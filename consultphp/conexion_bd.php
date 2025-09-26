<?php
$serverName = "CO1P84S\REP04"; // Doble backslash para escapar la instancia
$connectionOptions = array(
    "Database" => "Canales",
    "CharacterSet" => "UTF-8",
    "Encrypt" => false,
    "TrustServerCertificate" => true
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    echo "❌ Conexión no se pudo establecer.<br>";
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "✅ Conexión exitosa con autenticación integrada.";
}
?>

<?php
$serverName = "CO1P84S\REP04"; // Doble backslash para escapar la instancia
$connectionOptions = array(
    "Database" => "Informes_Comerciales",
    "CharacterSet" => "UTF-8",
    "Encrypt" => false,
    "TrustServerCertificate" => true
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    echo "❌ Conexión no se pudo establecer.<br>";
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "✅ Conexión exitosa con autenticación integrada.";
}
?>

<?php

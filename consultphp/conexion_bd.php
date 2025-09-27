
<?php
$serverName = "CO1P84S\REP04"; // o el nombre de tu servidor SQL
$connectionOptions = [
    "Database" => "Canales",
    "Uid" => "dwhuser", // tu usuario de SQL Server
    "PWD" => "dwhuser" // tu contraseña
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("❌ Error de conexión: " . print_r(sqlsrv_errors(), true));
}
?>


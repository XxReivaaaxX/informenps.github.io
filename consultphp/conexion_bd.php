<?php
$dsn = "SQL_PHP"; // El nombre que diste al DSN
$conn = odbc_connect($dsn, "", ""); // No necesitas usuario ni contraseña

if (!$conn) {
    echo "❌ Error de conexión.<br>";
    echo odbc_errormsg();
} else {
    echo "✅ Conexión exitosa usando DSN.";
}
?>

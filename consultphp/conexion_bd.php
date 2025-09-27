<?php
$dsn = "SQL_PHP"; // DSN
$conn = odbc_connect($dsn, "", ""); // No usuario ni contraseña


$debug = false;

if (!$conn) {
    echo "❌ Error de conexión.<br>";
    echo odbc_errormsg();
} else {
    if ($debug) {
        echo "✅ Conexión exitosa usando DSN.";
    }
}

?>

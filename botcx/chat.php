<?php
include "../botcx/Bot.php";
include "../consultphp/conexion_bd.php";

$bot = new Bot;

function getRespuestaDesdeSQL($msg, $conn) {
    $sql = "SELECT respuesta FROM respuestas_bot WHERE LOWER(pregunta) = ?";
    $params = [strtolower($msg)];
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt && sqlsrv_fetch($stmt)) {
        return sqlsrv_get_field($stmt, 0);
    } else {
        return null;
    }
}

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) use ($msg, $conn) {
        $respuesta = getRespuestaDesdeSQL($msg, $conn);
        if ($respuesta) {
            $botty->reply($respuesta);
        } else {
            $botty->reply("Lo siento, no encontré una respuesta relacionada. ¿Puedes reformular?");
        }
    });
}

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
?>



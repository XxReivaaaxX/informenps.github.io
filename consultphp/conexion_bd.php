<?php
    $serverName = "CO1P84S\REP04";
    $connectionInfo = array("Database"=>"Canales", "UID"=>"", "PWD"=>"");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if($conn) {
        echo "";
   }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r(sqlsrv_errors(), true));
   }
    ?>

<?php
   $serverName = "CO1P84S\REP04";
   $connectionInfo = array("Database"=>"Informes_Comerciales", "UID"=>"", "PWD"=>"");
   $conn = sqlsrv_connect($serverName, $connectionInfo);
   if($conn) {
       echo "";
  }else{
       echo "Conexión no se pudo establecer.<br />";
       die(print_r(sqlsrv_errors(), true));
  }
   ?>


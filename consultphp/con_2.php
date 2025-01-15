<?php
  $ServerN = "localhost:3306";
  $UserN = "root";
  $PassN = "Pipe@2323";
  $DB_N = "ENVIOS_WEB_GEN";
  $conn_2 =  mysqli_connect($ServerN,$UserN,$PassN,$DB_N);
  
  if(!$conn_2){
     die("Error al conectar" . mysql_error());
  }else{
     echo "Correcto";
  }


   ?>
<?php
  $ServerN = "rdssqlserver.cti2giu4mou2.us-east-2.rds.amazonaws.com";
  $UserN = "admincx2025";
  $PassN = "admincx2025";
  $DB_N = "CX_BFCO";
  $conn_2 =  mysqli_connect($ServerN,$UserN,$PassN,$DB_N);
  
  if(!$conn_2){
     die("Error al conectar" . mysql_error());
  }else{
     echo "Correcto";
  }


   ?>
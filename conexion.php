<?php
class Conexion{
    public static function Conectar(){
        define ('servidor', 'CO1P84S\REP04');
        define ('nombre_bd', 'Canales');
        define ('usuario', 'DWHUSER');
        define ('password', 'dwhuser');



        $opciones = array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try{
            $conexion = new PDO("mysql_host=".servidor."; dbname" .nombre_bd, usuario,password, $opciones);
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
        }
    }
?>
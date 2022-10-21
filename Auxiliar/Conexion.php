<?php
    require_once 'Parametros.php';
    require_once 'Model/Jugador.php';
    require_once 'Model/Tablero.php';

    class Conexion{
        public static $conexion;
        public static $query;
        public static $resultado;

        static function abrirConexion(){
            self::$conexion = new mysqli(Parametros::$host, Parametros::$usuario, Parametros::$passwd, Parametros::$bd);

            if(mysqli_connect_errno(self::$conexion)) {
                die();
            }
        }


        
        static function cerrarConexion(){
            mysqli_close(self::$conexion);
        }
    }
?>
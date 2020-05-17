<?php 

    const HOST = "localhost";
    const USER = "root";
    const PASS = "";
    const DB = "software_colegio";

    class DB{

        protected static $conexion;
        
        function __construct(){

            self::$conexion = mysqli_connect(HOST, USER, PASS, DB);
        }

        protected static function sql($query){
        
            $result = [];
                        
            if(self::$conexion != false){
                
                $resultSql = mysqli_query(self::$conexion, $query);
                $totalRegistros = mysqli_num_rows($resultSql);
                if($totalRegistros > 0){

                    while($registro = mysqli_fetch_assoc($resultSql)){
                        
                        $result[] = $registro;
                    }
                }
            }

            return $result;
        }

        protected static function query($query){
        
            $result = false;
                        
            if(self::$conexion != false){
                
                if(mysqli_query(self::$conexion, $query)){

                    $result = true;
                }
            }

            return $result;
        }

        function __destruct(){

            mysqli_close(self::$conexion);
        }
    }
?>
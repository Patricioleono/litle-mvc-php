<?php
class Conectar{
    public static function conexion(){
        $conexion = new mysqli("localhost","root","Panda92","mvcpruebas");
        return $conexion;
    }
}

?>
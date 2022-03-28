<?php

function conectaBBDD(){
    $direccion= "localhost";
    $usuario_BBDD="pruebasTEST";
    $password_BDDD="3uYGZm7QKmUBLDn2";
    $nombre_BBDD= "ejemploquiz";
    $puerto = "3306";
    $conexion = new mysqli($direccion,$usuario_BBDD, $password_BDDD,$nombre_BBDD,$puerto);
    
    $consulta = $conexion ->query("SET NAMES UTF8");
    return $conexion;
}


   
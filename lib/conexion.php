<?php
    session_start();
    // Variables de conexión
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database ="seguimiento";
    // crear la variable que maneja la conexión
    $conexion = new mysqli($servername,$username,$password,$database)
    or die("Conexión falló: ". $conexion->connect_error);
 
?>
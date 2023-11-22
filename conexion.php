<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "registrados";

    $conexion = mysqli_connect($host,$user,$pass,$db);

    if(!$conexion){
        echo "fallo la conexion";
    }
?>
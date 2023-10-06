<?php
    $conexion = new mysqli("localhost","root","","comic");
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conexion";
    }

?>
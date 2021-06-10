<?php

    $conexion = mysqli_connect("localhost","id16803754_simulador","Temporal2000@","id16803754_boomp");
    

    if($conexion)
    {
        echo'Conectado exitosamente a la base';
    }
    else{
        echo 'No se ha podido conectar';
    }

?>
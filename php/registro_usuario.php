<?php

    include 'conexion_be.php';

    $re_usuario = $_POST['usuario'];
    $re_nombre = $_POST['nombre'];
    $re_correo = $_POST['correo'];
    $re_contra = $_POST['contra'];

    $query = "INSERT INTO usuarios(usu_usuario,usu_nombre,usu_correo,usu_contra)
              VALUES('$re_usuario','$re_nombre','$re_correo','$re_contra')";

    $verificar_correo =mysqli_query($conexion,"SELECT * from usuarios WHERE usu_correo='$re_correo' ");                                                                                              

    if(mysqli_num_rows($verificar_correo)>0)
    {
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro");
                window.location = "../registro.html"; 
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    $verificar_usuario =mysqli_query($conexion,"SELECT * from usuarios WHERE usu_usuario='$re_usuario' ");                                                                                              

    if(mysqli_num_rows($verificar_usuario)>0)
    {
        echo'
            <script>
                alert("Este usuario ya esta registrado, intenta con otro");
                window.location = "../registro.html";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }
    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar)
    {
        echo'
        <script>
                                                        
            window.location = "../registro.html";
        </script>
        ';
    }
    else{
        echo '
        <script>
            window.location = "../registro.html";
        </script>
        ';
    }

    mysqli_close($conexion);
?>
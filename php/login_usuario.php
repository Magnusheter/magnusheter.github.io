<?php

    session_start();

    include '$conexion_be.php';
    $correo=$_POST['correo'];
    $contra=$_POST['contra'];

    $val_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usu_correo ='$correo' 
    and usu_contra='$contra'");

    if(mysqli_num_rows($val_login)>0)
    {
        $_SESSION['usuario']=$correo;
        header("location:../perfil.html");
        exit;
    }
    else
    {
        echo'
            <script>
                alert("Usuario no existe, verifique los datos");
                window.location = "../login.html";
            </script>
        ';
        exit;
    }



?>
<?php
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $nombre_bd = "tubasededatos";

    $conex = mysqli_connect($servidor, $usuario, $contraseña, $nombre_bd);

    // if($conex){
    //     echo "Conectado exitosamente";
    // } else {
    //     echo "Error";
    // }
?>
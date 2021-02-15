<?php
include 'conexion_bd.php';
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contrasena = '$password'";
$consulta = mysqli_query($conex, $sql);

sleep(3);
if(mysqli_num_rows($consulta) > 0){
    echo 'Sesion iniciada';
} else {
    echo "error";
}
?>
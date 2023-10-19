<?php
session_start();
include_once("model/conexion.php");
$usuario = $_POST['username'];
$password = $_POST['pwd'];
$q = "SELECT COUNT(*) as contar from usuarios where nombre_usuario= '$usuario' and password = '$password'";
$consulta = mysqli_query($connection, $q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['username']=$usuario;
    header("location: ./dashboard.php");
}else{
    echo "Error al loguearte";
    sleep(5);
    header("location: ./login.php");
}
?>
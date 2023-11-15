<?php
echo "a";
if($_SESSION['flag'] === 1){
    session_start();
    //cadena de conexion
    $conexion = mysqli_connect("localhost", "root","","floreria");

    //si no existe la base de datos
    if (!$conexion){
        die("No existe la base de datos" .mysqli_connect_error());
    }

    $usuario = $_SESSION['usuario'];
    $clave = $_SESSION['clave'];

    $selectIDuser = "select max(IDUsuario) as max from USUARIO";
    $queryUser = mysqli_query($conexion, $selectIDuser);
    $filasUser = mysqli_fetch_array($queryUser);
    $ultimaIDuser = $filasUser['max'];
    $userID = $ultimaIDuser + 1;

    // $selectIDCliente = "select max(IDCliente_Empresa) as max from CLIENTE_EMPRESA";
    // $queryCliente = mysqli_query($conexion, $selectIDCliente);
    // $filasCliente = mysqli_fetch_array($queryCliente);
    // $ultimaIDCliente = $filasCliente['max'];
    // $clienteID = $ultimaIDCliente + 1;

    $_SESSION['id'] = 1;

    $insertUser = "insert into USUARIO (Nombre_de_Usuario, Password, IDUsuario, IDPerfil_Cargo) values ('$usuario', '$clave', '$userID', 1)";

    if (mysqli_query($conexion, $insertUser) === TRUE) {
        echo "a";
        header("Location:../");
    } else {
        echo "Error: " . $insertUser . "<br>" . $conexion->error;
    }
}
?>
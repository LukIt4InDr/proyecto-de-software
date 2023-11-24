<?php

session_start();

$conexion = mysqli_connect("localhost", "id21416178_admin","Admin.12","id21416178_floreria");

if (!$conexion)
    die("No existe la base de datos" .mysqli_connect_error());

$nombre = $_POST["user"];
$clave = $_POST["pswd"];

$select = "select Nombre_de_Usuario from usuario where Nombre_de_Usuario = '{$nombre}'";
$query = mysqli_query($conexion, $select);

$filas = mysqli_num_rows($query);
$user = mysqli_fetch_assoc($query);

if ($filas == 1){
    $_SESSION['message']= '<div class="alert alert-danger alert-dismissible text-center fade show" role="alert">El nombre de usuario ya esta en uso<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">';
    header("Location:../signup.php");
}        
else{    
    $selectIDuser = "select max(IDUsuario) as max from usuario";
    $queryUser = mysqli_query($conexion, $selectIDuser);
    $filasUser = mysqli_fetch_array($queryUser);
    $ultimaIDuser = $filasUser['max'];
    $userID = $ultimaIDuser + 1;

    $_SESSION['id'] = 1;

    $insertUser = "insert into usuario (Nombre_de_Usuario, Password, IDUsuario, IDPerfil_Cargo) values ('$nombre', '$clave', '$userID', 1)";

    if (mysqli_query($conexion, $insertUser) === TRUE) {
        $select = "select Nombre_de_Usuario, IDPerfil_Cargo from usuario where Nombre_de_Usuario = '{$nombre}' and  Password = '{$clave}' ";
        $query = mysqli_query($conexion, $select);

        $filas = mysqli_num_rows($query);
        $user = mysqli_fetch_assoc($query);

        $_SESSION['user'] = $user;
        if(isset($_SESSION['confirmarCompra'])){
            header("Location:../realizarpago.php");
            //exit();   
        }
        header("Location:../");
    }
}

?>
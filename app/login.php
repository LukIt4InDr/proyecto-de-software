<?php

session_start();

/*if(isset($_SESSION['user'])){
    header("Location:../index.php");
}*/

//cadena de conexion
$conexion = mysqli_connect("localhost", "root","","floreria3");

//si no existe la base de datos
if (!$conexion)
    die("No existe la base de datos" .mysqli_connect_error());

//tomo los valores de las variables
$nombre = $_POST["txtusuario"];
$clave = $_POST["txtclave"];

//Traigo la informacion desde el inicio de sesion
$select = "select Nombre_de_Usuario, IDPerfil_Cargo from USUARIO where Nombre_de_Usuario = '{$nombre}' and  Password = '{$clave}' ";
$query = mysqli_query($conexion, $select);

//Hago un conteo para saber si existe el usuario
$filas = mysqli_num_rows($query);
$user = mysqli_fetch_assoc($query);

/*echo "<pre>";
print_r($user);
echo "</pre>";*/

//Si existe el usuario se muestra un mensaje de Bienvenida, sino se muestra que el usuario no existe
if ($filas == 1){
    echo "Bienvenido " . $nombre;
    $_SESSION['user'] = $user;
    if(isset($_SESSION['confirmarCompra'])){
        header("Location:../realizarpago.php");
        exit();   
    }
    
    if($_SESSION['user']['IDPerfil_Cargo']==1){
        header("Location:../galeria.php");
        exit();
    }
    header("Location:../index.php");
}        
else{    
    $_SESSION['message']= '<div class="alert alert-danger alert-dismissible text-center fade show" role="alert">usuario o clave incorrecto<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">';
    header("Location:../login.php");
}

?>
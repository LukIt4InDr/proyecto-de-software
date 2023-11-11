<?php
if(isset($_POST['submit'])){
    session_start();
    //cadena de conexion
    $conexion = mysqli_connect("localhost", "root","","floreria");

    //si no existe la base de datos
    if (!$conexion){
        die("No existe la base de datos" .mysqli_connect_error());
    }

    $usuario = $_SESSION['usuario'];
    $clave = $_SESSION['clave'];
    $email = $_SESSION['email'];

    $name = explode(" ", $_POST['name']);
    $nombre = $name[0];
    $apellido = $name[1];
    $telefono = $_POST['phone'];
    $direccion = $_POST['direc'];
    $postal = $_POST['postal'];
    $dni = $_POST['dni'];

    $selectID = "select max(IDUsuario) as max from USUARIO";
    $queryUser = mysqli_query($conexion, $selectID);
    $filas = mysqli_fetch_array($queryUser);
    $ultimaID = $filas['max'];
    $userID = $ultimaID + 1;

    $_SESSION['id'] = 1;

    $insertUser = "insert into USUARIO (Nombre_de_Usuario, Password, IDUsuario, IDPerfil_Cargo) values ('$usuario', '$clave', '$userID', 1)";

    if (mysqli_query($conexion, $insertUser) === TRUE) {
        $insertClient = "insert into CLIENTE_EMPRESA (Nombre, ApellidoDeCliente, Email, Telefono, Calle, Numero, Localidad, Partido, CP, Usuario, ID_Empleado) values ('$nombre', '$apellido', '$email', '$telefono', '$direccion', '$direccion', '$direccion', '$direccion', '$postal', '$usuario', 100)";

        if(mysqli_query($conexion, $insertClient) === TRUE){
            header("Location:../");
        } else{
            echo "Error: " . $insertClient . "<br>" . $conexion->error;
        }
    } else {
        echo "Error: " . $insertUser . "<br>" . $conexion->error;
    }
}
?>
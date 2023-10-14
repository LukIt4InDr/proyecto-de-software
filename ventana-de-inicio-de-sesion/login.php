<?php

//cadena de conexion
$conexion = mysqli_connect("localhost", "root","","floreria");

//si no existe la base de datos
if (!$conexion)
    die("No existe la base de datos" .mysqli_connect_error());

//tomo los valores de las variables
$nombre = $_POST["txtusuario"];
$clave = $_POST["txtclave"];

//Traigo la informacion desde el inicio de sesion
$select = "select Nombre_de_Usuario from USUARIO where Nombre_de_Usuario = '{$nombre}' ";
$query = mysqli_query($conexion, $select);

//Hago un conteo para saber si existe el usuario
$filas = mysqli_num_rows($query);

//Si existe el usuario se muestra un mensaje de Bienvenida, sino se muestra que el usuario no existe
if ($filas == 1)
    echo "Bienvenido " . $nombre;
else
    echo "el usuario no existe";

?>
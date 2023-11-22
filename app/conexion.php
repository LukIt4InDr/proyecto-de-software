<?php
//cadena de conexion
$conexion = mysqli_connect("localhost", "root","","floreria4");

//si no existe la base de datos
if (!$conexion)
    die("No existe la base de datos" .mysqli_connect_error());
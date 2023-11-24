<?php
//cadena de conexion
$conexion = mysqli_connect("localhost", "id21416178_admin","Admin.12","id21416178_floreria");

//si no existe la base de datos
if (!$conexion)
    die("No existe la base de datos" .mysqli_connect_error());
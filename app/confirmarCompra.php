<?php

session_start();
error_reporting(0);

$_SESSION['confirmarCompra'] = true;

header("Location:../datoscompra.php");
<?php

session_start();

$_SESSION['confirmarCompra'] = true;

header("Location:../datoscompra.php");
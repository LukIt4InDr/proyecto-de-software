<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleTarjeta.css">

    <title>Floreria Petals</title>
</head>

<body>

    <div class="container">
         <!--Menu-->
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="imagenes/petals-logo.png" alt="petals-logo" id="logo"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php">Arreglo floral</a>
                    </li>
                    <?php if(isset($_SESSION['user'])){?>
                        <?php if($_SESSION['user']['IDPerfil_Cargo']==1){ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="historial-compras.php">Mis compras</a>
                        </li>
                        <?php }?>
                        <?php if($_SESSION['user']['IDPerfil_Cargo']==20){ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="preparar_envios.php">Preparación de envios</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="envio_pedidos.php">Envio de Pedidos</a>
                        </li>
                        <?php }?>
                    <?php }?>                     
                </ul>
               
                <form action="galeria_busqueda.php" method="get" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="busqueda" id="busqueda">
                    <button class="btn btn-success">Buscar</button>
                </form>

                <?php if (isset($_SESSION['user'])) { ?>
                    <a href="app/logout.php" class="btn btn-danger" id="iniciar-sesion">Cerrar sesion</a>
                <?php } else { ?>
                
                    <a href="login.php" class="btn btn-primary btn me-2" type="submit" id="iniciar-sesion">Iniciar sesion</a>
                    <a href="signup.php" class="btn btn-outline-secondary btn" type="submit" id="registrarse">Registrarse</a>
                
                <?php } ?>
                
            </div>
        </div>
    </nav>
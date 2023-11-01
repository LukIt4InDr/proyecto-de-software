<?php
if(isset($_POST['submit'])){
    session_start();
    //cadena de conexion
    $conexion = mysqli_connect("localhost", "root","","floreria");

    //si no existe la base de datos
    if (!$conexion)
        die("No existe la base de datos" .mysqli_connect_error());

    //tomo los valores de las variables
    $nombre = $_POST["user"];
    $clave = $_POST["pswd"];

    $_SESSION["usuario"] = $nombre;
    $_SESSION["contraseña"] = $clave;

    //Traigo la informacion desde el inicio de sesion
    $select = "select Nombre_de_Usuario from USUARIO where Nombre_de_Usuario = '{$nombre}' and  Password = '{$clave}' ";
    $query = mysqli_query($conexion, $select);

    //Hago un conteo para saber si existe el usuario
    $filas = mysqli_num_rows($query);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>

    <title>Floreria Petals</title>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand-sm bg-light py-3">
            <div class="container">
                <a class="navbar-brand" href="../inicio"><img src="img/petals-logo.png" alt="petals-logo" id="logo"></a>
                <div>
                    <a href="#"><img src="img/user-icon.png" class="rounded-circle" alt="user-icon" id="user-icon"></a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5" id="login">
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 card mt-5" id="card-login">
            <div class="card-body">
                <h1>Iniciar Sesión</h1>
                <?php
                //Si existe el usuario se muestra un mensaje de Bienvenida, sino se muestra que el usuario no existe
                if(isset($_POST['submit'])){
                    if ($filas == 1)
                        header('Location: ../inicio');
                    else
                        echo '<div class="error">El Usuario o la Contraseña son incorrectos.</div>';
                }
                ?>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="formu">
                    <div class="mt-4">
                        <label for="user" class="form-label">Usuario:</label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Ingrese Usuario" required>
                        <div class="invalid-feedback" id="usuarioInvalido">
                            Ingrese el Usuario.
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="pswd" class="form-label">Contraseña:</label>
                        <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Ingrese Contraseña" required>
                        <div class="invalid-feedback" id="contraseñaInvalida">
                            Ingrese la Contraseña.
                        </div>
                    </div>
                    <div class="form-check mt-4">
                        <input type="checkbox" name="rmpwd" id="rmpwd" class="form-check-input">
                        <label for="rmpwd" class="form-check-label">Recordar Usuario</label>
                    </div>
                    <?php
                        
                    ?>
                    <button type="submit" name="submit" class="btn btn-primary mt-4 mb-5">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
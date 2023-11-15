<?php
$msg = null;
if(isset($_POST['submit'])){
    session_start();

    //cadena de conexion
    $conexion = mysqli_connect("localhost", "root","","floreria3");

    //si no existe la base de datos
    if (!$conexion){
        die("No existe la base de datos" .mysqli_connect_error());
    }

    $usuario = $_POST['user'];
    $clave = $_POST['pswd'];

    $selectUser = "select * from USUARIO where Nombre_de_Usuario = '{$usuario}'";
    $queryUser = mysqli_query($conexion, $selectUser);

    $filasUser = mysqli_num_rows($queryUser);
    if(isset($_POST['submit'])){
        if ($filasUser == 1){
            $msg = '<div class="error">El Nombre de Usuario ya existe.</div>';
        } else{
            $_SESSION['usuario'] = $usuario;
            $_SESSION['clave'] = $clave;

            $selectIDuser = "select max(IDUsuario) as max from USUARIO";
            $queryUser = mysqli_query($conexion, $selectIDuser);
            $filasUser = mysqli_fetch_array($queryUser);
            $ultimaIDuser = $filasUser['max'];
            $userID = $ultimaIDuser + 1;

            $_SESSION['id'] = 1;

            $insertUser = "insert into USUARIO (Nombre_de_Usuario, Password, IDUsuario, IDPerfil_Cargo) values ('$usuario', '$clave', '$userID', 1)";

            if (mysqli_query($conexion, $insertUser) === TRUE) {
                header("Location:../");
            } else {
                echo "Error: " . $insertUser . "<br>" . $conexion->error;
            }
        }
    }
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
                <a class="navbar-brand" href="../"><img src="img/petals-logo.png" alt="petals-logo" id="logo"></a>
                <div>
                    <!-- <a href="../ventana-de-inicio-de-sesion/index.html"><img src="img/user-icon.png" class="rounded-circle" alt="user-icon" id="user-icon"></a> -->
                    <a href="../ventana-de-inicio-de-sesion/login.php" class="btn btn-primary btn-lg" type="submit" id="iniciar-sesion">Ingresar</a>
                    <a href="#" class="btn btn-outline-secondary btn-lg" type="submit" id="registrarse">Registrarse</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5" id="sign-up">
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 card mt-5" id="card-sign-up">
            <div class="card-body">
                <h1>Registrarse</h1>
                <?php echo $msg; ?>
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
                    <div class="mt-4">
                        <label for="pswdR" class="form-label">Confirme Contraseña:</label>
                        <input type="password" name="pswdR" id="pswdR" class="form-control" placeholder="Confirme Contraseña" required>
                        <div class="invalid-feedback" id="contraseñaCInvalida">
                            La contraseña no coincide.
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mt-4 mb-5">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
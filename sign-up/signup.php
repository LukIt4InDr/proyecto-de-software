<?php
if(isset($_POST['submit'])){
    session_start();
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
                    <!-- <div class="mt-4">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre" required>
                        <div class="invalid-feedback" id="nombreInvalido">
                            Ingrese el Nombre.
                        </div>
                    </div> -->
                    <div class="mt-4">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese Email" required>
                        <div class="invalid-feedback" id="emailInvalido">
                            Ingrese el Email.
                        </div>
                    </div>
                    <!-- <div class="mt-4">
                        <label for="phone" class="form-label">Teléfono:</label>
                        <input type="number" name="phone" id="phone" class="form-control" placeholder="Ingrese Teléfono" required>
                        <div class="invalid-feedback" id="phoneInvalido">
                            Ingrese el Teléfono.
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="direc" class="form-label">Direccíon:</label>
                        <input type="text" name="direc" id="direc" class="form-control" placeholder="Ingrese Direccíon" required>
                        <div class="invalid-feedback" id="direcInvalido">
                            Ingrese el Direccíon.
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="postal" class="form-label">Código Postal:</label>
                        <input type="number" name="postal" id="postal" class="form-control" placeholder="Ingrese Código Postal" required>
                        <div class="invalid-feedback" id="postalInvalido">
                            Ingrese el Código Postal.
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="dni" class="form-label">DNI:</label>
                        <input type="number" name="dni" id="dni" class="form-control" placeholder="Ingrese DNI" required>
                        <div class="invalid-feedback" id="dniInvalido">
                            Ingrese el DNI.
                        </div>
                    </div> -->
                    <button type="submit" name="submit" class="btn btn-primary mt-4 mb-5">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
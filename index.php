<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <!-- <script defer src="script.js"></script> -->

    <title>Floreria Petals</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-light py-3">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/petals-logo.png" alt="petals-logo" id="logo"></a>
                <div>
                    <a href="ventana-de-inicio-de-sesion/index.html"><img src="img/user-icon.png" class="rounded-circle" alt="user-icon" id="user-icon"></a>
                </div>
            </div>
        </nav>
    </header>

    <section id="hero">
        <div class="container home">
            <div class="mt-5">
                <h1 class="mx-5" id="bienvenida">Bienvenido a Floreria<br>Petals</h1>
            </div>
            <div>
                <a href="galeria/index.html" role="button" class="btn btn-primary btn-lg mx-5">Arreglos Florales</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="about-us">
                <h2>Quienes somos</h2>
                <p id="Texto-Bienvenido">Florería Petals es un e-commerce que consiste en la venta de arreglos florales a través
                    de Internet apuntada a
                    que el usuario tenga una experiencia de compra más personalizada gracias a la elección de una gran variedad
                    de
                    ramos de flores además de poder seleccionar tarjetas prediseñadas dentro de un catálogo seleccionado o la
                    posibilidad de crear su propia tarjeta personalizada con las herramientas que le proporciona la app
                    web.Puede
                    además, redactar un mensaje para el destinatario del arreglo floral que quedará registrado.
                </p>
            </div>
            <div id="ver-mas">
                <h2>Conocé más de lo que tenemos</h2>
                <p>Mirá lo que tenemos en nuestra galeria</p>
                <div>
                    <img src="./galeria/imagenes/4.jpg" alt="">
                    <img src="./galeria/imagenes/2.jpg" alt="">
                    <img src="./galeria/imagenes/3.jpg" alt="">
                </div>
                <div>
                    <a href="galeria/index.html" class="btn btn-primary btn-lg" type="submit" id="ver-galeria">Ver galeria</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
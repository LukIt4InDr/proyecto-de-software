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
 
<?php
include 'sections/header.php';
?>

    <section id="hero">
        <div class="container home">
            <div>
            <h1 class="mx-5" id="bienvenida">Bienvenido a Floreria<br>Petals</h1>
                <img src="imagenes/background.jpg" alt="" id="imagen-inicio">
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
                    <img src="imagenes/4.jpg" alt="">
                    <img src="imagenes/2.jpg" alt="">
                    <img src="imagenes/3.jpg" alt="">
                </div>
                <div>
                    <a href="galeria.php" class="btn btn-primary btn-lg" type="submit" id="ver-galeria">Ver galeria</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'sections/footer.php'; ?>

</body>
</html>
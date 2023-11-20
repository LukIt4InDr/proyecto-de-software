<?php
session_start();
include 'sections/header.php';
?>

<div class="container">
    <div class="row">
        <?php
       if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
       }
        ?>
    </div>
</div>

<section id="hero">
    <div class="container home">
        <div class="container d-flex align-items-center justify-content-center" id="principal-div">
         
            <img src="imagenes/fondo.png" alt="" id="imagen-inicio">
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="about-us">
            <h2>Quienes somos</h2>
            <p id="Texto-Bienvenido">Florería Petals es un e-commerce que consiste en la venta de arreglos florales a
                través
                de Internet apuntada a
                que el usuario tenga una experiencia de compra más personalizada gracias a la elección de una gran
                variedad
                de
                ramos de flores además de poder seleccionar tarjetas prediseñadas dentro de un catálogo seleccionado o
                la
                posibilidad de crear su propia tarjeta personalizada con las herramientas que le proporciona la app
                web.Puede
                además, redactar un mensaje para el destinatario del arreglo floral que quedará registrado.
            </p>
        </div>
        <div id="ver-mas">
            <h2>Conocé más de lo que tenemos</h2>
            <p>Mirá lo que tenemos en nuestra galeria</p>

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1300">
                        <img src="imagenes/2.jpg" class="d-block w-10 mx-auto rounded" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="1300">
                        <img src="imagenes/3.jpg" class="d-block w-10 mx-auto rounded " alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="1300">
                        <img src="imagenes/4.jpg" class="d-block w-10 mx-auto rounded " alt="...">
                    </div>
                </div>

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
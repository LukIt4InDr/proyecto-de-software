<?php
session_start();
include 'sections/header.php';

 ?>
 <div class="container">     
    <?php
    if(isset($_SESSION["message"])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
     ?>     
 </div>
   <div class="container mt-1" id="login">
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 card mt-1" id="card-login">
            <div class="card-body">
                <h1>Iniciar Sesión</h1>
                <form method="post" action="app/login.php">
                    <div class="mt-4">
                        <label for="user" class="form-label">Usuario:</label>
                        <input type="text" name="txtusuario" id="user" class="form-control" placeholder="Ingrese Usuario" required>
                    </div>
                    <div class="mt-4">
                        <label for="pswd" class="form-label">Contraseña:</label>
                        <input type="password" name="txtclave" id="pswd" class="form-control" placeholder="Ingrese Contraseña" required>
                    </div>
                    <div class="form-check mt-4">
                        <input type="checkbox" name="rmpwd" id="rmpwd" class="form-check-input">
                        <label for="rmpwd" class="form-check-label">Recordar Usuario</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 mb-5">Ingresar</button>
                </form>
            </div>
        </div>
    </div>

 <?php

include 'sections/footer.php';
?>
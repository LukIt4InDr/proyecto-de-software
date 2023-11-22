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
    
 <div class="container mt-5" id="sign-up">
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 card mt-5" id="card-sign-up">
            <div class="card-body">
                <h1>Registrarse</h1>
                <form method="post" action="app/signup.php" id="formu">
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

<?php

include 'sections/footer.php';
?>
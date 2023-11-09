window.onload = inicio;

function inicio(){
    let formu = document.getElementById("formu");
    formu.addEventListener("submit", enviar);
}

function enviar(evento){
    if(!validar()){
        evento.preventDefault();
    }
}

function validar(){
    let userH = document.getElementById("user");
    userH.classList.remove("is-invalid");
    let userV = userH.value;
    let usuarioInvalidoH = document.getElementById("usuarioInvalido");

    let pswdH = document.getElementById("pswd");
    pswdH.classList.remove("is-invalid");
    let pswdV = pswdH.value;
    
    let pswdRH = document.getElementById("pswdR");
    pswdRH.classList.remove("is-invalid");
    let pswdRV = pswdRH.value;

    let emailH = document.getElementById("email");
    emailH.classList.remove("is-invalid");
    let emailV = emailH.value;
    let emailInvalidoH = document.getElementById("emailInvalido");

    //Validacion de Usuario
    if(userV == ''){
        userH.classList.add("is-invalid");
        return false;
    }

    let userRegex = /^[a-zA-Z0-9]+$/;
    if(!userRegex.test(userV)){
        userH.classList.add("is-invalid");
        usuarioInvalidoH.innerHTML = "Escriba el Usuario con <b>Caracteres Normales</b>."
        return false;
    }

    //Validacion de Contraseña
    if(pswdV == ''){
        pswdH.classList.add("is-invalid");
        return false;
    }
    
    if(pswdRV != pswdV){
        pswdRH.classList.add("is-invalid");
        return false;
    }

    //Validacion de Email
    if(emailV == ''){
        emailH.classList.add("is-invalid");
        return false;
    }

    let emailRegex = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
    if(!emailRegex.test(emailV)){
        emailH.classList.add("is-invalid");
        emailInvalidoH.innerHTML = "Escriba el Email con <b>Caracteres Normales</b>."
        return false;
    }

    return true;
}
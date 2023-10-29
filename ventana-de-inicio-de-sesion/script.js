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

    let pswdH = document.getElementById("pswd");
    pswdH.classList.remove("is-invalid");
    let pswdV = pswdH.value;

    //Validacion de Usuario
    if(userV === ''){
        userH.classList.add("is-invalid");
        return false;
    }

    //Validacion de Contraseña
    if(pswdV === ''){
        pswdH.classList.add("is-invalid");
        return false;
    }

    return true;
}
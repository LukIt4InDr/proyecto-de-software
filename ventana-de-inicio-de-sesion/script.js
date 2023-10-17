window.onload = inicio;

function inicio(){
    let loginForm = document.getElementById("login-form");
    loginForm.addEventListener("submit", iniciarSesion);
}

function iniciarSesion(evento){
    if(validarInicio()){

    } else{
        evento.preventDefault();
    }
}

function validarInicio(){
    let userH = document.getElementById("user");
    let userV = userH.value;

    let pwdH = document.getElementById("pwd");
    let pdwV = pwdH.value;
    
    console.log(userV);
    if(!(userV === "Lucas" || userV === "Maria" || userV === "Daniel")){
        return false;
    }
    
    return true;
}
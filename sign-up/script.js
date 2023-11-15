window.onload = inicio;

function inicio(){
    let formu = document.getElementById("formu");
    formu.addEventListener("submit", enviar);
    let formu2 = document.getElementById("formu2");
    formu.addEventListener("submit", enviar2);
}

function enviar(evento){
    if(!validarUser()){
        evento.preventDefault();
    }
}

function enviar2(evento){
    if(!validarClient()){
        evento.preventDefault();
    }
}

function validarUser(){
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

    // let emailH = document.getElementById("email");
    // emailH.classList.remove("is-invalid");
    // let emailV = emailH.value;
    // let emailInvalidoH = document.getElementById("emailInvalido");

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
    // if(emailV == ''){
    //     emailH.classList.add("is-invalid");
    //     return false;
    // }

    // let emailRegex = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
    // if(!emailRegex.test(emailV)){
    //     emailH.classList.add("is-invalid");
    //     emailInvalidoH.innerHTML = "Escriba el Email con <b>Caracteres Normales</b>."
    //     return false;
    // }

    return true;
}

// function validarClient(){
//     let nameH = document.getElementById("name");
//     nameH.classList.remove("is-invalid");
//     let nameV = nameH.value.split(" ");
//     let nombreInvalidoH = document.getElementById("nombreInvalido");

//     let phoneH = document.getElementById("phone");
//     phoneH.classList.remove("is-invalid");
//     let phoneV = phoneH.value;
//     let phoneInvalidoH = document.getElementById("phoneInvalido");

//     let direcH = document.getElementById("direc");
//     direcH.classList.remove("is-invalid");
//     let direcV = direcH.value;
//     let direcInvalidoH = document.getElementById("direcInvalido");

//     let postalH = document.getElementById("postal");
//     postalH.classList.remove("is-invalid");
//     let postalV = postalH.value;
//     let postalInvalidoH = document.getElementById("postalInvalido");

//     // Validacion del Nombre y Apellido
//     if(nameV.length != 2){
//         nameH.classList.add("is-invalid");
//         nombreInvalidoH.innerHTML = "El Nombre solo puede tener 2 Palabras (Nombre y Apellido).";
//         return false;
//     }

//     if(nameV == ''){
//         nameH.classList.add("is-invalid");
//         return false;
//     }

//     let nameRegex = /^[a-zA-Z]+$/;
//     if(!nameRegex.test(nameV)){
//         nameH.classList.add("is-invalid");
//         nombreInvalidoH.innerHTML = "Escriba el Nombre y Apellido con <b>Caracteres Normales</b>."
//         return false;
//     }

//     // Validacion del Telefono
//     if(!Number.isInteger(phoneV)){
//         phoneH.classList.add("is-invalid");
//         return false;
//     }

//     // Validacion de la Direccion
//     if(direcV == ''){
//         direcH.classList.add("is-invalid");
//         return false;
//     }

//     let direcRegex = /^[a-zA-Z]+$/;
//     if(!direcRegex.test(direcV)){
//         direcH.classList.add("is-invalid");
//         direcInvalidoH.innerHTML = "Escriba la Dirección con <b>Caracteres Normales</b>."
//         return false;
//     }

//     // Validacion del Codigo Postal
//     if(!Number.isInteger(postalV)){
//         postalH.classList.add("is-invalid");
//         return false;
//     }

//     return true;
// }
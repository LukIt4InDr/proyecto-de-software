let fechaEntrega = document.getElementById("fechaEntrega");
let nombreCliente = document.getElementById("nombreCliente");
let apellido = document.getElementById("apellido");
let calle = document.getElementById("calle");
let num = document.getElementById("num");
let loc = document.getElementById("loc");
let cp = document.getElementById("cp");
let email = document.getElementById("email");
let phone = document.getElementById("phone");
let btnCliente = document.getElementById("btnCliente");

fechaEntrega.addEventListener("input", () => {
    verificarHabilitarBoton();
});

nombreCliente.addEventListener("input", () => {
    verificarHabilitarBoton();
});

apellido.addEventListener("input", () => {
    verificarHabilitarBoton();
});

calle.addEventListener("input", () => {
    verificarHabilitarBoton();
});

num.addEventListener("input", () => {
    verificarHabilitarBoton();
});

loc.addEventListener("input", () => {
    verificarHabilitarBoton();
});

cp.addEventListener("input", () => {
    verificarHabilitarBoton();
});

email.addEventListener("input", () => {
    verificarHabilitarBoton();
});

phone.addEventListener("input", () => {
    verificarHabilitarBoton();
});

function verificarHabilitarBoton() {
    if (fechaEntrega.value != "" && nombreCliente.value != "" && apellido.value != "" && calle.value != "" && num.value != "" && loc.value != "" && cp.value != "" && email.value != "" && phone.value != "")
        btnCliente.disabled = false;
    else
        btnCliente.disabled = true;
}

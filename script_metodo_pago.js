let pago = document.getElementById("pago");
let documento = document.getElementById("documento");
let dni = document.getElementById("dni");
let confirmar = document.getElementById("confirmar");

pago.addEventListener("input", () => {
    verificarHabilitarBoton();
});

documento.addEventListener("input", () => {
    verificarHabilitarBoton();

    if (documento.value != "")
        dni.disabled = false;
    else 
    {
        dni.disabled = true;
        dni.value = "";
    }
});

dni.addEventListener("input", () => {
    verificarHabilitarBoton();
});

function verificarHabilitarBoton() {
    if (pago.value != "" && documento.value != "" && dni.value != "")
        confirmar.disabled = false;
    else
        confirmar.disabled = true;
}
let nombreDest = document.getElementById("nombreDest");
let apellidoDest = document.getElementById("apellidoDest");
let calle = document.getElementById("calle");
let num = document.getElementById("num");
let loc = document.getElementById("loc");
let cpDest = document.getElementById("cpDest");
let phoneDest = document.getElementById("phoneDest");
let btnDest = document.getElementById("btnDest");

nombreDest.addEventListener("input", () => {
    verificarHabilitarBoton();
});

apellidoDest.addEventListener("input", () => {
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

cpDest.addEventListener("input", () => {
    verificarHabilitarBoton();
});

phoneDest.addEventListener("input", () => {
    verificarHabilitarBoton();
});

function verificarHabilitarBoton() {
    if (nombreDest.value != "" && apellidoDest.value != "" && calle.value != "" && num.value != "" && loc.value != "" && cpDest.value != "" && phoneDest.value != "")
        btnDest.disabled = false;
    else
        btnDest.disabled = true;
}

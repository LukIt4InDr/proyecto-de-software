let metodoOpcion = document.getElementById("metodoOpcion");
let pay = document.getElementById("pay");

metodoOpcion.addEventListener("input",()=>
{
    if (metodoOpcion.value != "Elegir")
        pay.disabled = false
    else
        pay.disabled = true;
});
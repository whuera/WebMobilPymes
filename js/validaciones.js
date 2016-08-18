$(document).on("ready",inicio);

function inicio(){
    $("#btngrabar").click(validar);
    $("#nombres").keyup(validar);
}

function validar() {
var valor = document.getElementById("nombres").value;
alert(valor);
return false;
}

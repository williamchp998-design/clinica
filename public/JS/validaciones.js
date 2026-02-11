function validarFormulario() {
    let cedula = document.getElementById("cedula").value.trim();
    let nombres = document.getElementById("nombres").value.trim();
    let apellidos = document.getElementById("apellidos").value.trim();

    if (cedula.length !== 10 || isNaN(cedula)) {
        alert("La cédula debe tener 10 números");
        return false;
    }
    if (nombres.length < 2) {
        alert("Ingrese nombres válidos");
        return false;
    }
    if (apellidos.length < 2) {
        alert("Ingrese apellidos válidos");
        return false;
    }
    return true;
}
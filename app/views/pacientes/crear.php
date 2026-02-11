<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Paciente</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="container">
    <h2>Registrar Paciente</h2>

    <form action="index.php?action=guardar" method="POST" onsubmit="return validarFormulario()">

        <label>Cédula</label>
        <input name="cedula" id="cedula" required pattern="[0-9]{10}" title="Debe tener 10 números">

        <label>Nombres</label>
        <input name="nombres" id="nombres" required minlength="2">

        <label>Apellidos</label>
        <input name="apellidos" id="apellidos" required minlength="2">

        <label>Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required max="<?= date('Y-m-d') ?>">

        <label>Sexo</label>
        <select name="sexo" id="sexo" required>
            <option value="">Seleccione</option>
            <option>Masculino</option>
            <option>Femenino</option>
        </select>

        <label>Teléfono</label>
        <input name="telefono" id="telefono" pattern="[0-9]{7,10}" title="Solo números">

        <label>Dirección</label>
        <input name="direccion" id="direccion">

        <label>Correo</label>
        <input type="email" name="correo" id="correo">

        <button type="submit">Guardar</button>
        <a href="index.php" class="btn-cancelar">Cancelar</a>

    </form>
</div>

<script>
function validarFormulario() {
    let cedula = document.getElementById("cedula").value.trim();
    let nombres = document.getElementById("nombres").value.trim();
    let apellidos = document.getElementById("apellidos").value.trim();
    let fecha = document.getElementById("fecha_nacimiento").value;
    let sexo = document.getElementById("sexo").value;

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

    if (fecha === "") {
        alert("Seleccione fecha de nacimiento");
        return false;
    }

    if (sexo === "") {
        alert("Seleccione sexo");
        return false;
    }

    return true;
}
</script>

</body>
</html>

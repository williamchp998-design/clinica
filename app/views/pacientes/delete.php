<link rel="stylesheet" href="css/estilos.css">
<h2>Eliminar Paciente</h2>
<p>¿Seguro que deseas eliminar a <b><?= $paciente['nombres']." ".$paciente['apellidos'] ?></b>?</p>

<form action="index.php?action=confirmarEliminar" method="POST">
    <input type="hidden" name="id" value="<?= $paciente['id_paciente'] ?>">
    <button type="submit">Sí, eliminar</button>
    <a href="index.php">Cancelar</a>
</form>






<link rel="stylesheet" href="css/estilos.css">
<h2>Pacientes</h2>
<a href="index.php?action=crear">Nuevo Paciente</a>
<table border="1">
<tr><th>ID</th><th>Nombre</th><th>Cédula</th><th>Acciones</th></tr>
<?php foreach($pacientes as $p): ?>
<tr>
<td><?= $p['id_paciente'] ?></td>
<td><?= $p['nombres']." ".$p['apellidos'] ?></td>
<td><?= $p['cedula'] ?></td>
<td>
<a href="index.php?action=editar&id=<?= $p['id_paciente'] ?>">Editar</a>
<a href="index.php?action=eliminar&id=<?= $p['id_paciente'] ?>">Eliminar</a>
</td>
</tr>
<?php endforeach; ?>
</table>
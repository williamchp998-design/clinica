<?php
require_once __DIR__ . '/../app/controllers/PacienteController.php';

$controller = new PacienteController();
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'crear': $controller->crear(); break;
    case 'guardar': $controller->guardar(); break;
    case 'editar': $controller->editar($_GET['id']); break;
    case 'actualizar': $controller->actualizar(); break;
    case 'eliminar': $controller->eliminarVista($_GET['id']); break;
    case 'confirmarEliminar': $controller->eliminar($_POST['id']); break;
    default: $controller->index(); break;
}
?>
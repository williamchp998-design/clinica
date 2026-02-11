<?php
require_once __DIR__ . '/../models/Paciente.php';

class PacienteController {
    private $model;

    public function __construct() { $this->model = new Paciente(); }

    public function index() {
        $pacientes = $this->model->obtenerTodos();
        require '../app/views/pacientes/index.php';
    }

    public function crear() {
        require '../app/views/pacientes/crear.php';
    }

    public function guardar() {
        if (empty($_POST['cedula']) || empty($_POST['nombres']) || empty($_POST['apellidos']) || empty($_POST['fecha_nacimiento']) || empty($_POST['sexo'])) die("Campos obligatorios vacíos");
        if (!is_numeric($_POST['cedula']) || strlen($_POST['cedula'])!=10) die("Cédula inválida");
        if (!empty($_POST['correo']) && !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) die("Correo inválido");

        $data = [$_POST['cedula'],$_POST['nombres'],$_POST['apellidos'],$_POST['fecha_nacimiento'],$_POST['sexo'],$_POST['telefono'],$_POST['direccion'],$_POST['correo']];
        $this->model->guardar($data);
        header("Location: index.php");
    }

    public function editar($id) {
        $paciente = $this->model->obtenerPorId($id);
        require '../app/views/pacientes/editar.php';
    }

    public function actualizar() {
        if (empty($_POST['cedula']) || empty($_POST['nombres']) || empty($_POST['apellidos']) || empty($_POST['fecha_nacimiento']) || empty($_POST['sexo'])) die("Campos obligatorios vacíos");
        if (!is_numeric($_POST['cedula']) || strlen($_POST['cedula'])!=10) die("Cédula inválida");
        if (!empty($_POST['correo']) && !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) die("Correo inválido");

        $data = [$_POST['cedula'],$_POST['nombres'],$_POST['apellidos'],$_POST['fecha_nacimiento'],$_POST['sexo'],$_POST['telefono'],$_POST['direccion'],$_POST['correo'],$_POST['id']];
        $this->model->actualizar($data);
        header("Location: index.php");
    }

    public function eliminarVista($id) {
        $paciente = $this->model->obtenerPorId($id);
        require '../app/views/pacientes/delete.php';
    }

    public function eliminar($id) {
        $this->model->eliminar($id);
        header("Location: index.php");
    }
}
?>

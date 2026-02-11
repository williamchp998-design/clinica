<?php
require_once dirname(__DIR__) . '/config/database.php';

class Paciente {
    private $conn;

    public function __construct() {
        $this->conn = conectarDB();
    }

    public function obtenerTodos() {
        return $this->conn->query("SELECT * FROM pacientes")
                    ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM pacientes WHERE id_paciente=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($data) {
        $sql = "INSERT INTO pacientes
                (cedula, nombres, apellidos, fecha_nacimiento, sexo, telefono, direccion, correo)
                VALUES (?,?,?,?,?,?,?,?)";
        return $this->conn->prepare($sql)->execute($data);
    }

    public function actualizar($data) {
        $sql = "UPDATE pacientes SET
                cedula=?, nombres=?, apellidos=?, fecha_nacimiento=?, sexo=?, telefono=?, direccion=?, correo=?
                WHERE id_paciente=?";
        return $this->conn->prepare($sql)->execute($data);
    }

    public function eliminar($id) {
        return $this->conn->prepare("DELETE FROM pacientes WHERE id_paciente=?")
                    ->execute([$id]);
    }
}
?>

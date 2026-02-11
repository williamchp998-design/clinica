<?php

require_once dirname(__DIR__) . '/config/database.php';

class Paciente {

    private $conn;

    public function __construct() {
        // Usamos la clase estática correctamente
        $this->conn = Database::conectarDB();
    }

    public function obtenerTodos() {
        $stmt = $this->conn->query("SELECT * FROM pacientes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM pacientes WHERE id_paciente = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($data) {
        $sql = "INSERT INTO pacientes
                (cedula, nombres, apellidos, fecha_nacimiento, sexo, telefono, direccion, correo)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function actualizar($data) {
        $sql = "UPDATE pacientes SET
                cedula = ?, 
                nombres = ?, 
                apellidos = ?, 
                fecha_nacimiento = ?, 
                sexo = ?, 
                telefono = ?, 
                direccion = ?, 
                correo = ?
                WHERE id_paciente = ?";

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function eliminar($id) {
        $stmt = $this->conn->prepare("DELETE FROM pacientes WHERE id_paciente = ?");
        return $stmt->execute([$id]);
    }
}

<?php

class Database {

    public static function conectarDB() {

        $host = getenv("DB_HOST") ?: "localhost";
        $db   = getenv("DB_DATABASE") ?: "clinica";
        $user = getenv("DB_USERNAME") ?: "clinica";
        $pass = getenv("DB_PASSWORD") ?: "Proyecto2024";

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}

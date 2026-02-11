<?php
function conectarDB() {
    $host = "localhost";
    $port = "3307";
    $db   = "clinica";
    $user = "clinica";
    $pass = "Proyecto2025";

    try {
        return new PDO(
            "mysql:host=$host;port=$port;dbname=$db;charset=utf8",
            $user,
            $pass,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        die("Error BD: " . $e->getMessage());
    }
}
?>

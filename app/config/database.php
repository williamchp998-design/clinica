<?php
function conectarDB() {
    // Leer variables de entorno que Railway provee
    $DB_HOST = getenv('MYSQLHOST') ?: 'localhost';
    $DB_PORT = getenv('MYSQLPORT') ?: 3306;
    $DB_USER = getenv('MYSQLUSER') ?: 'root';
    $DB_PASS = getenv('MYSQLPASSWORD') ?: '';
    $DB_NAME = getenv('MYSQLDATABASE') ?: 'clinica';

    try {
        $dsn = "mysql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME;charset=utf8";
        $pdo = new PDO($dsn, $DB_USER, $DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Error BD: " . $e->getMessage());
    }
}
?>

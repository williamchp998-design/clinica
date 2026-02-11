<?php

$host = $_ENV['MYSQLHOST'];
$port = $_ENV['MYSQLPORT'];
$user = $_ENV['MYSQLUSER'];
$pass = $_ENV['MYSQLPASSWORD'];
$db   = $_ENV['MYSQLDATABASE'];

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$db;charset=utf8",
        $user,
        $pass
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error BD: " . $e->getMessage());
}

CREATE DATABASE clinica;
USE clinica;

CREATE TABLE pacientes (
    id_paciente INT AUTO_INCREMENT PRIMARY KEY,
    cedula VARCHAR(10) NOT NULL UNIQUE,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    telefono VARCHAR(15),
    direccion VARCHAR(150),
    correo VARCHAR(100),
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);
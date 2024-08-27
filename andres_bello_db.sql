-- Crear la base de datos
CREATE DATABASE andres_bello_db;

-- Usar la base de datos
USE andres_bello_db;

-- Crear la tabla estudiantes
CREATE TABLE estudiantes (
  id_estudiante INT AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  rut VARCHAR(12) NOT NULL,
  direccion VARCHAR(100) NOT NULL,
  carrera VARCHAR(50) NOT NULL,
  fecha_periodo DATE NOT NULL,
  PRIMARY KEY (id_estudiante)
);


-- Script de ejemplo para crear la base de datos y tabla de celulares
CREATE DATABASE IF NOT EXISTS venta_celulares;
USE venta_celulares;

CREATE TABLE IF NOT EXISTS celulares (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50),
    modelo VARCHAR(50),
    precio DECIMAL(10,2)
);

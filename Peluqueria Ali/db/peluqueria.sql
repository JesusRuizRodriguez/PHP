DROP DATABASE IF EXISTS peluqueria;
CREATE DATABASE peluqueria;

DROP USER IF EXISTS 'test'@'localhost';
CREATE USER 'test'@'localhost' IDENTIFIED BY 'aa';

USE peluqueria;

GRANT ALL ON peluqueria.*TO 'test';

USE peluqueria;

CREATE TABLE Usuario(
    correo varchar(200) PRIMARY KEY,
    nombre varchar(200) NOT NULL,
    pass varchar(200) NOT NULL,
    telefono char(9) UNIQUE NOT NULL,
    administrador boolean
);

CREATE TABLE Cliente(
    correo varchar(200) PRIMARY KEY,
    nombre varchar(200) NOT NULL,
    pass varchar(200) NOT NULL,
    telefono char(9) UNIQUE NOT NULL,
    n_tarjeta char(16) NOT NULL
);

CREATE TABLE Administrador(
    correo varchar(200) PRIMARY KEY,
    nombre varchar(200) NOT NULL,
    pass varchar(200) NOT NULL,
    telefono char(9) UNIQUE NOT NULL
);

CREATE TABLE Cita(
    fecha_hora varchar(200) PRIMARY KEY,
    disponible boolean,
    correo varchar(200) NOT NULL,
    
    FOREIGN KEY (correo) REFERENCES Cliente (correo) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Gestion(
    correo varchar(200) NOT NULL,
    fecha_hora varchar(200) NOT NULL,
    
    FOREIGN KEY (correo) REFERENCES Administrador (correo) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (fecha_hora) REFERENCES Cita (fecha_hora) ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (correo, fecha_hora)
);




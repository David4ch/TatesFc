CREATE DATABASE pfc;
use pfc;
CREATE TABLE IF NOT EXISTS 5_Usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    apellido VARCHAR(20),
    numero INT,
    direccion VARCHAR(20),
    edad INT,
    correo_electronico VARCHAR(90),
    contraseña varchar(20) NOT NULL,
    id_rol INTEGER
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS 5_Productos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(40),
    precio INT,
    stock INT
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS 5_Usuario_has_productos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_producto INT,
    id_usuario INT,
    cantidad INT,
    fecha_envio DATE,
    fecha_entrega DATE
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS 5_Jugadores(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(20),
    apellido VARCHAR(30),
    dorsal INT,
    posicion  VARCHAR(20)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 5_Rol(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30)
)ENGINE = InnoDB;


LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Usuarios.csv'
    INTO TABLE 5_Usuarios
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;

LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Productos.csv'
    INTO TABLE 5_Productos
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;

LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Usuarios_has_productos.csv'
    INTO TABLE 5_Usuario_has_productos
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;
LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Jugadores.csv'
    INTO TABLE 5_Jugadores
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;
    
LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Rol.csv'
    INTO TABLE 5_Rol
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;




DROP DATABASE labdemy;
CREATE DATABASE labdemy;
use labdemy;
CREATE TABLE usuario(
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(64),
  password VARCHAR(64),
  email VARCHAR(64),
  lastname VARCHAR(64),
  tipo INT,
    PRIMARY KEY (`id`)
);
CREATE TABLE cursos(
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(64),
  contenido INT NOT NULL AUTO_INCREMENT
);
CREATE TABLE Tipos_de_usuario(
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(64)
);
CREATE TABLE contenido(
  id INT NOT NULL AUTO_INCREMENT,
  linkvideo VARCHAR(64),
  titulo VARCHAR(64),
  texto VARCHAR
);
CREATE TABLE cursosporusuario(
  id INT NOT NULL AUTO_INCREMENT,
  id_user INT NOT NULL,
  id_curso INT NOT NULL,
          PRIMARY KEY (`id`)
          FOREIGN KEY (`id_user`),
          FOREIGN KEY (`id_curso`)

)

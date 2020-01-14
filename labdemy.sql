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
  linkvideo VARCHAR(64),
  titulo VARCHAR(64),
  texto TEXT,
  imagen TEXT,
    PRIMARY KEY (`id`)
);
CREATE TABLE tipos_de_usuario(
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(64),
  PRIMARY KEY (`id`)
);
CREATE TABLE cursosporusuario(
  id INT NOT NULL AUTO_INCREMENT,
  id_user INT NOT NULL,
  id_curso INT NOT NULL,
          PRIMARY KEY (`id`),
          FOREIGN KEY (`id_user`)
          REFERENCES `usuario` (`id`),
          FOREIGN KEY (`id_curso`)
          REFERENCES `cursos` (`id`)
);
INSERT INTO tipos_de_usuario (id, nombre) VALUES (null, 'estudiante');
INSERT INTO tipos_de_usuario (id, nombre) VALUES (null, 'profesores');
INSERT INTO tipos_de_usuario (id, nombre) VALUES (null, 'admin');
INSERT INTO usuario VALUES (1,'admin','admin',null,null,3);

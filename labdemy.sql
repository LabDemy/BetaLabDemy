DROP DATABASE labdemy;
CREATE DATABASE labdemy;
use labdemy;
CREATE TABLE usuario(
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(64),
  password VARCHAR(64),
  email VARCHAR(64),
  lastname VARCHAR(64),
  imagen TEXT,
  tipo INT,
    PRIMARY KEY (`id`)
);
CREATE TABLE cursos(
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(64),
  linkvideo TEXT,
  titulo VARCHAR(64),
  texto TEXT,
  imagen TEXT,
  fechainicio Date,
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
CREATE TABLE informacioncursos(
  id INT NOT NULL AUTO_INCREMENT,
  id_curso INT NOT NULL,
  id_objetivos INT,
  linkvideo TEXT,
  imagenvideo TEXT,
  id_docente INT,
  id_preguntas INT,
  mensajeDocente TEXT,
  titulo VARCHAR(64),
  precio FLOAT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_curso`)
  REFERENCES `cursos` (`id`),
  FOREIGN KEY (`id_docente`)
  REFERENCES `usuario` (`id`),
  FOREIGN KEY (`id_objetivos`)
  REFERENCES `objetivos` (`id`),
  FOREIGN KEY (`id_preguntas`)
  REFERENCES `preguntas` (`id`)


);
CREATE TABLE preguntas(
  id INT AUTO_INCREMENT,
  id_informacioncurso INT,
  pregunta TEXT,
  respuesta TEXT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_informacioncurso`)
  REFERENCES `informacioncursos` (`id`)
);
CREATE TABLE objetivos(
  id INT AUTO_INCREMENT,
  id_informacioncurso INT,
  objetivo TEXT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_informacioncurso`)
  REFERENCES `informacioncursos` (`id`)
)
INSERT INTO tipos_de_usuario (id, nombre) VALUES (null, 'estudiante');
INSERT INTO tipos_de_usuario (id, nombre) VALUES (null, 'profesores');
INSERT INTO tipos_de_usuario (id, nombre) VALUES (null, 'admin');
INSERT INTO usuario VALUES (1,'admin','admin',null,null,3);

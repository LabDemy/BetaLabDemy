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
  linkvideo TEXT,
  imagenvideo TEXT,
  id_docente INT,
  mensajeDocente TEXT,
  titulo VARCHAR(64),
  precio FLOAT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_curso`)
  REFERENCES `cursos` (`id`),
  FOREIGN KEY (`id_docente`)
  REFERENCES `usuario` (`id`)
);
CREATE TABLE preguntas(
  id INT AUTO_INCREMENT,
  pregunta TEXT,
  respuesta TEXT,
  id_informacion INT,

  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_informacion`)
  REFERENCES `informacioncursos` (`id`)

);
CREATE TABLE objetivos(
  id INT AUTO_INCREMENT,
  objetivo TEXT,
  id_informacion INT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_informacion`)
  REFERENCES `informacioncursos` (`id`)
);


INSERT INTO tipos_de_usuario (id, nombre) VALUES (null, 'estudiante');
INSERT INTO tipos_de_usuario (id, nombre) VALUES (null, 'profesores');
INSERT INTO tipos_de_usuario (id, nombre) VALUES (null, 'admin');
INSERT INTO usuario VALUES (1,'admin','admin',null,null,null,3);
INSERT INTO usuario VALUES (null,'Kevin','MTIzNA==','kevincardenas.to@gmail.com',"Cardenas",'img/latest_blog/kev.png',2);
INSERT INTO cursos VALUES (null,"Android", "https://www.youtube.com/watch?v=PRQjrp_7ip8", "Aplicaciones Android",null,"img/courses/1.png",null);
INSERT INTO informacioncursos VALUES(null,1,"https://www.youtube.com/watch?v=PRQjrp_7ip8","img/latest_blog/curso2.jpg",2,"mensaje docente","Aplicaciones Android",69.0);
INSERT INTO objetivos VALUES(null,"Con esta formación el alumno aprenderá a programar aplicaciones para dispositivos Android con el nuevo entorno de desarrollo Android Studio. A lo largo del curso conocerá:",1);
INSERT INTO objetivos VALUES(null,"En qué consiste la plataforma Android y cuáles son los elementos que la integran",1);
INSERT INTO objetivos VALUES(null,"El IDE (entorno de desarrollo) oficial, Android Studio: su instalación, configuración (SDK, emuladores…) y uso.",1);
INSERT INTO objetivos VALUES(null,"Cuáles son los componentes de una App Android y cómo se implementan",1);
INSERT INTO objetivos VALUES(null,"Cómo diseñar a interfaz de usuario",1);
INSERT INTO objetivos VALUES(null,"Cómo implementar funcionalidades importantes: tareas asíncronas, multimedia, acceso a base de datos o utilización de la geolocalización y mapas",1);
INSERT INTO objetivos VALUES(null,"Cómo incluir una Aplicación en Google Play para su distribución o venta",1);
INSERT INTO preguntas VALUES(null,"¿Android vale la pena?","El desarrollo de las aplicaciones Android abarca un mayor campo y mayor crecimiento, donde tienes más posibilidades de entrar al mercado y tienes más capacidad de ser descubierto. Android tiene menores problemas de privacidad y tiene una publicidad mejor segmentada",1);

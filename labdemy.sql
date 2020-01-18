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

INSERT INTO cursos VALUES (null,"Android", "https://www.youtube.com/watch?v=PRQjrp_7ip8", "Aplicaciones Android",null,"img/courses/1.jpg",null);

INSERT INTO informacioncursos VALUES(null,1,"https://www.youtube.com/watch?v=PRQjrp_7ip8","img/latest_blog/curso2.jpg",2,"El desarrollo de Android es clave para un futuro lleno de tecnología","Aplicaciones Android",69.0);

INSERT INTO objetivos VALUES(null,"Con esta formación el alumno aprenderá a programar aplicaciones para dispositivos Android con el nuevo entorno de desarrollo Android Studio. A lo largo del curso conocerá:",1);
INSERT INTO objetivos VALUES(null,"En qué consiste la plataforma Android y cuáles son los elementos que la integran",1);
INSERT INTO objetivos VALUES(null,"El IDE (entorno de desarrollo) oficial, Android Studio: su instalación, configuración (SDK, emuladores…) y uso.",1);
INSERT INTO objetivos VALUES(null,"Cuáles son los componentes de una App Android y cómo se implementan",1);
INSERT INTO objetivos VALUES(null,"Cómo diseñar a interfaz de usuario",1);
INSERT INTO objetivos VALUES(null,"Cómo implementar funcionalidades importantes: tareas asíncronas, multimedia, acceso a base de datos o utilización de la geolocalización y mapas",1);
INSERT INTO objetivos VALUES(null,"Cómo incluir una Aplicación en Google Play para su distribución o venta",1);
INSERT INTO preguntas VALUES(null,"¿Android vale la pena?","El desarrollo de las aplicaciones Android abarca un mayor campo y mayor crecimiento, donde tienes más posibilidades de entrar al mercado y tienes más capacidad de ser descubierto. Android tiene menores problemas de privacidad y tiene una publicidad mejor segmentada",1);
INSERT INTO preguntas VALUES(null,"¿Seré un experto en Android?","La práctica hace al maestro, con nuestro curso introductorio y práctica, podrás crear tus propias ideas en tiempo record",1);
INSERT INTO preguntas VALUES(null,"¿Que sirve más, iOS o Android?","Depende mucho del tipo de orientación que tengas en cuanto a dispositivos móviles, android es mucho más abierto y el campo es más grande, pero es depende a los gustos de cada uno.",1);
INSERT INTO preguntas VALUES(null,"¿Cómo es la competencia en el desarrollo android?","Sin duda, muchas empresas están empezando a apostar únicamente por aplicaciones móviles. Poco a poco irán apareciendo nuevas empresas dedicadas únicamente a la movilidad y las actuales tendrán que ir adaptándose a este nuevo panorama que, seguramente, les exigirán sus propios clientes.",1);
INSERT INTO preguntas VALUES(null,"¿Cómo empiezo?","Con muchas ganas de aprender. Tu deseo es lo más importante.",1);


INSERT INTO usuario VALUES (null,'Vladimir','MTIzNA==','vladimirTirado@gmail.com',"Tirado",'img/latest_blog/vladi.png',2);

INSERT INTO cursos VALUES (null,"UI vs UX", "https://www.youtube.com/watch?v=MLK9TnaV_bQ", "User Experience vs User Interface", null, "img/courses/2.jpg", null);

INSERT INTO informacioncursos VALUES(null, 2, "https://www.youtube.com/watch?v=MLK9TnaV_bQ", "img/latest_blog/2.jpg", 3, "Un buen diseño web es la clave principal que hay que tener en cuenta para tener éxito en la estratégia de Marketing Digital", "User Experience vs User Interface", 59.0);

INSERT INTO objetivos VALUES(null,"El diseñador UX tiene como objetivo que el usuario tenga una experiencia positiva a la hora de conseguir el objetivo por el cual está visitando un sitio. El diseño UI podría definirse como una nueva tendencia en el diseño web que se enfoca en crear una interfaces entre las personas y los diferentes dispositivos digitales.",2);
INSERT INTO objetivos VALUES(null,"Obtener estimaciones más precisas. Podremos modificar elementos de diseño de manera más fácil.",2);
INSERT INTO objetivos VALUES(null,"Optimizar tiempos. Si tenemos un buen diseño podremos definir más claramente las fases de desarrollo de un producto.",2);
INSERT INTO objetivos VALUES(null,"Aumentar tráfico y, a su vez, la audiencia.",2);
INSERT INTO objetivos VALUES(null,"Ayuda a definir las necesidades de los usuarios.",2);
INSERT INTO objetivos VALUES(null,"Bajar la tasa de rebote en la web. Se eliminarán errores y por lo tanto los clientes se quedarán.",2);
INSERT INTO objetivos VALUES(null,"Mejorar el posicionamiento en los buscadores. Una página usable para el móvil y para el ordenador será mucho mejor puntuada por Google.",2);

INSERT INTO preguntas VALUES(null,"¿Cuál es la diferencia entre UX y UI?","Por lo tanto UI se refiere a la creación de la interfaz, ya sea gráfica o desarrollada con diversas tecnologías web como css, jQuery, jQuery UI, EXT JS, YUI, etc. ... Bueno, pues la diferencia entre UI y UX es una similitud entre la comparación de lo que ahora se define como Desarrollador Web y Diseñador Web.",2);
INSERT INTO preguntas VALUES(null,"¿Qué hace un UX Designer?","El especialista en UX design se encarga, en otras palabras, de la experiencia que vive el usuario con un producto. Por lo tanto debe preocuparse por el uso que se da al mismo, la accesibilidad que ofrece y el sentimiento que se genera en el usuario en su interacción con el mismo.",2);
INSERT INTO preguntas VALUES(null,"¿Cuál es la diferencia entre un diseñador de UI/UX y un programador?","UI y UX presentan diferentes aspectos del flujo creativo para los productos digitales. Básicamente, el diseño de la interfaz de usuario tiene como objetivo crear una interfaz de usuario efectiva y atractiva, mientras que el diseño UX tiene como objetivo proporcionar la experiencia positiva del usuario.Los programadores o desarrolladores son personas que realmente construyen el sitio web o la aplicación móvil planificada y diseñada por diseñadores de UI / UX.",2);
INSERT INTO preguntas VALUES(null,"¿Qué hacer para mantenerse siempre actualizado?","En sectores donde la tecnología es el principal motor de cambio, es importante mantenerse siempre actualizado y estar al tanto de las tendencias y novedades que aparecen. Por esto, es fundamental leer.",2);


INSERT INTO usuario VALUES (null,'Vladimir','MTIzNA==','vladimirTirado@gmail.com',"Tirado",'img/latest_blog/vladi.png',2);

INSERT INTO cursos VALUES (null,"Diseño de Aplicaciones con UX", "https://www.youtube.com/watch?v=4K4ehuyi9rk", "Diseño de Aplicaciones con User Experience", null, "img/courses/3.jpg", null);

INSERT INTO informacioncursos VALUES(null, 3, "https://www.youtube.com/watch?v=4K4ehuyi9rk", "img/latest_blog/3.jpg", 4, "Un buen diseño es la clave principal que hay que tener en cuenta para tener éxito en el Marketing Digital", "Diseño de Aplicaciones con User Experience", 67.0);

INSERT INTO objetivos VALUES(null,"El tener un buen diseño de aplicación ha cobrado una fiera importancia dentro de la empresa, donde se dan cuenta del valor que supone ya no solo como una manera de diferenciarse en el mercado frente a la competencia (ese gran reto de cualquier empresa), sino también como una herramienta para afianzar usuarios dándoles junto al producto que adquieren una experiencia de uso cómoda y humana, convirtiendo al consumidor en un defensor de la marca del producto, aquí aprenderás todo sobre:",3);
INSERT INTO objetivos VALUES(null,"Organización de contenidos.", 3);
INSERT INTO objetivos VALUES(null,"Rapidez de la aplicación.", 3);
INSERT INTO objetivos VALUES(null,"Retroalimentación constante.", 3);
INSERT INTO objetivos VALUES(null,"Testeo de prototipos.", 3);
INSERT INTO objetivos VALUES(null,"Diseño de usabilidad e interactividad.", 3);
INSERT INTO objetivos VALUES(null,"Seguridad del usuario.", 3);

INSERT INTO preguntas VALUES(null,"¿Qué es UX?","La experiencia de usuario o user experience en inglés (UX), está relacionada con las sensaciones. Es aquello que una persona percibe al interactuar con un producto o servicio. Logramos una buena UX al enfocarnos en diseñar productos útiles, usables y deseables, lo cual influye en que el usuario se sienta satisfecho, feliz y encantado.", 3);
INSERT INTO preguntas VALUES(null,"¿Por qué debería obtener la certificación?","La certificación muestra a las empresas que tienes un buen dominio de los conceptos básicos sobre el desarrollo de apps. También puedes adjuntarla a tu CV y subirla fácilmente a tu perfil de LinkedIn.", 3);
INSERT INTO preguntas VALUES(null,"¿Cuáles son las motivaciones para crear una APP?","Necesitas tener una pasión y una visión clara de lo que tu APP va a realizar y el problema que va a resolver a tus clientes potenciales. Y esa pasión debe ser lo suficientemente fuerte como para soportar los altibajos que puedes tener en el desarrollo del negocio y los desafíos propios de cualquier emprendedor.", 3);
INSERT INTO preguntas VALUES(null,"¿Qué hacer para mantenerse siempre actualizado?","En sectores donde la tecnología es el principal motor de cambio, es importante mantenerse siempre actualizado y estar al tanto de las tendencias y novedades que aparecen. Por esto, es fundamental leer.", 3);


INSERT INTO usuario VALUES (null,'Eynar','MTIzNA==','eynarPari@gmail.com',"Pari",'img/latest_blog/eynar.png',2);

INSERT INTO cursos VALUES (null,"Metodologías ágiles", "https://www.youtube.com/watch?v=tGEYClsYyuw", "Metodologías Ágiles", null, "img/courses/4.jpg", null);

INSERT INTO informacioncursos VALUES(null, 4, "https://www.youtube.com/watch?v=tGEYClsYyuw", "img/latest_blog/4.jpg", 5, "Scrum no es una metodología. Scrum ni siquiera es un proceso. A lo sumo podríamos definirlo como un metaproceso: una maquinita que nos ayuda a construir iteractiva e incrementalmente nuestro propio proceso", "Metodologías Ágiles", 87.0);

INSERT INTO objetivos VALUES(null,"Las empresas que apuestan por una Transformación Digital completa terminan por incluir, implantar y desarrollar metodologías ágiles en el interior de sus departamentos para entregar los productos y/o servicios con una mayor calidad y con unos costes y tiempos mucho más reducidos, aquí aprenderás todo sobre:", 4);
INSERT INTO objetivos VALUES(null,"Respuesta rápida a cambios de requisitos durante el proyecto.", 4);
INSERT INTO objetivos VALUES(null,"Se identifican errores rápidamente debido a que se van haciendo pruebas a medida que se avanza.", 4);
INSERT INTO objetivos VALUES(null,"Hacer que el equipo de desarrollo conoce el estado del proyecto", 4);

INSERT INTO preguntas VALUES(null,"¿Qué es ágil?","La capacidad de crear y responder al cambio para tener éxito en un entorno incierto y turbulento.", 4);
INSERT INTO preguntas VALUES(null,"¿Cómo se planifica en SCRUM?","En Scrum hay varios niveles de planificación y en diferentes ámbitos: Daily meeting, Sprint backlog y release plan.", 4);
INSERT INTO preguntas VALUES(null,"¿Qué es Scrum?","Es una de las metodologías Ágiles más populares. Scrum es adaptativa, iterativa, rápida, flexible y eficaz, diseñada para ofrecer un valor significativo de forma veloz durante todo el proyecto.", 4);
INSERT INTO preguntas VALUES(null,"¿Qué son las metodologías ágiles?","las metodologías ágiles son aquellas que permiten adaptar la forma de trabajo a las condiciones del proyecto, consiguiendo flexibilidad e inmediatez en la respuesta para amoldar el proyecto y su desarrollo a las circunstancias específicas del entorno.", 4);
INSERT INTO preguntas VALUES(null,"¿Cuáles son las metodologías ágiles más comunes?","Extreme Programming XP; SCRUM; Kanban; Agile Inception; Design Sprint, la metodología de Google.", 4);


INSERT INTO usuario VALUES (null,'Mariana','MTIzNA==','marianaCarlo123@gmail.com',"Carlo",'img/latest_blog/mari.png',2);

INSERT INTO cursos VALUES (null,"Customer Experience", "https://www.youtube.com/watch?v=SpvQj-tVZOU", "Customer Experience", null, "img/courses/5.jpg", null);

INSERT INTO informacioncursos VALUES(null, 5, "https://www.youtube.com/watch?v=SpvQj-tVZOU", "img/latest_blog/5.jpg", 6, "La tecnología nos permite dar hoy lo que el cliente nos va a pedir mañana.", "Customer Experience", 69.0);

INSERT INTO objetivos VALUES(null,"La experiencia del consumidor o Customer Experience tiene el mismo valor tanto en tiendas físicas como en tiendas online, el objetivo es ofrecerlo de la mejor manera posible. El mundo entero ya se ha rendido a los encantos de la compra online así que las tiendas tienen que jugar con la doble estrategia de ofrecer el mejor producto y conseguir que la compra de ese producto o servicio también sea increíble e inolvidable, aquí aprenderás todo sobre:", 5);
INSERT INTO objetivos VALUES(null,"Mejorar la atención a clientes", 5);
INSERT INTO objetivos VALUES(null,"Mayor valor del ciclo de vida del consumidor.", 5);
INSERT INTO objetivos VALUES(null,"Obtener mayores ingresos", 5);

INSERT INTO preguntas VALUES(null,"¿Cuál es la diferencia entre un departamento de servicio al cliente y un departamento de experiencia del cliente?", "Un departamento de servicio al cliente es, con frecuencia, una organización que asiste a los clientes respondiendo sus preguntas sobre los productos o servicios que la empresa ofrece. Un departamento o equipo de experiencia del cliente, por su parte, se enfoca en la experiencia integral del cliente, esencialmente en cada instancia en la que el cliente tiene una experiencia con su empresa.", 5);
INSERT INTO preguntas VALUES(null,"¿Qué se puede hacer para potenciar el CX?","Vender la idea de la importancia del CX a los clientes es esencial. Algo muy imporante es el feedback del usuario: le gusta o no el producto; en que se puede mejorar, etc...", 5);
INSERT INTO preguntas VALUES(null,"¿Cuáles son los tipos de impacto?","Las sensaciones, las emociones y los pensamientos", 5);


INSERT INTO usuario VALUES (null,'Andres','MTIzNA==','andres1Duarte@gmail.com',"Duarte",'img/latest_blog/dini.png',2);

INSERT INTO cursos VALUES (null,"Office", "https://www.youtube.com/watch?v=D_fgwhQwOr8", "Office 365", null, "img/courses/6.jpg", null);

INSERT INTO informacioncursos VALUES(null, 6, "https://www.youtube.com/watch?v=D_fgwhQwOr8", "img/latest_blog/6.jpg", 7, "Office 365, la herramienta que todos deberían aprender, que te abre nuevos caminos y nuevos horizontes siempre.", "Office 365", 89.0);

INSERT INTO objetivos VALUES(null,"Los principales programas de Microsoft Office como Word, Excel y PowerPoint son de las herramientas que se comienzan a usar desde la educación secundaria, toman mayor relevancia durante la Universidad y se convierten en una competencia clave para acceder a algunos puestos de trabajo y ofertas de empleo., aquí aprenderás todo sobre:", 6);
INSERT INTO objetivos VALUES(null,"Aprender a compartir todo tipo de documentos.", 6);
INSERT INTO objetivos VALUES(null,"Usar de Word, Excel y PowerPoint en la nube y en el escritorio.", 6);

INSERT INTO preguntas VALUES(null,"¿Por qué elegir Office 365?", "Office le proporciona acceso a programas de productividad en su oficina. Se compone de las aplicaciones Word, Excel, Outlook, PowerPoint y OneNote. Office 365 ofrece acceso total a todas las funciones desde cualquier dispositivo y localización del mundo. El servicio le permite compartir documentos y calendarios, utilizar aplicaciones conocidas y correo electrónico empresarial, así como comunicarse dentro de la empresa a través de mensajería instantánea o videoconferencia.", 6);
INSERT INTO preguntas VALUES(null,"¿Qué es word?","Es un software destinado al procesamiento de textos", 6);
INSERT INTO preguntas VALUES(null,"¿Qué es Excel?","Es una aplicación que se caracteriza por manejar la información en celdas", 6);
INSERT INTO preguntas VALUES(null,"¿Qué es Power Point?","Es el programa diseñado para hacer presentaciones practicas con texto esquematizado, fácil de entender, animaciones de texto e imágenes, imágenes prediseñadas o importadas desde imágenes de la computadora. Se le pueden aplicar distintos diseños de fuente, plantilla y animación. Este tipo de presentaciones suelen ser animadas y prácticas.", 6);

<?php
include_once 'database.php';
class cursos
{

    // database connection and table name

    private $conn;
    private $database;
    private $table_name = "cursos";

    // object properties
    public $id;
    public $nombre;
    public $contenido;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
        $this->database= new Database();
    }

    public function getAllCourses()
    {
        $sql = 'SELECT * from cursos';
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);


        return $result;
    }


    public function getCoursesPerUser($iduser)
    {
        $sql = 'SELECT * from cursosporusuario where id_user='.$iduser.';';
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $string;
        $contador=0;


        while ($fila=$result->fetch()) {
            if ($contador==0) {
                $string="id=".$fila['id_curso'];
            //  echo $fila['ID_documentos'];
            } else {
                $string=$string." or id=".$fila['id_curso'];
            }
            $contador=$contador+1;
        }

        if (!empty($string)) {
            $sql1 = 'SELECT * from cursos where '.$string.';';
            $result1 = $this->conn->query($sql1);
            $result1->setFetchMode(PDO::FETCH_ASSOC);
            //$result1->execute();


            return $result1;
        }
    }
    public function getCourseForTeacher($idTeacher)
    {
        $sql = 'SELECT * from informacioncursos where id_docente='.$idTeacher.';';
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $string;
        $contador=0;


        while ($fila=$result->fetch()) {
            if ($contador==0) {
                $string="id=".$fila['id_curso'];
            //  echo $fila['ID_documentos'];
            } else {
                $string=$string." or id=".$fila['id_curso'];
            }
            $contador=$contador+1;
        }

        if (!empty($string)) {
            $sql1 = 'SELECT * from cursos where '.$string.';';
            $result1 = $this->conn->query($sql1);
            $result1->setFetchMode(PDO::FETCH_ASSOC);
            //$result1->execute();


            return $result1;
        }
    }
    public function getCoursePerId($idcourse)
    {
        $sql = 'SELECT * from cursos where id='.$idcourse.';';

        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $var=$result->fetch();
        return $var;
    }
    public function getCourseInformationPerId($idcourse)
    {
        $sql = 'SELECT * from informacioncursos where id_curso='.$idcourse.';';
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $var=$result->fetch();

        return $var;
    }
    public function InCourse($iduser, $idcourse)
    {
        $query = "SELECT *
          FROM
              cursosporusuario
          WHERE
              id_user=$iduser and id_curso=$idcourse";
        // prepare query statement

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function saveCourseUser($iduser, $idcourse)
    {
        if (!$this->InCourse($iduser, $idcourse)) {
            $sql = "INSERT INTO cursosporusuario VALUES (null,'$iduser','$idcourse');";
            $result = $this->conn->prepare($sql);
            // $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
        }
    }
    public function getObjetivos($idinformation)
    {
        $sql = 'SELECT * from objetivos where id_informacion='.$idinformation.';';
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getPreguntas($idinformation)
    {
        $sql = 'SELECT * from preguntas where id_informacion='.$idinformation.';';
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
    public function setTituloInformation($idtitulo, $id)
    {
        $sql = 'UPDATE informacioncursos SET titulo="'.$idtitulo.'"where id='.$id.';';
        $result = $this->conn->prepare($sql);
        $result->execute();
        $fila=$this->getIdCourses($id)->fetch();

        $sql = 'UPDATE cursos SET titulo="'.$idtitulo.'"where id='.$fila['id'].';';

        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function setImagen($imagen, $id)
    {
        $sql = 'UPDATE informacioncursos SET imagenvideo="'.$imagen.'"where id='.$id.';';
        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function setLinkVideo($video, $id)
    {
        $sql = 'UPDATE informacioncursos SET linkvideo="'.$video.'"where id='.$id.';';
        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function setObjective($objetivo, $id)
    {
        $sql = 'UPDATE objetivos SET objetivo="'.$objetivo.'"where id='.$id.';';
        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function setQuestion($pregunta, $id)
    {
        $sql = 'UPDATE preguntas SET pregunta="'.$pregunta.'"where id='.$id.';';
        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function setAnswer($respuesta, $id)
    {
        $sql = 'UPDATE preguntas SET respuesta="'.$respuesta.'"where id='.$id.';';

        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function addObjective($objetivo, $idinformation)
    {
        $sql = "INSERT INTO objetivos VALUES (null,'$objetivo','$idinformation');";

        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function deleteObjective($id)
    {
        $sql = "DELETE FROM objetivos where id='$id';";
        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function getIdCourses($idinformation)
    {
        $sql = 'SELECT * from informacioncursos where id_curso='.$idinformation.';';

        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
    public function setMessageTeacher($message, $id)
    {
        $sql = 'UPDATE informacioncursos SET mensajeDocente="'.$message.'"where id='.$id.';';
        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function addQuestionAnswer($pregunta, $respuesta, $idinformation)
    {
        $sql = "INSERT INTO objetivos VALUES (null,'$pregunta','$respuesta','$idinformation');";

        $result = $this->conn->prepare($sql);
        $result->execute();
    }
}

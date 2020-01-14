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
}

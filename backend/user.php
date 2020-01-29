<?php
include_once 'database.php';
class User implements \Serializable
{

    // database connection and table name

    private $conn;
    private $database;
    private $table_name = "usuario";

    // object properties
    public $id;
    public $nombre;
    public $password;
    public $email;
    public $lastname;
    public $tipo;



    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
        $this->database= new Database();
    }
    // signup user
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password,
        ]);
    }

    public function unserialize($data)
    {
        list(
            $this->id,
            $this->username,
            $this->password
        ) = unserialize($data);
    }
    public function signup()
    {
        // if ($this->isAlreadyExist()) {
        //     return false;
        // }

        // Check connection
        // if (mysqli_connect_errno()) {
        //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
        // }




        // Perform queries
        if (!$this->isAlreadyExist()) {
            $sql= "INSERT INTO $this->table_name VALUES (null,'$this->nombre', '$this->password','$this->email','$this->lastname',null,1);";

            $result = $this->conn->prepare($sql);
            // $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            return true;
        } else {
            return false;
        }
    }
    public function signupTeacher()
    {
        // if ($this->isAlreadyExist()) {
        //     return false;
        // }

        // Check connection
        // if (mysqli_connect_errno()) {
        //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
        // }




        // Perform queries
        if (!$this->isAlreadyExist()) {
            $sql= "INSERT INTO $this->table_name VALUES (null,'$this->nombre', '$this->password','$this->email','$this->lastname',null,2);";

            $result = $this->conn->prepare($sql);
            // $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            return true;
        } else {
            return false;
        }
    }
    // login user
    public function login()
    {
        // select all query
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    email='".$this->email."' AND password='".$this->password."'";

        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt;
        } else {
            echo '<script type="text/javascript">
              alert("Password incorrect");
         </script>';
        }
    }
    public function isAlreadyExist()
    {
        $query = "SELECT *
            FROM
                " . $this->table_name . "
            WHERE
                email='".$this->email."'";
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
    public function getUser($iduser)
    {
        $sql = 'SELECT * from usuario where id='.$iduser.';';
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $fila = $result->fetch();

        return $fila;
    }


    public function modifiedUser($iduser)
    {
        // if ($this->isAlreadyExist()) {
        //     return false;
        // }

        $this->date=date('Y-m-d H:i:s');
        $sql = "UPDATE $this->table_name SET Nombres='$this->names', Apellidos='$this->lastname', Contraseña='$this->password', Usuario='$this->username', Idrango='$this->rol', `Fecha de cambio de clave`='$this->date'  WHERE ID_usuarios='$iduser';";

        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $fila = $result->fetch();
    }
    public function setImagenUser($imagen, $id)
    {
        $sql = 'UPDATE usuario SET imagen="'.$imagen.'"where id='.$id.';';

        $result = $this->conn->prepare($sql);
        $result->execute();
    }
    public function setNewPassword($password, $id)
    {
        $sql = 'UPDATE usuario SET password="'.$password.'"where id='.$id.';';
        $result = $this->conn->prepare($sql);
        $result->execute();
    }
}

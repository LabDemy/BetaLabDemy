<?php
include_once 'database.php';
class User implements
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

    public function getAllCourses()
    {

    }


    public function getCoursesPerUser($iduser)
    {

    }
}

<?php
include_once 'backend/database.php';
include_once 'backend/cursos.php';
include_once 'backend/user.php';
$database = new Database();
$db = $database->getConnection();
$course = new cursos($db);
$user = new User($db);
$idcourse=$_GET['idcourse'];
$iduser=$_GET['iduser'];
$course->saveCourseUser($iduser, $idcourse);
header("Location: index.php");

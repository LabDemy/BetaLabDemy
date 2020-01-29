<?php
include_once 'backend/database.php';
include_once 'backend/cursos.php';
$database = new Database();
$db = $database->getConnection();
$curso = new cursos($db);

$curso->deleteObjective($_GET['id']);
header("Location: android_inscripcion.php?idcourse=".$_GET['idcourse']);

<?php

  include_once 'backend/database.php';
  include_once 'backend/user.php';

  $database = new Database();
  $db = $database->getConnection();
  $user = new User($db);
  $user->email = isset($_POST['email']) ? $_POST['email'] : die();
  $user->password = base64_encode(isset($_POST['password']) ? $_POST  ['password'] : die());
  echo "asd";
  sleep(3000);

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html>
<head>
  <title>Labdemy</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body background="img/banner/bradcam2.png">
  <!-- <script>
  function validate(){

      var a = document.getElementById("password").value;
      var b = document.getElementById("confirm_password").value;
      if (a!=b) {
         alert("Passwords do no match");
         return false;
      }
  }
 </script> -->
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container"><br><br><br><br><br><br><br><br>
            <img src=img/logo-nuevo.png class="brand_logo" alt="Logo"> <br><br>
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form method="post" action="about.php" onSubmit="return validate()">
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
              </div>
              <input type="text" name="name" class="form-control input_user" value="" placeholder="Nombre">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-address-book"></i></span>
              </div>
              <input type="text" name="lastname" class="form-control input_user" value="" placeholder="Apellido">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></span>
              </div>
              <input type="mail" name="email" class="form-control input_pass" value="" placeholder="Mail">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></i></span>
              </div>
              <input type="password" name="password" class="form-control input_pass" value="" placeholder="Contraseña">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customControlInline">

              </div>
            </div>
              <div class="d-flex justify-content-center mt-3 login_container">
              
          <button type="submit" name="button" class="btn login_btn">Agregar</button>
           
           </div>
          </form>
        </div>


        </div>
      </div>
    </div>
  </div>
  <?php
  include_once 'backend/database.php';
  include_once 'backend/user.php';
  $database = new Database();
  $db = $database->getConnection();
  $user = new User($db);
  if (!empty($_POST['email'])) {
      $user->email =  $_POST['email'];
      $user->password =  base64_encode($_POST['password']);
      $user->nombre = $_POST['name'];
      $user->lastname = $_POST['lastname'];
      $user->signupTeacher();
  }
  ?>
</body>
</html>

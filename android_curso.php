<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LabDemy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<?php
session_start();

 ?>
 <script>
 function validate(){

     var a = document.getElementById("password").value;
     var b = document.getElementById("confirm_password").value;
     if (a!=b) {
        alert("Passwords do no match");
        return false;
     }
 }
</script>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php
if (!empty($_SESSION)) {
     ?>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo-nuevo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.php">Inicio</a></li>
                                        <li><a  class="active" href="courses.php">Cursos</a></li>
                                        <li><a href="planes.php">Planes<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="course_details.html">Detalles</a></li>
                                                <!--li><a href="elements.html">elements</a></li-->
                                            </ul>
                                        </li>
                                        <li><a href="about.php">Nosotros</a></li>
                                        <!--li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul-->
                                        </li>
                                        <li><a href="contact.php">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>

                                    <span>  <?php

                                       if (!isset($_SESSION['usuario'])) {
                                           echo "Iniciar Sesión";
                                       } else {
                                           echo $_SESSION['usuario'];
                                       } ?></span>
                                </a>
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_orange" href="#">
                                        <i class="fa fa-phone"></i>
                                        <span>Call Center</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
<?php
include_once 'backend/database.php';
     include_once 'backend/cursos.php';
     include_once 'backend/user.php';
     $database = new Database();
     $db = $database->getConnection();
     $course = new cursos($db);
     $idcourse=$_GET['idcourse'];
     //$idcourse=1;
     $array=$course->getCoursePerId($idcourse);
     $user = new User($db); ?>
     <!-- bradcam_area_start -->
     <form class="form-container"  method="post" enctype="multipart/form-data">
     <div class="courses_details_banner">

         <div class="container">
           <?php
           if (!empty($_SESSION['tipo']) and $_SESSION['tipo']==2) {
               ?>
               <h1>Titulo</h1>
             <textarea class="form-control letra" col="2" rows="2" id="titulo" name="titulo"><?php echo $array['titulo']; ?>
             </textarea> <br>
             <?php
           } else {
               ?>

         <h2 style="color:white"  align="center">Curso de <?php echo $array['nombre']; ?></h2>
             <div class="row">
                 <div class="col-xl-6">


                 </div>
                 </div>
             </div>
             <?php
           } ?>
         </div>
    </div>
    <!-- bradcam_area_end -->

    <div class="courses_details_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="single_courses" align="justify">

                        <h3><?php echo $array['titulo']; ?></h3>
                        <?php
                        if (!empty($_SESSION['tipo']) and $_SESSION['tipo']==2) {
                            ?>
                             <h1>Texto</h1>
                            <textarea class="form-control letra" rows="15" id="texto" name="texto"><?php echo $array['texto']; ?>
                            </textarea> <br>
                            <?php
                        } else {
                            ?>
                          <p><?php echo $array['texto']; ?></p> <br>
                      <?php
                        } ?>

                    </div>
                </div>
                            <div class="" align="center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                if (!empty($_SESSION['tipo']) and $_SESSION['tipo']==2) {
                                    ?>
                                    <div class="form-group">
                                         <h1>Imagen</h1>
                                    <input type="file" name="myFile" class="form-control">
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                <img src="<?php echo $array['imagen']; ?>">
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="courses_sidebar" align = "center">
      <?php
      if (!empty($_SESSION['tipo']) and $_SESSION['tipo']==2) {
          ?>
             <h1>Link del video</h1>
          <textarea class="form-control letra" rows="1" id="linkvideo" name="linkvideo"><?php echo $array['linkvideo']; ?>
          </textarea> <br>
          <?php
      } else {
          ?>

        <a href = "<?php echo $array['linkvideo']; ?>" target = "_blank" >

          <img src="img/banner/edu_ilastration.png"><br><br><br><br>
          <?php
      } ?>

    </div>

    <?php
    if (!empty($_SESSION['tipo']) and $_SESSION['tipo']==2) {
        ?>
        <button type="submit" class="btn btn-primary py-2 px-2 text-white">ACEPTAR CAMBIOS</button>
          </form>

  <?php
    } ?>
    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo-nuevo.png" alt="">
                                </a>
                            </div>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Cursos
                            </h3>
                            <ul>
                                <li><a href="#">Android</a></li>
                                <li><a href="#">Raspberry Pi</a></li>
                                <li><a href="#">Arduino</a></li>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">UI/UX</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Menú
                            </h3>
                            <ul>
                                <li><a href="#">Incio</a></li>
                                <li><a href="#">Cursos</a></li>
                                <li><a href="#">Planes</a></li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#"> Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacto
                            </h3>
                            <p>
                                70163895 - 2755505 <br>
                                info@labdemy.edu
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide"   method="post">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/logo-nuevo.png" alt="">
                    </a>
                </div>

                <?php if (empty($_SESSION['usuario'])) {
                                        ?>
                <h3>Iniciar Sesión</h3>
                <form action="#">
                    <div class="row">

                        <div class="col-xl-12 col-md-12">
                            <input type="email" name='emailsignin' placeholder="Ingresa tu email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" name='passwordsignin' placeholder="Contraseña" required>
                        </div>
                      <?php
                                    } ?>
                        <div class="col-xl-12">

                              <?php
                              if (!empty($_SESSION['usuario'])) {
                                  echo '<button type="submit" formaction="sessiondestroy.php" class="boxed_btn_orange">';
                                  echo "Log out";
                                  echo '</button>';
                                  echo "<p>";
                                  echo "<p>";
                                  echo "<p>";
                                  echo "<p>";
                                  echo '<button type="submit" formaction="onprocess.php" class="boxed_btn_orange">';
                                  echo "Ver perfil";
                                  echo '</button>';
                              } else {
                                  echo '<button type="submit" formaction="index.php" class="boxed_btn_orange">';
                                  echo "Iniciar Sesión";
                              }
                               ?>
                             </button>

                        </div>
                    </div>
                </form>
                <?php
                include_once 'backend/database.php';
                include_once 'backend/user.php';

                $database = new Database();
                $db = $database->getConnection();
                $user = new User($db);
                if (!empty($_POST['emailsignin'])) {
                    $user->email= $_POST['emailsignin'];
                    $user->password = base64_encode($_POST['passwordsignin']);
                    $var=$user->login();
                    while ($fila = $var->fetch()) {
                        $_SESSION['usuario']=$fila['nombre'];
                        $_SESSION['id']=$fila['id'];
                        $_SESSION['tipo']=$fila['tipo'];
                        echo "<meta http-equiv='refresh' content='0'>";
                    }
                }
                    if (empty($_SESSION['usuario'])) {
                        ?>
                <p class="doen_have_acc">¿No tienes una cuenta? <a class="dont-hav-acc" href="#test-form2">Regístrate aquí</a>
                </p>
                <?php
                    }?>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" onSubmit="return validate()" class="white-popup-block mfp-hide" action="index.php" method="post">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/logo-nuevo.png" alt="">
                    </a>
                </div>
                <h3>Regístrate</h3>
                <form action="" onSubmit="return validate()" >
                    <div class="row" >
                        <div class="col-xl-12 col-md-12" >
                            <input type="text" id="name" name='name' placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="text" id="lastname" name='lastname' placeholder="Ingresa tu Apellido" required>
                        </div>
                        <div class="col-xl-12 col-md-12" >
                            <input type="password" id='password' name='password' placeholder="Contraseña" required>
                        </div>
                        <div class="col-xl-12 col-md-12" >

                            <input type="password" id='confirm_password' name='confirm_password' placeholder="Confirma tu contraseña" required>

                        </div>

                        <div class="col-xl-12 col-md-12" >
                            <input type="email" id="email" name='email' placeholder="Ingresa email" required>
                        </div>
                        <div class="col-xl-12">
                        <!-- <a href="login.php"  class="boxed_btn_orange" type="button">Sign Up</a> -->
                        <button type="submit"  class="boxed_btn_orange">Registrarse</button>
                        </div>

                    </div>
                    <?php

                      include_once 'backend/user.php';
                      $database = new Database();
                      $db = $database->getConnection();
                      $user = new user($db);

                      if (!empty($_POST['email'])) {
                          $user->email =  $_POST['email'];
                          $user->password =  base64_encode($_POST['password']);
                          $user->nombre = $_POST['name'];
                          $user->lastname = $_POST['lastname'];
                          $user->signup();
                      }

                    ?>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

<?php
if (!empty($_POST)) {
                                  $my_folder = "img/";

                                  if (!empty($_FILES) and move_uploaded_file($_FILES['myFile']['tmp_name'], $my_folder . $_FILES['myFile']['name'])) {
                                      $imagenvideo=$my_folder.basename($_FILES['myFile']['name']);
                                      chmod($imagenvideo, 0777);
                                      echo "asd";
                                      $course->setImagenCourse($imagenvideo, $idcourse);
                                  } else {
                                      echo "No se logro subir la imagen";
                                  }

                                  $course->setTituloCourse($_POST['titulo'], $idcourse);
                                  $course->setLinkVideoCourse($_POST['linkvideo'], $idcourse);
                                  $course->setTextCourse($_POST['texto'], $idcourse);
                                  // while ($arrayobjetivos=$_POST['objetivo']->fetch()) {
                                  //   $course->setObjective($arrayobjetivos[''],$idcourse);
                                  // }
                               echo "<meta http-equiv='refresh' content='0'>";
                              }
 } else {
     echo "no tienes permiso para ver esta pagina";
 }
?>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>

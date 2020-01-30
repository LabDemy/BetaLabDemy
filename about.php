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
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="courses.php">Cursos</a></li>
                                        <li><a href="planes.php">Planes</a></li>
                                        <li><a class="active" href="about.php">Nosotros</a></li>
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
                                       }?></span>
                                </a>
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_orange" href="contact.php">
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

        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Nosotros</h3>
        </div>
        <!-- bradcam_area_end -->

    <!-- about_area_start -->
    <div class="about_area" align="center" style="padding-bottom:0px; padding-top:20px;">
        <img src="img/logo-about.png">
        <div class="container">

            <div class="row">

                <div class="col-xl-5 col-lg-6">

                    <div class="single_about_info"><br><br><br><br>
                      <h3 align="center">Sobre Labdemy</h3> <br>
                      <h5 style="text-align: justify; color: #333333"> Buscamos brindarte la mejor calidad de educación con <br>
                        herramientas altamente tecnologizadas, para así brindarte una digitalización <br>
                        y puedas convertirte en todo lo que siempre quisiste. </h5>

                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                   <img src="img/about.png" align="center">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- our_team_member_start -->
    <div class="our_team_member" style="padding-top:0px;">
        <div class="container">
            <div align="center">
                <h1>Conoce a nuestro equipo:</h1>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/testmonial/me.png">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Maria Emilia Aguilar</h3>
                            <p>Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/Sara.jpg" alt="">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Sara Uriarte</h3>
                            <p>CTO</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
    <!-- our_team_member_end -->



    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="index.php">
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
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="courses.php">Cursos</a></li>
                                <li><a href="planes.php">Planes</a></li>
                                <li><a href="about.php">Nosotros</a></li>
                                <li><a href="contact.php">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacto
                            </h3>
                            <p>
                                70163895 - 2750555 <br>
                               info@labdemy.edu <br>

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Fue hecho con <i class="fa fa-heart-o" aria-hidden="true"></i></a>
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
                    <a href="index.php">
                        <img src="img/logo-nuevo.png" alt="">
                    </a>
                </div>

                <?php if (empty($_SESSION['usuario'])) {
                                           ?>
                <h3>Sign in</h3>
                <form action="#">
                    <div class="row">

                        <div class="col-xl-12 col-md-12">
                            <input type="email" name='emailsignin' placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" name='passwordsignin' placeholder="Password">
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
                                  $var=$_SESSION['id'];
                                  echo "<button type='submit' formaction='perfil.php?id=$var' class='boxed_btn_orange'>";
                                  echo "Ver perfil";
                                  echo '</button>';
                              } else {
                                  echo '<button type="submit" formaction="index.php" class="boxed_btn_orange">';
                                  echo "Sign in";
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
                <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
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
                <h3>Registration</h3>
                <form action="" onSubmit="return validate()" >
                    <div class="row" >
                        <div class="col-xl-12 col-md-12" >
                            <input type="text" id="name" name='name' placeholder="Enter name">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="text" id="lastname" name='lastname' placeholder="Enter last name">
                        </div>
                        <div class="col-xl-12 col-md-12" >
                            <input type="password" id='password' name='password' placeholder="Password">
                        </div>
                        <div class="col-xl-12 col-md-12" >

                            <input type="password" id='confirm_password' name='confirm_password' placeholder="Confirm password">

                        </div>

                        <div class="col-xl-12 col-md-12" >
                            <input type="email" id="email" name='email' placeholder="Enter email">
                        </div>
                        <div class="col-xl-12">
                        <!-- <a href="login.php"  class="boxed_btn_orange" type="button">Sign Up</a> -->
                        <button type="submit"  class="boxed_btn_orange">Sign Up</button>
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

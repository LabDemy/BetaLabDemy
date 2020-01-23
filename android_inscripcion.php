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
                                        <li><a  href="index.php">Inicio</a></li>
                                        <li><a  class="active" href="courses.php">Cursos</a></li>
                                        <li><a href="onprocess.php">Planes <i class="ti-angle-down"></i></a>
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
                                           echo "Log In";
                                       } else {
                                           echo $_SESSION['usuario'];
                                       }?></span>
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

     <!-- bradcam_area_start -->
     <?php
     include_once 'backend/database.php';
     include_once 'backend/cursos.php';
     include_once 'backend/user.php';
     $database = new Database();
     $db = $database->getConnection();
     $course = new cursos($db);
     $user = new User($db);
     $idcourse=$_GET['idcourse'];
     if (!empty($_SESSION['id'])) {
         $iduser=$_SESSION['id'];
     }
         //$idcourse=4;
         //$iduser=2;
         $array=$course->getCourseInformationPerId($idcourse);
         $arraydocente=$user->getUser($array['id_docente']);

     ?>
     <div class="courses_details_banner">
         <div class="container">
             <div class="row">
                 <div class="col-xl-6">
                     <div class="course_text">
                            <h3><?php
                            echo $array['titulo'];
                              ?></h3>
                            <div class="prise">
                                <span class="inactive">Bs100.00</span>
                                <span class="active">Bs<?php
                                  echo $array['precio'];
                                ?></span>
                            </div>
                            <div class="rating">
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <span>(4.5)</span>
                            </div>
                            <div class="hours">
                                <div class="video">
                                     <div class="single_video">
                                            <i class="fa fa-clock-o"></i> <span>1 video</span>
                                     </div>
                                     <div class="single_video">
                                            <i class="fa fa-play-circle-o"></i> <span>9 Horas de Entrenamiento</span>
                                     </div>

                                </div>
                            </div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
    <!-- bradcam_area_end -->

    <div class="courses_details_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="single_courses">
                        <h3>Objetivos</h3>
                        <?php
                        $objetivos=$course->getObjetivos($array['id']);

                        $var=0;
                        while ($fila=$objetivos->fetch()) {
                            if ($var==0) {
                                ?>
                        <p><?php echo $fila['objetivo'];
                                $var=1; ?></p> <br>
                          <?php
                            } else {
                                ?>
                        <p>&#10004; <?php echo $fila['objetivo']; ?><p><br>
                        <?php
                            }
                        }
                        ?>

                    <h3 class="second_title">Preguntas Frecuentes</h3>
                    </div>
                    <div class="outline_courses_info">
                            <div id="accordion">
                              <?php
                              $preguntas = $course->getPreguntas($array['id']);
                              while ($fila=$preguntas->fetch()) {
                                  ?>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="flaticon-question"></i> <?php
                                                      echo $fila['pregunta']; ?>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                  <?php
                                                    echo $fila['respuesta']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                              }
                                    ?>
                            </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="courses_sidebar">
                        <div class="video_thumb">
                            <img src="<?php echo $array['imagenvideo'];?>" alt="">
                            <a class="popup-video" href="<?php echo $array['linkvideo'];?>">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <div class="author_info">
                            <div class="auhor_header">
                                <div class="thumb">
                                        <img src="<?php echo $arraydocente['imagen'];?>" alt="">
                                </div>
                                <div class="name">
                                    <h3><?php echo $arraydocente['nombre']." "; echo $arraydocente['lastname'];?> </h3>
                                    <p>Desarrollador de Android</p>
                                </div>
                            </div>
                            <p class="text_info">
                               "El desarrollo de Android es clave para un futuro lleno de tecnología"
                            </p>
                            <ul>
                                <li><a href="#"> <i class="fa fa-envelope"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="ti-linkedin"></i> </a></li>
                            </ul>
                        </div>
                        <a href="prueba.php?iduser=<?php echo $iduser."&idcourse=".$idcourse;?>" class="boxed_btn">Comprar Curso</a>
                        <div class="feedback_info">
                            <h3>Califica este curso!</h3>
                            <p>Rating</p>
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <i class="flaticon-mark-as-favorite-star"></i>

                        <form action="#">
                                <textarea name="" id="" cols="30" rows="10" placeholder="Escríbenos"></textarea>
                                <button type="submit" class="boxed_btn">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- testimonial_area_start -->
   <!-- <div class="testimonial_area testimonial_bg_1 overlay">
        <div class="testmonial_active owl-carousel">
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- Jquileen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- Jquileen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_end -->

    <!-- our_courses_start -->
    <!--<div class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Our Course Speciality</h3>
                        <p>Your domain control panel is designed for ease-of-use and <br>
                            allows for all aspects of your domains.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                        <h3>Premium Quality</h3>
                        <p>
                            Your domain control panel is designed for ease-of-use <br> and <br>
                            allows for all aspects of
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <h3>Premium Quality</h3>
                        <p>
                            Your domain control panel is designed for ease-of-use <br> and <br>
                            allows for all aspects of
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <h3>Premium Quality</h3>
                        <p>
                            Your domain control panel is designed for ease-of-use <br> and <br>
                            allows for all aspects of
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <h3>Premium Quality</h3>
                        <p>
                            Your domain control panel is designed for ease-of-use <br> and <br>
                            allows for all aspects of
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

    <!-- subscribe_newsletter_Start -->
   <!-- <div class="subscribe_newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter_text">
                        <h3>Subscribe Newsletter</h3>
                        <p>Your domain control panel is designed for ease-of-use and allows for all aspects of your</p>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="newsletter_form">
                        <h4>Your domain control panel is</h4>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->

    <!-- our_latest_blog_start -->
   <!-- <div class="our_latest_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Our Latest Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/1.png" alt="">
                        </div>
                        <div class="content_blog">
                            <div class="date">
                                <p>12 Jun, 2019 in <a href="#">Design tips</a></p>
                            </div>
                            <div class="blog_meta">
                                <h3><a href="#">Commitment to dedicated Support</a></h3>
                            </div>
                            <p class="blog_text">
                                Firmament morning sixth subdue darkness creeping gathered divide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/2.png" alt="">
                        </div>
                        <div class="content_blog">
                            <div class="date">
                                <p>12 Jun, 2019 in <a href="#">Design tips</a></p>
                            </div>
                            <div class="blog_meta">
                                <h3><a href="#">Commitment to dedicated Support</a></h3>
                            </div>
                            <p class="blog_text">
                                Firmament morning sixth subdue darkness creeping gathered divide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/3.png" alt="">
                        </div>
                        <div class="content_blog">
                            <div class="date">
                                <p>12 Jun, 2019 in <a href="#">Design tips</a></p>
                            </div>
                            <div class="blog_meta">
                                <h3><a href="#">Commitment to dedicated Support</a></h3>
                            </div>
                            <p class="blog_text">
                                Firmament morning sixth subdue darkness creeping gathered divide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_latest_blog_end -->


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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | fue hecho con <i class="fa fa-heart-o" aria-hidden="true"></i>
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
                                  echo '<button type="submit" formaction="onprocess.php" class="boxed_btn_orange">';
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

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

include_once 'backend/database.php';
include_once 'backend/user.php';
include_once 'backend/cursos.php';

$database = new Database();
$db = $database->getConnection();
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
                                        <li><a class="active" href="courses.php">Cursos</a></li>
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
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Nuestros cursos</h3>
        </div>
        <!-- bradcam_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Cursos</h3>
                        <p>Te ofrecemos una gran variedad de cursos <br> todos tienen el grado de dificultad y el tiempo de duración ideal para ti</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="course_nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Todos los cursos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Photoshop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">UI/UX</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab"
                                        aria-controls="design" aria-selected="false">Web Design</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Web-tab" data-toggle="tab" href="#Web" role="tab"
                                        aria-controls="design" aria-selected="false">Web dev</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Web-tab1" data-toggle="tab" href="#Web1" role="tab"
                                        aria-controls="design" aria-selected="false">Wordpress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Web-tab11" data-toggle="tab" href="#Web11" role="tab"
                                        aria-controls="design" aria-selected="false">Adobe XD</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Adobe-XD-tab8" data-toggle="tab" href="#Adobe-XD8" role="tab"
                                        aria-controls="design" aria-selected="false">Sketch App</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Adobe-XD-tab9" data-toggle="tab" href="#Adobe-XD9" role="tab"
                                        aria-controls="design" aria-selected="false">Illustrator</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="android_inscripcion.php">
                                                    <img src="img/courses/1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                            <span>Android</span>
                                                <h3><a href="android_inscripcion.php">Aplicaciones Android<br>
                                                        </a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs50.00</span>
                                                        <span class="active_prise">
                                                            Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="ux_inscripcion.php">
                                                    <img src="img/courses/2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>UX/UI</span>
                                                <h3><a href="ux_inscripcion.php">UI vs UX </a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs60.00</span>
                                                        <span class="active_prise">
                                                            Bs59
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="disenoApps_inscripcion.php">
                                                    <img src="img/courses/3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Aplicaciones</span>
                                                <h3><a href="disenoApps_inscripcion.php">Diseño de Aplicaciones con UX</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs79.00</span>
                                                        <span class="active_prise">
                                                            Bs69
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="metodologias_inscripcion.php">
                                                    <img src="img/courses/4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Ingeniería de Software</span>
                                                <h3><a href="metodologias_inscripcion.php">Metodologías Ágiles</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                            Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                              <a href="customer_inscripcion.php">
                                                <img  src="img/courses/5.jpg" alt="">
                                              </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>CX</span>
                                                <h3><a href="customer_inscripcion.php">Servicio al Cliente</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                            Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="office_inscripcion.php">
                                                    <img src="img/courses/6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Office 2019</span>
                                                <h3><a href="office_inscripcion.php">Aprende Excel, Word y Más <br>
                                                        </a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                            Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="courses.php" class="boxed_btn_rev">Más Cursos</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6  col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="android_inscripcion.php">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Adobe XD</span>
                                                <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Wordpress theme development <br>
                                                        from scratch</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <img src="img/courses/5.png" alt="">
                                            </div>
                                            <div class="courses_info">
                                                <span>UI/UX</span>
                                                <h3><a href="#">How to complete user research <br>
                                                        and make work flow</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Commitment to dedicated <br>
                                                        Support</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">More Courses</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Adobe XD</span>
                                                <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Wordpress theme development <br>
                                                        from scratch</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <img src="img/courses/5.png" alt="">
                                            </div>
                                            <div class="courses_info">
                                                <span>UI/UX</span>
                                                <h3><a href="#">How to complete user research <br>
                                                        and make work flow</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Commitment to dedicated <br>
                                                        Support</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">More Courses</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Adobe XD</span>
                                                <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Wordpress theme development <br>
                                                        from scratch</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <img src="img/courses/5.png" alt="">
                                            </div>
                                            <div class="courses_info">
                                                <span>UI/UX</span>
                                                <h3><a href="#">How to complete user research <br>
                                                        and make work flow</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Commitment to dedicated <br>
                                                        Support</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">More Courses</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="Web" role="tabpanel" aria-labelledby="Web-tab">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Adobe XD</span>
                                                <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Wordpress theme development <br>
                                                        from scratch</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <img src="img/courses/5.png" alt="">
                                            </div>
                                            <div class="courses_info">
                                                <span>UI/UX</span>
                                                <h3><a href="#">How to complete user research <br>
                                                        and make work flow</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Commitment to dedicated <br>
                                                        Support</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">More Courses</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="Web1" role="tabpanel" aria-labelledby="Web-tab1">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4  col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Adobe XD</span>
                                                <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Wordpress theme development <br>
                                                        from scratch</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <img src="img/courses/5.png" alt="">
                                            </div>
                                            <div class="courses_info">
                                                <span>UI/UX</span>
                                                <h3><a href="#">How to complete user research <br>
                                                        and make work flow</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Commitment to dedicated <br>
                                                        Support</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">More Courses</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="Web11" role="tabpanel" aria-labelledby="Web-tab11">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Adobe XD</span>
                                                <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Wordpress theme development <br>
                                                        from scratch</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <img src="img/courses/5.png" alt="">
                                            </div>
                                            <div class="courses_info">
                                                <span>UI/UX</span>
                                                <h3><a href="#">How to complete user research <br>
                                                        and make work flow</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Commitment to dedicated <br>
                                                        Support</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">More Courses</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="Adobe-XD8" role="tabpanel" aria-labelledby="Adobe-XD8">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4  col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Adobe XD</span>
                                                <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Wordpress theme development <br>
                                                        from scratch</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <img src="img/courses/5.png" alt="">
                                            </div>
                                            <div class="courses_info">
                                                <span>UI/UX</span>
                                                <h3><a href="#">How to complete user research <br>
                                                        and make work flow</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Commitment to dedicated <br>
                                                        Support</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">More Courses</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="Adobe-XD9" role="tabpanel" aria-labelledby="Adobe-XD-tab9">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Adobe XD</span>
                                                <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Wordpress theme development <br>
                                                        from scratch</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Photoshop</span>
                                                <h3><a href="#">Mobile App design step by step <br>
                                                        from beginner</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <img src="img/courses/5.png" alt="">
                                            </div>
                                            <div class="courses_info">
                                                <span>UI/UX</span>
                                                <h3><a href="#">How to complete user research <br>
                                                        and make work flow</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Wordpress</span>
                                                <h3><a href="#">Commitment to dedicated <br>
                                                        Support</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer">Bs89.00</span>
                                                        <span class="active_prise">
                                                        Bs49
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">Mas cursos</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_courses_end-->

    <!-- CURSOS DEL USUARIO -->
    <div class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Tus cursos <?php if (!empty($_SESSION)) {
                                           echo $_SESSION['usuario'];
                                       }?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php
              $course = new cursos($db);
                  if (!empty($_SESSION['id'])) {
                      $arrayCourses=$course->getCoursesPerUser($_SESSION['id']);
                      if (!empty($arrayCourses)) {
                          while ($fila=$arrayCourses->fetch()) {
                              $imagen= $fila['imagen']; ?>
                      <div class="all_courses">
                          <div class="container">
                              <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="col-xl-4 col-lg-4 col-md-6">
                      <div class="single_courses">
                          <div class="thumb">
                              <a href="android_inscripcion.php?idcourse=<?php echo $fila['id']; ?>">
                                  <img src="img/courses/1.jpg" alt="">
                              </a>
                          </div>
                          <div class="courses_info">
                          <span><?php echo $fila['nombre']; ?></span>
                              <h3><a href="android_inscripcion.php?idcourse=<?php echo $fila['id']; ?>"><?php echo $fila['titulo']; ?><br>
                                      </a></h3>

                          </div>
                      </div>
                  </div>
                </div>
            </div>
            </div>
            </div>
              <?php
                          }
                      }
                  }
              ?>


            </div>
        </div>
    </div>
    <!-- FIN de cursos del usuario -->

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
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Cursos</a></li>
                                <li><a href="onprocess.php">Planes</a></li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Contacto</a></li>
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
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/form-logo.png" alt="">
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
                                  echo '<button type="submit" formaction="courses.php" class="boxed_btn_orange">';
                                  echo "Sign in";
                              }
                               ?>
                             </button>
                        </div>
                    </div>
                </form>
                <?php



                $user = new User($db);
                if (!empty($_POST['emailsignin'])) {
                    $user->email= $_POST['emailsignin'];
                    $user->password = base64_encode($_POST['passwordsignin']);
                    $var=$user->login();
                    while ($fila = $var->fetch()) {
                        $_SESSION['usuario']=$fila['nombre'];
                        $_SESSION['id']=$fila['id'];
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
    <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Resistration</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="Password" placeholder="Confirm password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Sign Up</button>
                        </div>
                    </div>
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

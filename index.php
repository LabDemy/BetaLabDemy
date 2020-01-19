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
print_r($_SESSION);
if (!empty($_SESSION['tipo']) and $_SESSION['tipo']==3) {
    header("Location: CMS/index.html");
}
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
                                        <li><a class="active" href="index.php">Inicio</a></li>
                                        <li><a  href="courses.php">Cursos</a></li>
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

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/Education.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>LabDemy<h3>
                               <h2> Plataforma de educación<br>
                                para tu siguiente empleo</h2><br>
                            <a href="#" class="boxed_btn">Buscar Cursos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3>Te ofrecemos <br>
                            muchas oportunidades</h3><br>
                        <h5><font color ="grey">Bienvenido, en LabDemy aprenderás las últimas tendencias en tecnología donde podrás capacitarte para futuras ofertas laborales, en LabDemy velamos por tu buen desempeño dentro de la plataforma. </h5></font><br>
                        <a href="#" class="boxed_btn">Pasar un curso</a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="about_tutorials">
                        <div class="courses">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>10+</span>
                                    <p> Cursos</p>
                                </div>
                            </div>
                        </div>
                        <div class="courses-blue">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>1547</span>
                                    <p> Estudiantes</p>
                                </div>

                            </div>
                        </div>
                        <div class="courses-sky">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>100%</span>
                                    <p> Efectividad Laboral</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Cursos</h3>
                        <p>Te ofrecemos una gran variedad de cursos <br> con los que podras aprender todo lo que necesites. <br>
                    Asi que compra tu plan ya!</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once "backend/cursos.php";
        $database = new Database();
        $db = $database->getConnection();
        $courses= new cursos($db);
        $arrayCourses=$courses->getAllCourses();
        ?>
        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                              <?php
                              while ($fila=$arrayCourses->fetch()) {
                                  ?>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="android_inscripcion.php?idcourse=<?php echo $fila['id']?>">
                                                    <img src="<?php echo $fila['imagen']; ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span><?php echo $fila['nombre']; ?></span>
                                                <h3><a href="android_inscripcion.php?idcourse=<?php echo $fila['id']?>"><?php echo $fila['titulo']; ?><br>
                                                        </a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <div class="prise">
                                                      <?php
                                                      $information=$courses->getCourseInformationPerId($fila['id']); ?>
                                                        <span class="offer">Bs<?php echo $information['precio']+20; ?></span>
                                                        <span class="active_prise">Bs
                                                            <?php

                                                            echo $information['precio']; ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                              }
                                    ?>

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
                                                <span>Photoshopasdasd</span>
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


    <!-- testimonial_area_start -->
    <div class="testimonial_area testimonial_bg_1 overlay">
        <div class="testmonial_active owl-carousel">
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/descarga.png" alt="">
                                </div>
                                <p>
                                    "LabDemy es el sueño de todo boliviano para poder tener una educación tecnológica,<br>
                                    nosotros no te damos trabajo, tú te lo ganas con LabDemy"  <br>


                                </p>
                                <span>- María Emilia Aguilar - CEO LabDemy</span>
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
                                    <img src="img/testmonial/vladimir.png" alt="">
                                </div>
                                <p>
                                    "Esta será la plataforma Nº1 de la educacion digital,<br>
                                    es momento de empezar a tecnologizarnos más!"

                                </p>
                                <span> -Vladimir Tirado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_end -->

    <!-- our_courses_start -->
    <div class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Nuestra Especialidad</h3>
                        <h5><font color = "grey">Te preparamos para el tipo de trabajo ideal para tí <br>
                            ¡Estarás a un click de distancia!</font>
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
                        <h3>Calidad Premium</h3>
                        <p>
                            Preparamos los contenidos de manera instruccional <br>
                            para tu mejor experiencia, sencilla e intuitiva
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <h3>Precios Accesibles</h3>
                        <p>
                            Labdemy piensa en tí, tenemos precios accesibles<br>
                            para todo tipo de curso que quieras cursar.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <h3>Altamente Tecnologizadas</h3>
                        <p>
                            Contamos con los top-trendings topics para que aprendas
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <h3>Atención 24/7</h3>
                        <p>
                            LabDemy estará disponible todos los días de las semana<br>
                            las 24 horas al día
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

    <!-- subscribe_newsletter_Start -->
    <div class="subscribe_newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter_text">
                        <h3>Suscríbete</h3>
                        <p>Recibirás información acerca de los nuevos cursos, ofertas y más</p>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="newsletter_form">
                        <h4>Escribe tu mail</h4>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Ingresa tu mail">
                            <button type="submit">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->

    <!-- our_latest_blog_start -->
    <!--<div class="our_latest_blog">
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

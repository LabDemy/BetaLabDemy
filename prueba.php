<form id="test-form2" class="white-popup-block mfp-hide" action="prueba.php" method="get">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Registration</h3>
            <form>
                <div class="row" >
                  <div class="col-xl-12 col-md-12" >
                      <input type="text" id="name" name='name' placeholder="Enter name">
                  </div>
                  <div class="col-xl-12 col-md-12">
                      <input type="text" id="lastname" name='lastname' placeholder="Enter last name">
                  </div>
                  <div class="col-xl-12 col-md-12" method="get">
                      <input type="password" id="password" name='password' placeholder="Password">
                  </div>
                  <div class="col-xl-12 col-md-12" >
                      <input type="password"  placeholder="Confirm password">
                  </div>
                  <div class="col-xl-12 col-md-12" method="get">
                      <input type="email" id="email" name='email' placeholder="Enter email">
                  </div>
                  <div class="col-xl-12">
                  <!-- <a href="login.php"  class="boxed_btn_orange" type="button">Sign Up</a> -->
                  <button type="submit"  class="boxed_btn_orange">Sign Up</button>
                  </div>

                </div>
                <?php

                  include_once 'backend/database.php';
                  include_once 'backend/user.php';

                  $database = new Database();
                  $db = $database->getConnection();
                  $user = new user($db);

                  if (!empty($_GET['email'])) {
                      //session_start();
                      $user->email =  $_GET['email'];
                      $user->password =  $_GET['password'];
                      $user->nombre = $_GET['name'];
                      $user->lastname = $_GET['lastname'];
                      $user->signup();
                  }

                ?>

            </form>
        </div>
    </div>
</form>

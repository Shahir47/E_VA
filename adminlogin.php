<?php

  if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user=="admin" && $pass=="admin"){
      header("location:admin.html");
    }
    else{
    header("location:$_SERVER[HTTP_REFERER]");
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-VA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/mine1.png" rel="icon">
  <link href="assets1/img/mine1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/owl.carousel/assets1/owl.carousel.min.css" rel="stylesheet">
  <link href="assets1/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/stylemine.css" rel="stylesheet">
  <link href="assets1/css/stylelogin.css" rel="stylesheet">
  <!--<link href="assets1/css/style.css" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Gp - v2.0.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header>
      <div class="container">
        <div id="branding">
          <a class="navbar-brand" href="index.php"><p style="font-size: 20px;font-family: Segoe Print;color: #fec503">E-va</p></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php"><p style="font-size: 20px;font-family: Segoe Print;color: #fec503">Home</p></a></li>
            <li class="current"><a href="about.html"><p style="font-size: 20px;font-family: Segoe Print;color: #fec503">About</p></a></li>
          </ul>
        </nav>
      </div>
    </header>



  <main id="main">
    <div>
      <br>
      <br>
      <br>
      <h2 align='center'>Sign in <h2>
      
      <form class="setInput" action="" method="post">
        <label for="uname">Username</label>
        <input type="text" class="form-control"  placeholder="Enter your ID" name="username" required>
        <label for="uname">Password</label>
        <input type="password" class="form-control"  placeholder="Enter your Password" name="password" required> 
        <br>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </form>
      <br>
      <br>
      <br>
    </div>
  </main>











  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/jquery/jquery.min.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>
  <script src="assets1/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/venobox/venobox.min.js"></script>
  <script src="assets1/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets1/vendor/counterup/counterup.min.js"></script>
  <script src="assets1/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>

</html>
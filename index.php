<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Virtual Folio - Portfolio HTML5 Template</title>

  <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="/assets/css/themify-icons.css">

  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="/assets/vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="/assets/vendor/owl-carousel/owl.carousel.css">

  <link rel="stylesheet" type="text/css" href="/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

  <link rel="stylesheet" type="text/css" href="/assets/vendor/nice-select/css/nice-select.css">

  <link rel="stylesheet" type="text/css" href="/assets/vendor/fancybox/css/jquery.fancybox.min.css">

  <link rel="stylesheet" type="text/css" href="/assets/css/virtual.css">

  <link rel="stylesheet" type="text/css" href="/assets/css/topbar.virtual.css">
</head>
<body class="theme-red">

  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>

  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
      <select class="custom-select d-block my-2" id="change-page">
        <option value="">Choose Page</option>
        <option value="index">Topbar</option>
        <option value="blog-topbar">Blog (Topbar)</option>
        <option value="index-2">Minibar</option>
        <option value="blog-minibar">Blog (Minibar)</option>
      </select>
    </div>
  </div>

<!--  <div class="vg-page page-home" id="home" style="background-image: url(/assets/img/bg_image_1.jpg)"> -->
  <div class="vg-page page-home" id="home" style="background-image: url(https://storage.cloud.google.com/test-project-4-351923.appspot.com/img/bg_image_1.jpg?authuser=1)">    
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">V-Folio</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">About</a>
            </li>
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              <button class="btn btn-fab btn-theme no-shadow">En</button>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Welcome</h5>
      <h1 class="fw-light mb-4">I'm <b class="fg-theme">Cornelius</b> Mellino</h1>
      <div class="badge">Cloud Engineer</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>

  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="/assets/img/person.jpg" alt="">
          </div>
        </div>
        <div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light">Cornelius Mellino</h1>
          <h5 class="fg-theme mb-3">Cloud Engineer</h5>
          <p class="text-muted">“If you want something new, you have to stop doing something old” - Peter Drucker</p>
          <ul class="theme-list">
            <li><b>From:</b> Surakarta Hadiningrat, Central Java.</li>
            <li><b>Lives In:</b> Denpasar, Bali.</li>
            <li><b>Age:</b> 46</li>
            <li><b>Gender:</b> Male</li>
          </ul>
<!--          <button class="btn btn-theme-outline">Download CV</button> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">Virtual Folio</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">Denpasar, Bali.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Follow me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Contact me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li>csarungu@gmail.com</li>
              <li>+6287889453171</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-12">
          <p class="text-center mb-0 mt-4">Copyright &copy;2020. All right reserved | This template is made with <span class="ti-heart fg-theme-red"></span> by <a href="https://www.macodeid.com/">MACode ID</a></p>
        </div>
      </div>
    </div>
  </div> <!-- End footer -->


  <script src="/assets/js/jquery-3.5.1.min.js"></script>

  <script src="/assets/js/bootstrap.bundle.min.js"></script>

  <script src="/assets/vendor/owl-carousel/owl.carousel.min.js"></script>

  <script src="/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>

  <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>

  <script src="/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>

  <script src="/assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="/assets/vendor/wow/wow.min.js"></script>

  <script src="/assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="/assets/js/google-maps.js"></script>

  <script src="/assets/js/topbar-virtual.js"></script>

</body>
</html>

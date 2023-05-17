<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Direktorat Jendral Imigrasi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="../assets/landing-page/vendor/swiper/swiper-bundle.min.css">
    <!-- Modal Video-->
    <link rel="stylesheet" href="../assets/landing-page/vendor/modal-video/css/modal-video.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800&amp;display=swap">
    <!-- Device Mockup-->
    <link rel="stylesheet" href="../assets/landing-page/css/device-mockups.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../assets/landing-page/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../assets/landing-page/css/custom.css">
    <!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="../auth/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../auth/css/style.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../assets/landing-page/img/imig.png">
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="navbar">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="../assets/landing-page/img/imigg.png" alt="" width="50%"></a>
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link link-scroll active" href="#hero">Back <span class="sr-only">(current)</span></a></li>
              
              
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <section class="hero bg-top py-5" id="hero" style="background: url(../assets/landing-page/img/banner-4.png) no-repeat;background-size: 100% 80%">
      <div class="container py-5">
        <div class="row py-5">
          <div class="col">
            @yield('content')
          </div>
          
        </div>
      </div>
    </section>
    <footer class="with-pattern-1 position-relative pt-5" style="background-color:#274472">
      <div class="container py-5">
        <div class="row gy-4">
          <div class="col-lg-3"><img class="mb-4" src="../assets/landing-page/img/imig.png" alt="" width="110">
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
          <div class="col-lg-2">
            <h2 class="h5 mb-4">Quick Links</h2>
            <div class="d-flex">
              <ul class="list-unstyled d-inline-block me-4 mb-0">
                <li class="mb-2"><a class="footer-link" href="#!">History</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">About us</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">Contact us</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2">
            <h2 class="h5 mb-4">Services</h2>
            <div class="d-flex">
              <ul class="list-unstyled me-4 mb-0">
                <li class="mb-2"><a class="footer-link" href="#!">History</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">About us</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">Contact us</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5">
            <h2 class="h5 mb-4">Contact Info</h2>
            <ul class="list-unstyled me-4 mb-3">
              <li class="mb-2 text-muted">728  Ocello Street, San Diego, California. </li>
              <li class="mb-2"><a class="footer-link" href="tel:619-851-4132">619-851-4132</a></li>
              <li class="mb-2"><a class="footer-link" href="mailto:Nova@example.com">Nova@example.com</a></li>
            </ul>
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a class="social-link" href="#!"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#!"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#!"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#!"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">       
        <div class="container text-center py-4">
          <p class="mb-0 text-muted text-sm">&copy; 2021, Your company. Template by <a href="https://bootstrapious.com/p/app-landing-page" class="text-reset">Bootstrapious</a>.</p>
          <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="../assets/landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/landing-page/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/landing-page/vendor/modal-video/js/modal-video.js"></script>
    <script src="../assets/landing-page/js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
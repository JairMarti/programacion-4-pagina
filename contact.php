<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Gym Template" />
    <meta name="keywords" content="Gym, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Obsidiana</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/flaticon.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/barfiller.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
      <div class="canvas-close">
        <i class="fa fa-close"></i>
      </div>
      <div class="canvas-search search-switch">
      </div>
      <nav class="canvas-menu mobile-menu">
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="./about-us.html">Sobre nosotros</a></li>
          <li class="active"><a href="./team.html">Productos</a></li>
          <li><a href="./bmi-calculator.html">Calculadora BMI</a></li>
          <li><a href="./contact.php">Contacto</a></li>
          <li></li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="canvas-social">
        <a
          href="https://www.facebook.com/profile.php?id=61560878703165&is_tour_dismissed"
          ><i class="fa fa-facebook"></i
        ></a>
        <a href="https://www.instagram.com/obsidiana277/"
          ><i class="fa fa-instagram"></i
        ></a>
      </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <div class="logo">
              <a href="./index.html">
                <img src="img/logo.png" alt="" />
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="nav-menu">
              <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./about-us.html">Sobre nosotros</a></li>
                <li><a href="./team.html">Productos</a></li>
                <li><a href="./bmi-calculator.html">Calculadora BMI</a></li>
                <li class="active"><a href="./contact.php">Contacto</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3">
            <div class="top-option">
              <div class="to-social">
                <a
                  href="https://www.facebook.com/profile.php?id=61560878703165&is_tour_dismissed"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a href="https://www.instagram.com/obsidiana277/"
                  ><i class="fa fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="canvas-open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section
      class="breadcrumb-section set-bg"
      data-setbg="img/breadcrumb-bg.jpg"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb-text">
              <h2>Contactanos</h2>
              <div class="bt-option">
                <a href="./index.html">Home</a>
                <span>Contactanos</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title contact-title">
              <span>Contactanos</span>
            </div>
            <div class="contact-widget">
              <div class="cw-text">
                <i class="fa fa-map-marker"></i>
                <p>Bosconia<br />- Cesar</p>
              </div>
              <div class="cw-text">
                <i class="fa fa-mobile"></i>
                <ul>
                  <li>311 656 1335</li>
                </ul>
              </div>
              <div class="cw-text email">
                <i class="fa fa-envelope"></i>
                <p>Obsidiana08@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="leave-comment">
              <form id="form" method="post">
                <?php
                include("conexion_bd_php.php");
                include("controlador_registrarse.php");
                 ?>
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" />
                <input id="email" name="email" type="email" placeholder="Email" />
                <input id="telefono" name="telefono" type="number" placeholder="Telefono" />
                <textarea id="comentarios" name="comentarios" placeholder="Comentarios"></textarea>
                <input type="submit" name="ingresar" value="Enviar"></input>
              </form>
            </div>
          </div>
        </div>
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15718.112688557605!2d-73.89896077196279!3d9.973156925700591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5f930ad314d28b%3A0x8c38d92b9eb453e!2sBosconia%2C%20Cesar!5e0!3m2!1ses-419!2sco!4v1718330269278!5m2!1ses-419!2sco"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="gt-text">
              <i class="fa fa-map-marker"></i>
              <p>
                <br />
                Bosconia - Cesar
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="gt-text">
              <i class="fa fa-mobile"></i>
              <ul>
                <li>311 656 1335</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="gt-text email">
              <i class="fa fa-envelope"></i>
              <p>Obsidiana08@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="fs-about">
              <div class="fa-logo">
                <a href="#"><img src="img/logo.png" alt="" /></a>
              </div>
              <div class="fa-social">
                <a
                  href="https://www.facebook.com/profile.php?id=61560878703165&is_tour_dismissed"
                  target="_blank"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a
                  href="https://www.instagram.com/obsidiana277/"
                  target="_blank"
                  ><i class="fa fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="fs-widget">
              <h4>Link</h4>
              <ul>
                <li><a href="about-us.html">Sobre nosotros</a></li>
                <li><a href="team.html">Productos</a></li>
                <li><a href="bmi-calculator.html">Calculadora BMI</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="fs-widget">
              <h4>Soporte</h4>
              <ul>
              <li><a href="./contact.php">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="copyright-text">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Todos los derechos reservados
                <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
          <input type="text" id="search-input" placeholder="Search here....." />
        </form>
      </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/contacto.js"></script>
  </body>
</html>

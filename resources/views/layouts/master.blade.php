<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/stilogo.jpg" rel="icon">
  <link href="assets/img/stilogo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<style>
    .icon-image {
    width: 64px; /* Ajustez la taille selon vos préférences */
    height: 64px;
    object-fit: contain; /* Assurez-vous que l'image conserve ses proportions */
    border-radius: 50%; /* Pour arrondir les coins de l'image */
}

</style>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:solutionstechinnovantes@gmail.com">solutionstechinnovantes@gmail.com</a>
        <i class="icofont-phone"></i> 46839983
      </div>
      <div class="social-links float-right">
        <a href="#" class="https://x.com/solutionstechin/"><i class="icofont-twitter"></i></a>
        <a href="https://web.facebook.com/solutionstechnologiesinnovantes/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/solutionstechinnovantes/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.linkedin.com/in/solutionstechinnovantes/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

        <a href="{{ route('frontend.index') }}"><img src="{{ asset('image/stilogo.png') }}" style="width: 100px; height: 60px;" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{ route('frontend.index') }}">@lang('messages.home')</a></li>
                <li><a href="{{ route('frontend.about') }}">@lang('messages.about us')</a></li>
                <li><a href="{{ route('frontend.services') }}">@lang('messages.services')</a></li>
                <li><a href="{{ route('frontend.team') }}">@lang('messages.team')</a></li>
                <li><a href="{{ route('frontend.contact') }}">@lang('messages.contact us')</a></li>
                <li class="drop-down"><a href="">Lang</a>
                    <ul>
                        <li><a href="locale/ar" onclick="translatePage('ar')">Arabe</a></li>
                        <li><a href="locale/fr" onclick="translatePage('fr')">Français</a></li>
                        <li><a href="locale/en" onclick="translatePage('en')">Anglais</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .nav-menu -->


    </div>



  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @yield('sliders')

 <!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
        @yield('about')

    <!-- End About Lists Section -->
    <!-- ======= Counts Section =======
    <section class="counts section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section>
     End Counts Section -->

    <!-- ======= Services Section ======= -->
                @yield('services')

    <!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->

  <!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
        @yield('team')
    <!-- End Our Team Section -->


    <!-- ======= Contact Us Section ======= -->
  <!-- End Contact Us Section -->
        @yield('contact')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
        <a href="{{ route('frontend.index') }}"><img src="{{ asset('image/stilogo.png') }}" style="width: 150px; height: 160px;" alt=""></a>

            <p>
              Ksar <br>
              Nouakchott, Mauritania<br><br>
              <strong>Phone:</strong> +222 46839983<br>
              <strong>Email:</strong> solutionstechinnovantes@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://x.com/solutionstechin/" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://web.facebook.com/solutionstechnologiesinnovantes/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/solutionstechinnovantes/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/in/solutionstechinnovantes/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.index') }}">@lang('messages.home')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.about') }}">@lang('messages.about us')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.services') }}">@lang('messages.services')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.team') }}">@lang('messages.team')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.contact') }}">@lang('messages.contact us')</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.services') }}">@lang('messages.web developement')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.services') }}">@lang('messages.mobile application development and design')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.services') }}">@lang('messages.consulting and technical support')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.services') }}">@lang('messages.software solutions for managing institutions')</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>STI</span></strong>. @lang('messages.all rights reserved')
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

<script>
  $(document).ready(function() {
    // Intercepte les clics sur les liens vers les routes
    $('a').on('click', function(event) {
        // Vérifie si le lien pointe vers une route interne de votre application
        if (this.hash !== "" && this.pathname === '/') {
            event.preventDefault();
            // Récupère l'identifiant de la section cible à partir de l'attribut href du lien
            var target = $(this.hash);
            if (target.length) {
                // Fait défiler la page vers la section cible
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        }
    });
});

$(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: $(this.hash).offset().top }, 800);
    });
});



</script>

<!-- Script JavaScript pour la traduction -->
<script>
    const apiKey = "VOTRE_CLE_API_GOOGLE";  // Remplacez par votre clé API Google Translate

    async function translateText(text, targetLang) {
        const url = `https://translation.googleapis.com/language/translate/v2?key=${apiKey}`;
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                q: text,
                target: targetLang
            })
        });
        const data = await response.json();
        return data.data.translations[0].translatedText;
    }

    async function translatePage(targetLang) {
        const elements = document.querySelectorAll("[data-translate]");

        elements.forEach(async (element) => {
            const originalText = element.textContent;
            const translatedText = await translateText(originalText, targetLang);
            element.textContent = translatedText;
        });
    }
</script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

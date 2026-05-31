<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uiparadox.co.uk/templates/powerup/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2026 13:03:14 GMT -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="PowerUp">

  <title>{{ $title ?? 'Nuvana' }}</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">

  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-animation.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

  <!-- Additional CSS for specific pages -->
  @stack('styles')
</head>

<body class="tt-smooth-scroll">

  <!-- Preloader -->
  <div id="preloader">
    <div class="loading loading07">
      <span data-text="N">N</span>
      <span data-text="U">U</span>
      <span data-text="V">V</span>
      <span data-text="A">A</span>
      <span data-text="N">N</span>
      <span data-text="A">A</span>
    </div>
  </div>
  <!-- Preloader -->

  <!-- Main Wrapper Start -->
  <div id="scroll-container" class="main-wrapper">

    <x-navbar />

    <!-- Main Sections -->
    <main class="main-wrapper">

      {{ $slot ?? '' }}
      @yield('content')

      <x-footer />
    </main>
  </div>
  <!-- Main Wrapper End -->

  <!-- Back To Top Start -->
  <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fa-light fa-chevron-up"></i></a>


  <!-- Mobile Menu Start -->
  <div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
      <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
      <div class="logo-box">
        <a href="index.html" aria-label="logo image"><img src="assets/media/logo.png" alt=""></a>
      </div>
      <div class="mobile-nav__container"></div>
      <ul class="mobile-nav__contact list-unstyled">
        <li>
          <i class="fas fa-envelope"></i>
          <a href="mailto:example@company.com">example@company.com</a>
        </li>
        <li>
          <i class="fa fa-phone-alt"></i>
          <a href="tel:+12345678">+123 (4567) -890</a>
        </li>
      </ul>
      <div class="mobile-nav__social">
        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
  <!-- Mobile Menu End -->

  <!-- Jquery Js -->
  <script src="{{ asset('assets/js/vendor/jquery-3.6.3.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/slickAnimation.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>

  @stack('scripts')

</body>


<!-- Mirrored from uiparadox.co.uk/templates/powerup/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2026 13:03:34 GMT -->

</html>

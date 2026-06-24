<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Nuvana">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

  @php
      $currentPath = request()->path() === '/' ? '/' : '/' . request()->path();
      $seo = null;
      if (class_exists(\App\Models\Seo::class)) {
          $seo = \App\Models\Seo::where('url', request()->path())
                                ->orWhere('url', $currentPath)
                                ->first();
      }
  @endphp
  
  <title>{{ $seo->meta_title ?? $title ?? 'Nuvana' }}</title>
  <meta name="description" content="{{ $seo->meta_description ?? 'Nuvana' }}">
  <meta name="keywords" content="{{ $seo->meta_keywords ?? '' }}">
  
  @if($seo)
    @if($seo->canonical_url)<link rel="canonical" href="{{ $seo->canonical_url }}">@endif
    @if($seo->robots_meta)<meta name="robots" content="{{ $seo->robots_meta }}">@endif
    
    <!-- Open Graph -->
    @if($seo->og_title)<meta property="og:title" content="{{ $seo->og_title }}">@endif
    @if($seo->og_description)<meta property="og:description" content="{{ $seo->og_description }}">@endif
    @if($seo->og_image)<meta property="og:image" content="{{ asset('storage/' . $seo->og_image) }}">@endif
    
    <!-- Twitter -->
    @if($seo->twitter_title)<meta name="twitter:title" content="{{ $seo->twitter_title }}">@endif
    @if($seo->twitter_description)<meta name="twitter:description" content="{{ $seo->twitter_description }}">@endif
    @if($seo->twitter_image)<meta name="twitter:image" content="{{ asset('storage/' . $seo->twitter_image) }}">@endif
  @endif
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">

  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-animation.css') }}">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}?v={{ filemtime(public_path('assets/css/app.css')) }}">

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

  <!-- WhatsApp Start -->
  @if(!empty($general_setting->whatsapps[0]['value']))
    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $general_setting->whatsapps[0]['value']) }}" target="_blank"
      id="whatsapp-wrapper" class="whatsapp-wrapper">
      <i class="fa-brands fa-whatsapp"></i>
    </a>
  @endif

  <!-- Back To Top Start -->
  <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fa-light fa-chevron-up"></i></a>

  <!-- Mobile Menu Start -->
  <div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
      <span class="mobile-nav__close mobile-nav__toggler">
        <i class="fa fa-times text-white"></i></span>
      <div class="logo-box">
        <a href="index.html" aria-label="logo image"><img src="{{ asset('assets/media/logo/nuvana-logo.jpeg') }}"
            alt=""></a>
      </div>
      <div class="mobile-nav__container"></div>
      <ul class="mobile-nav__contact list-unstyled">
        @if(!empty($general_setting->emails[0]['value']))
          <li>
            <i class="fas fa-envelope"></i>
            <a href="mailto:{{ $general_setting->emails[0]['value'] }}">{{ $general_setting->emails[0]['value'] }}</a>
          </li>
        @endif
        @if(!empty($general_setting->phones[0]['value']))
          <li>
            <i class="fa fa-phone-alt"></i>
            <a
              href="tel:{{ preg_replace('/[^0-9+]/', '', $general_setting->phones[0]['value']) }}">{{ $general_setting->phones[0]['value'] }}</a>
          </li>
        @endif
      </ul>
      <div class="mobile-nav__social">
        @if(!empty($general_setting->social_media['facebook']))
          <a href="{{ $general_setting->social_media['facebook'] }}" target="_blank"><i class="fab fa-facebook"></i></a>
        @endif
        @if(!empty($general_setting->social_media['instagram']))
          <a href="{{ $general_setting->social_media['instagram'] }}" target="_blank"><i class="fab fa-instagram"></i></a>
        @endif
        @if(!empty($general_setting->social_media['x']))
          <a href="{{ $general_setting->social_media['x'] }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
        @endif
        @if(!empty($general_setting->social_media['linkedin']))
          <a href="{{ $general_setting->social_media['linkedin'] }}" target="_blank"><i class="fab fa-linkedin"></i></a>
        @endif
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
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      AOS.init({
        once: true,
        duration: 800,
        offset: 100,
        easing: 'ease-out-cubic'
      });
    });
  </script>

  @stack('scripts')

</body>

</html>

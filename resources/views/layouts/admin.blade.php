<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Nuvana' }}</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">

  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-animation.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

  <!-- Additional CSS for specific pages -->
  @stack('styles')
</head>

<body>
  @auth
    @if(auth()->user()->role === 'admin')
      <div class="admin-layout">
        <div class="sidebar">
          <h2>Admin Panel</h2>
          <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.banners.index') }}">Banners</a>
            <a href="{{ route('admin.products.index') }}">Products</a>
            <a href="{{ route('admin.trending-products.index') }}">Trending Products</a>
            <a href="{{ route('admin.seo.index') }}">SEO Management</a>
          </nav>
        </div>
        <div class="main-content">
          <div class="header">
            <div>Welcome, {{ auth()->user()->name }}</div>
            <form method="POST" action="{{ route('admin.logout') }}">
              @csrf
              <button type="submit" class="btn btn-danger">Logout</button>
            </form>
          </div>
          <div class="content">
            @yield('content')
          </div>
        </div>
      </div>
    @else
      @yield('content')
    @endif
  @else
    @yield('content')
  @endauth


  <!-- Jquery Js -->
  <script src="{{ asset('assets/js/vendor/jquery-3.6.3.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/slickAnimation.js') }}"></script>
  <script src="{{ asset('assets/js/admin.js') }}"></script>

  @stack('scripts')

</body>

</html>

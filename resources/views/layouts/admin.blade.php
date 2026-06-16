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
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

  <!-- Additional CSS for specific pages -->
  @stack('styles')
</head>

<body>
  <div class="admin-layout">

    @auth
      @if(auth()->user()->role === 'admin')

        <!-- Mobile menu button -->
        <button class="mobile-menu-toggle" id="mobileMenuToggle">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 12h18M3 6h18M3 18h18" />
          </svg>
        </button>

        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
          <div class="sidebar-header">
            <h2>Admin Panel</h2>
            <button class="sidebar-close" id="sidebarClose">&times;</button>
          </div>

          <div class="user-info-mobile">
            <div class="user-avatar">
              {{ substr(auth()->user()->name, 0, 2) }}
            </div>
            <div class="user-details">
              <strong>{{ auth()->user()->name }}</strong>
              <small>{{ auth()->user()->role }}</small>
            </div>
          </div>

          <nav class="sidebar-nav">
            <a href="{{ route('admin.dashboard') }}"
              class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
              <svg class="nav-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                <polyline points="9 22 9 12 15 12 15 22" />
              </svg>
              <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.banners.index') }}"
              class="nav-item {{ request()->routeIs('admin.banners.*') ? 'active' : '' }}">
              <svg class="nav-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                <line x1="8" y1="21" x2="16" y2="21" />
                <line x1="12" y1="17" x2="12" y2="21" />
              </svg>
              <span>Banners</span>
            </a>

            <a href="{{ route('admin.products.index') }}"
              class="nav-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
              <svg class="nav-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <path d="M16 10a4 4 0 0 1-8 0" />
              </svg>
              <span>Products</span>
            </a>

            <a href="{{ route('admin.trending-products.index') }}"
              class="nav-item {{ request()->routeIs('admin.trending-products.*') ? 'active' : '' }}">
              <svg class="nav-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M2 20L22 20" />
                <path d="M4 16L7 9L12 13L17 7L20 11" />
              </svg>
              <span>Trending Products</span>
            </a>

            <a href="{{ route('admin.seo.index') }}"
              class="nav-item {{ request()->routeIs('admin.seo.*') ? 'active' : '' }}">
              <svg class="nav-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <circle cx="12" cy="12" r="3" />
                <path
                  d="M19.4 15a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H5.78a1.65 1.65 0 0 0-1.51 1 1.65 1.65 0 0 0 .33 1.82l.03.03A10 10 0 0 0 12 17.66a10 10 0 0 0 6.37-2.63z" />
              </svg>
              <span>SEO Management</span>
            </a>
          </nav>

          <div class="sidebar-footer">
            <form method="POST" action="{{ route('admin.logout') }}">
              @csrf
              <button type="submit" class="logout-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                  <polyline points="16 17 21 12 16 7" />
                  <line x1="21" y1="12" x2="9" y2="12" />
                </svg>
                Logout
              </button>
            </form>
          </div>
        </aside>

        <!-- Overlay for mobile -->
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <!-- Main Content -->
        <main class="main-content">
          <header class="header">
            <div class="header-left">
              <h4 class="welcome-text">
                Welcome back, <span>{{ auth()->user()->name }}</span>
              </h4>
            </div>
            <div class="header-right">
              <div class="user-dropdown">
                <div class="user-avatar small">
                  {{ substr(auth()->user()->name, 0, 2) }}
                </div>
                <div class="user-info">
                  <strong>{{ auth()->user()->name }}</strong>
                  <small>{{ auth()->user()->email }}</small>
                </div>
              </div>
            </div>
          </header>

          <div class="content-wrapper">
            <div class="container">
              @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif

              @if(session('error'))
                <div class="alert alert-error">
                  {{ session('error') }}
                </div>
              @endif

              @yield('content')
            </div>
          </div>
        </main>

      @else
        @yield('content')
      @endif
    @endauth
  </div>

  <!-- Jquery Js -->
  <script src="{{ asset('assets/js/vendor/jquery-3.6.3.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/slickAnimation.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>
  <script src="{{ asset('assets/js/admin.js') }}"></script>

  @stack('scripts')
</body>

</html>

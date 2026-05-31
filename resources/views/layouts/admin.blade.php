<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - {{ config('app.name', 'Laravel') }}</title>
    <style>
        body { font-family: system-ui, -apple-system, sans-serif; background-color: #f3f4f6; margin: 0; }
        .admin-layout { display: flex; min-height: 100vh; }
        .sidebar { width: 250px; background-color: #1f2937; color: white; padding: 20px; }
        .sidebar a { color: #d1d5db; text-decoration: none; display: block; padding: 10px 0; }
        .sidebar a:hover { color: white; }
        .main-content { flex: 1; display: flex; flex-direction: column; }
        .header { background-color: white; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: center;}
        .content { padding: 20px; }
        .btn { padding: 8px 16px; background-color: #3b82f6; color: white; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; }
        .btn:hover { background-color: #2563eb; }
        .btn-danger { background-color: #ef4444; }
        .btn-danger:hover { background-color: #dc2626; }
        .card { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 4px; }
        .text-danger { color: #ef4444; font-size: 0.875rem; }
    </style>
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
</body>
</html>

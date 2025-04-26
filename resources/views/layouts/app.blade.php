<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Epic App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            background: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #0d6efd;
            padding-top: 1rem;
            position: fixed;
            transition: all 0.3s;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 1rem;
            text-decoration: none;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
            border-left: 4px solid #fff;
        }
        .sidebar .active {
            background: rgba(255,255,255,0.2);
        }
        .content {
            margin-left: 250px;
            padding: 2rem;
            transition: margin-left 0.3s;
        }
        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .glow-button:hover {
            box-shadow: 0 0 10px #0d6efd, 0 0 20px #0d6efd, 0 0 30px #0d6efd;
            transition: 0.3s;
        }
    </style>

</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center text-white mb-4">Laravel Chesda 🚀</h4>
        <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}"><i class="bi bi-telephone-fill me-2"></i> Contact</a>
        <a href="/profile" class="{{ request()->is('profile') ? 'active' : '' }}"><i class="bi bi-person-circle me-2"></i> Profile</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item dropdown me-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-2"></i>{{ Auth::user()->name ?? 'Guest' }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

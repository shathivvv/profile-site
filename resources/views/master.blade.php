
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Personal Profile')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    
    <style>
        :root {
            --midnight: #203653;
            --navy: #315a86;
            --blue: #527fae;
            --ice: #dce9f7;
            --soft-white: #f5f7fa;
            --white: #ffffff;
            --text: #29384a;
            --muted: #69788b;
            --border: #e1e7ef;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--soft-white);
            color: var(--text);
        }

        .navbar {
            background: var(--midnight);
            padding: 14px 0;
            box-shadow: 0 3px 14px rgba(32, 54, 83, 0.12);
        }

        .navbar-brand {
            color: var(--white) !important;
            font-weight: 700;
            font-size: 1.35rem;
            letter-spacing: 0.3px;
        }

        .navbar .nav-link {
            color: #E5EEFA;
            margin-left: 8px;
            transition: color 0.2s ease;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: #bcd3ee;
        }

        .navbar .nav-link.active {
            font-weight: 700;
        }

        .page-content {
            flex: 1;
            padding: 52px 0;
        }

        .accent {
            color: var(--navy);
        }

        .profile-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: 0 5px 18px rgba(32, 54, 83, 0.06);
            transition: transform 0.25s ease,
                        box-shadow 0.25s ease;
        }

        .profile-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 9px 22px rgba(32, 54, 83, 0.1);
        }

        .btn-profile {
            background: var(--navy);
            color: var(--white);
            border: 1px solid var(--navy);
            border-radius: 8px;
            padding: 10px 20px;
            transition: background-color 0.2s ease,
                        transform 0.2s ease;
        }

        .btn-profile:hover {
            background: var(--midnight);
            border-color: var(--midnight);
            color: var(--white);
            transform: translateY(-1px);
        }

        .btn-outline-secondary {
            border-radius: 8px;
        }

        .profile-initials {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(
                135deg,
                var(--midnight),
                var(--navy),
                #8eafd3
            );
            color: var(--white);
            font-size: 3.2rem;
            font-weight: 700;
            letter-spacing: 2px;
            border: 4px solid var(--white);
            box-shadow: 0 7px 18px rgba(32, 54, 83, 0.16);
        }

        .profile-initials-small {
            width: 64px;
            height: 64px;
            font-size: 1.4rem;
            border-width: 2px;
        }

        .member-name {
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .form-control {
            border: 1px solid #d6dfeb;
            border-radius: 8px;
            padding: 11px 13px;
        }

        .form-control:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(82, 127, 174, 0.16);
        }

        footer {
            background: var(--midnight);
            color: var(--white);
            padding: 22px 20px;
        }

        .badge.text-bg-light {
            background: #eaf1f9 !important;
            color: var(--midnight) !important;
            border: 1px solid #dce6f2 !important;
        }

        h1, h2, h3, h4, h5 {
            color: var(--text);
        }

        .skip-link {
            position: absolute;
            top: -48px;
            left: 12px;
            z-index: 1100;
            padding: 8px 12px;
            background: var(--white);
            color: var(--midnight);
            border-radius: 6px;
        }

        .skip-link:focus {
            top: 12px;
        }

        @media (max-width: 575.98px) {
            .page-content {
                padding: 38px 0;
            }
        }

        ::selection {
            background: var(--navy);
            color: var(--white);
        }
    </style>

</head>

<body>

    <a class="skip-link" href="#main-content">Skip to content</a>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                MyProfile.
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           href="{{ route('home') }}"
                           @if(request()->routeIs('home')) aria-current="page" @endif>Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                           href="{{ route('about') }}"
                           @if(request()->routeIs('about')) aria-current="page" @endif>About Me</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                           href="{{ route('contact') }}"
                           @if(request()->routeIs('contact')) aria-current="page" @endif>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="main-content" class="page-content">
        @yield('content')
    </main>

    <footer class="text-center">
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} My Personal Profile</p>
            <small>Designed with Laravel and Bootstrap</small>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

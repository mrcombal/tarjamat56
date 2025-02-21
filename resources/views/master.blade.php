<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjamat | Crafting words, brdiging worlds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <header class="sticky-top text-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{route('website.index')}}">
                    <img src="{{asset('images/tarjamat-logo.svg')}}" alt="Tarjamat Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item {{ (request()->routeIs('website.index')) ? 'active' : ''  }}"><a class="nav-link text-white" href="{{route('website.index')}}">Home</a></li>
                        <li class="nav-item {{ (request()->routeIs('website.about')) ? 'active' : ''  }}"><a class="nav-link text-white" href="{{route('website.about')}}">About</a></li>
                        <li class="nav-item {{ (request()->routeIs('website.services')) ? 'active' : ''  }}"><a class="nav-link text-white" href="{{route('website.services')}}">Services</a></li>
                        <li class="nav-item {{ (request()->routeIs('website.contact')) ? 'active' : ''  }}"><a class="nav-link text-white" href="{{route('website.contact')}}">Contact</a></li>
                        <li class="nav-item login"><a class="nav-link text-white" href="{{url('https://app.arabictarjamat.com/')}}" target="_blank">Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>


    <footer class="d-flex justify-content-between align-items-center py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank" class="mx-2">
                    <i class="fab fa-facebook-f fa-2x"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="mx-2">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="mx-2">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="https://tiktok.com" target="_blank" class="mx-2">
                    <i class="fab fa-tiktok fa-2x"></i>
                </a>
            </div>
            <p class="text-muted mb-0">&copy; 2024 Tarjamat. All rights reserved.</p>
            <div>
                <img src="{{asset('images/tarjamat-logo-colored.svg')}}" alt="Tarjamat Logo" class="footer-logo">
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('scripts')
</body>
</html>

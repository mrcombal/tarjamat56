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
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <style>
    	main p, h2, h3 {text-align: right;}
    	p, h1, h2, h3, h4, li, a, div {
 			font-family: "Cairo", sans-serif !important;
			font-optical-sizing: auto;
			font-style: normal;
			font-variation-settings:
			"slnt" 0;
		}

 		.service, .service-title, p {
 			line-height: normal !important;
 		}
 		.hero-section p.lead {
 			font-weight: 300;
		}
		.hero-section .display-5 {
			font-size: 2.5rem;
		}

    </style>
    @yield('css')
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
                    <ul class="navbar-nav ms-auto" dir="rtl" style="padding-right:0;">
                        <li class="nav-item {{ (request()->routeIs('website.ar.index')) ? 'active' : ''  }}"><a class="nav-link text-white" href="{{route('website.ar.index')}}">الرئيسية</a></li>
                        <li class="nav-item {{ (request()->routeIs('website.ar.about')) ? 'active' : ''  }}"><a class="nav-link text-white" href="{{route('website.ar.about')}}">من نحن</a></li>
                        <li class="nav-item {{ (request()->routeIs('website.ar.services')) ? 'active' : ''  }}"><a class="nav-link text-white" href="{{route('website.ar.services')}}">خدماتنا</a></li>
                        <li class="nav-item {{ (request()->routeIs('website.ar.contact')) ? 'active' : ''  }}"><a class="nav-link text-white" href="{{route('website.ar.contact')}}">اتصل بنا</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('website.' . collect(explode('.', request()->route()->getName()))->last()) }}">English</a></li>
                        <li class="nav-item login"><a class="nav-link text-white" href="{{url('https://app.arabictarjamat.com/')}}" target="_blank">دخول</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>


    <footer class="d-flex justify-content-between align-items-center py-4" dir="rtl">
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
			<p class="text-muted mb-0">&copy; 2025 ترجمات. جميع الحقوق محفوظة.</p>
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

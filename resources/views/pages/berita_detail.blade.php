<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Coco onepage themeforest" />
    <meta name="author" content="" />

    <link rel="icon" href="" />
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link href="{{ url('https://fonts.googleapis.com/css?family=Overpass:300,400,500|Dosis:400,700') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/open-iconic-bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.carousels.min.css">
    <link rel="stylesheet" href="{{ url('css/bootstraps.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousels.min.css') }}">

    <!-- Title  -->
    <title>Base Inkubator</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('Image/' . $abouts->logo) }}" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <script src="{{ url('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ url('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ url('js/poppers.min.js') }}"></script>
    <script src="{{ url('js/bootstraps.min.js') }}"></script>
    <script src="{{ url('js/scrollIt.min.js') }}"></script>
    <script src="{{ url('js/jquery.waypointss.min.js') }}"></script>
    <script src="{{ url('js/owl.carousels.min.js') }}"></script>
    <script src="{{ url('js/jquery.magnific-popups.min.js') }}"></script>
    <script src="{{ url('js/jquery.stellars.min.js') }}"></script>
    <script src="{{ url('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('js/YouTubePopUp.jquery.js') }}"></script>
    <script src="{{ url('js/validator.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>

    <style>
        .navbar .navbar-nav .nav-link {
            color: rgb(0, 0, 0);
        }
    </style>
</head>

<nav class="navbar navbar-expand-lg" style="background-color: #beef00">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="#" style="color: aliceblue">
            <img src="{{ url('Image/' . $abouts->logo) }}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/berita">Berita</a>
                    </li>

                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class='bx bx-log-in'></i>
                                {{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('brand.allbrand') }}">Brand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile/{{ auth()->user()->id }}" role="button"><i
                                class='bx bx-user'></i>
                            {{ __('Account') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="" class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i
                                class='bx bx-log-out'></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<section id="portfolio-details" class="portfolio-details" style="margin-top: 2rem;margin-bottom:4rem;">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/berita" style="color: #1A237E; font-weight:500">All Berita</a>
                </li>
                <li class="breadcrumb-item active text-capitalize" aria-current="page">{{ $berita->judul }}</li>
            </ol>
        </nav>
        <div class="row ">
            <div class="col-lg-12 col-md-6">
                <div class=" d-flex justify-content-center">
                    <img src="{{ url('Image/' . $berita->gambar) }}" style="max-width: 50%; height:auto"
                        alt="">
                </div>

                <div class="portfolio-description mt-3">
                    <h2>{{ $berita->judul }}</h2><br>
                    <p class="text-justify">
                        {!! $berita->isi !!}
                    </p> <span style="color: #1A237E">By: Admin.</span> {{ $berita->created_at->format('l, j F Y') }}
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')

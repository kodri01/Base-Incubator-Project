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

        .bg-container {
            background-image: url("img/wave3.svg");
            width: 100%;
            height: 100%;
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
                        <a class="nav-link active" href="{{ route('brand.allbrand') }}">Brand</a>
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


{{-- <div class="item bg-img" data-background="img/wave3.svg" style="background-image: url('img/wave3.svg')"> --}}
<svg class=" position-absolute" id="visual" viewBox="0 0 1530 980" width="1530" height="980"
    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
    <rect x="0" y="0" width="1530" height="980" fill="#beef00"></rect>
    <path
        d="M611 0L608.5 21.5C606 43 601 86 584.2 128.8C567.3 171.7 538.7 214.3 488.5 257.2C438.3 300 366.7 343 359.3 385.8C352 428.7 409 471.3 416.2 514.2C423.3 557 380.7 600 398.7 642.8C416.7 685.7 495.3 728.3 542.5 771.2C589.7 814 605.3 857 613.2 878.5L621 980L0 980L0 878.5C0 857 0 814 0 771.2C0 728.3 0 685.7 0 642.8C0 600 0 557 0 514.2C0 471.3 0 428.7 0 385.8C0 343 0 300 0 257.2C0 214.3 0 171.7 0 128.8C0 86 0 43 0 21.5L0 0Z"
        fill="#ff0028" stroke-linecap="round" stroke-linejoin="miter"></path>
</svg>
<section class="works" style="margin-bottom:2.15rem;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 " style="margin-right: -3rem">
                <div class=" d-flex justify-content-end" style="width: 300px">
                    <img src="{{ url('Image/' . $user->logo) }}" style="width: 200px" alt=""
                        class="rounded-circle" />
                </div>
            </div>
            <div class="col-8 ">
                <div style="margin-top: 6rem">
                    <p class=" font-weight-bold text-white text-capitalize" style="font-size: 25px;">
                        {{ $user->name_brand }}</p>
                    <p class="text-white text-capitalize" style="margin-top: -20px"><i
                            class=" bx bxs-map text-white"></i>{{ $user->domisili }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 text-white">
                <div class="mt-5 mb-3 ml-5" style="width: 300px">
                    <span class="text-capitalize"><i class=" bx bxs-user "></i> {{ $user->name }}</span>
                </div>
                <div class="mt-5 mb-3 ml-5" style="width: 300px">
                    <span class="text-capitalize"><i class=" bx bxs-map text-white "></i>
                        {{ $user->alamat }}</span>
                </div>
                <div class="mt-5 mb-3 ml-5" style="width: 300px">
                    <span><i class=" bx bx-phone "></i> {{ $user->phonenumber }}</span>
                </div>
                <div class="mt-5 mb-3 ml-5" style="width: 300px">
                    <span><i class=" bx bx-envelope text-white"></i> {{ $user->email }}</span>
                </div>

                <div class="mb-3 ml-5" style="width: 300px; margin-top:4rem">
                    <a href="{{ route('pages.editprofile', $user->id) }}" class="butn butn-bg">
                        <span><i class="bx bxs-edit"></i> Product</span>
                    </a>
                </div>




            </div>
            <div class="col-9">
                <div class="card" style="margin-left: -50px; background-color:transparent;">
                    <div class="row g-0">
                        <div class="col-md-7 border-end">
                            <div class="d-flex flex-column justify-content-start">

                                <div class="main_image">

                                    <img src="{{ url('Image/' . $user->image) }}" id="main_product_image">
                                </div>
                                <div class="thumbnail_images">
                                    <ul id="thumbnail">
                                        <li><img style="width: 180px; height:130px" onclick="change(this.src)"
                                                src="{{ url('Image/' . $user->image) }}" style="object-fit: contain">
                                        </li>
                                        <li><img style="width: 180px; height:130px" onclick="change(this.src)"
                                                src="{{ url('Image/' . $user->image2) }}">
                                        </li>
                                        <li><img style="width: 180px; height:130px" onclick="change(this.src)"
                                                src="{{ url('Image/' . $user->image3) }}">
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <script type="text/javascript">
                                const change = src => {
                                    document.getElementById('main_product_image').src = src
                                }
                            </script>
                        </div>
                        <div class="col-md-5">
                            <div class="p-3 right-side">
                                <span for="" class=" text-dark-gray">Nama Brand:</span>
                                <span class="heart" style="margin-left: 15rem"><i class=' bx bx-heart'></i></span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="text-uppercase fs-3 fw-bolder"
                                        style="font-weight: 900; font-size:25px;">{{ $user->name_brand }}</label>
                                </div>
                                <span class="mt-5 text-dark-gray" for="">Kisah Brand:</span>
                                <div class="pr-3 ">
                                    <label style=" font-size:15px;"
                                        class="text-capitalize text-justify">{{ $user->cerita }}</label>
                                </div>
                                <span class="mt-5 text-dark-gray" for="">Tahun Berdiri:</span>
                                <div class="pr-3 ">
                                    <label style=" font-size:15px;"
                                        class="text-capitalize text-justify">{{ $user->tahun }}</label>
                                </div>
                                <span class="mt-5 text-dark-gray" for="">Domisili:</span>
                                <div class="pr-3 ">
                                    <label style=" font-size:15px;"
                                        class="text-capitalize text-justify">{{ $user->domisili }}</label>
                                </div>
                                <span class="mt-5 text-dark-gray" for="">Link Marketplace:</span>
                                <div class="pr-3">
                                    <a href="{{ $user->link }}" style=" font-size:15px;" class="text-justify"><i
                                            class='bx bxl-internet-explorer'></i>{{ $user->link }}
                                    </a>
                                </div>
                                <div style="margin-top: 3rem">

                                    <span class="mt-5 text-dark-gray" for="">Deskripsi Produk:</span>
                                    <div class="pr-3 ">
                                        <label style=" font-size:15px;"
                                            class="text-capitalize text-justify">{{ $user->description }}</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
{{-- </div> --}}
@include('layouts.footer')

@extends('layouts.master')
@section('content')
    <style>
        .navbar .navbar-nav .nav-link {
            color: rgb(0, 0, 0);
        }
    </style>


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

    <div class="item bg-img" data-background="img/wave3.svg" style="margin-top: 5rem; ">
        <section class="works blog">
            <div class="container">
                <div class="row">

                    <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6" style="margin-top: 2rem">
                        <h4><span>All</span> Brands</h4>
                        <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                            design & web development services.</p>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="clearfix"></div>
                    <!-- gallery -->
                    <div class="gallery full-width item">
                        @forelse ($brand as $brand)
                            <!-- gallery item -->
                            <div class="col-lg-2 col-md-6 items post-img">

                                <a href="{{ route('brand.show', $brand->id) }}">
                                    <div class=" column">
                                        <div class="img d-flex justify-content-center" style="width: 300px;">
                                            <figure><img src="{{ url('Image/' . $brand->logo) }}" style="width: 200px"
                                                    alt="" class="rounded-circle" /></figure>
                                            <span><label for=""
                                                    style="color: whitesmoke; text-shadow: 2px 1px 2px rgba(0, 0, 0, 1);">{{ $brand->name_brand }}</label></span>
                                        </div>
                                    </div>
                                    {{-- <div class="hover01 column">
                                <div>
                                    <figure><img class=" align-content-center"
                                            src="{{ url('Image/' . $brand->logo) }}" style="width: 300px;" />
                                    </figure>
                                    <span><label for=""
                                            style="color: whitesmoke; text-shadow: 0px -1px 3px rgba(0, 0, 0, 1);">{{ $brand->name_brand }}</label></span>
                                </div>
                            </div> --}}
                                </a>
                            </div>
                        @empty
                            <h3 class="container-fluid d-flex justify-content-center">Brand Tidak Ada</h3>
                        @endforelse
                    </div>


                    {{-- @forelse ($packages as $package)
                    @forelse ($join as $package)
                        <!-- gallery item -->
                        <div class="col-lg-3 col-md-6 items {{ $package->name }}">
                            <div class="item-img">
                                <img src="{{ url('Image/' . $package->image) }}" alt="image">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <a href="{{ route('packages.show', $package->id) }}">
                                            <p>{{ $package->title }}</p>
                                            <a
                                                href="{{ route('packages.show', $package->id) }}">{{ $package->title }}</a>
                                            <h6>{!! Str::limit($package->description, 25) !!}</h6>
                                            <p><i class='bx bxs-detail'></i> detail</p>
                                            <a href="{{ route('packages.show', $package->id) }}{{ url('Image/' . $package->image) }}"
                                                class="btn" style=""><i class='bx bxs-show'></i> Show
                                                Item</a>
                                        </a>
                                        <div style="margin-top: 10rem" class="d-flex justify-content-center">
                                            <a href="{{ route('packages.show', $package->id) }}"
                                                class="butn butn-bg">
                                                <span><i class="bx bx-show"></i> Show Item</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        <h3 class="container-fluid d-flex justify-content-center">Product Tidak Ada</h3>
                    @endforelse --}}

                </div>
            </div>
    </div>
    </section>
    </div>
@endsection

{{-- @include('layouts.footer') --}}

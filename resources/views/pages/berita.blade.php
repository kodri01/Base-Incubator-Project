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
    <div class="item bg-img" data-background="img/wave3.svg" style="margin-top: 5rem; ">
        <section class="blog">
            <div class="container-fluid">
                <div class="row">

                    <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6" style="margin-top: 2rem">
                        <h4><span>All</span> News</h4>
                        <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                            design & web development services.</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    @forelse ($berita as $berita)
                        <div class="col-lg-3">
                            <div class="item mb-md50">
                                <div class="post-img">
                                    <div class="img">
                                        <img src="{{ url('Image/' . $berita->gambar) }}"
                                            style="width: 400px; height: 200px; overflow: hidden;" alt="">
                                    </div>
                                </div>
                                <div class="cont">
                                    <div class="info">
                                        <a href="#0">By : Admin</a>
                                        <a href="#0">{{ $berita->created_at->format('j F Y') }}</a>
                                        {{-- <a href="#0" class="tag">Kodri</a> --}}
                                    </div>
                                    <h6><a href="#0">{{ $berita->judul }}</a></h6>
                                    <p>{!! Str::limit($berita->isi, 150) !!}</p>
                                    <a href="{{ route('beritas.show', $berita->id) }}" class="more">Read More <i
                                            class='bx bx-chevrons-right'></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3 class="container-fluid d-flex justify-content-center">Berita Tidak Ada</h3>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
@endsection

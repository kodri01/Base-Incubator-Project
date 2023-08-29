@extends('layouts.master')
@section('content')
    <header class="header pos-re slider-fade" data-scroll-index="0">

        <div class="owl-carousel owl-theme">
            <div class="item bg-img" data-overlay-dark="5" data-background="img/bg4.jpg">
                <div class="text-center v-middle caption mt-30">
                    {{-- <h4>We Are</h4> --}}
                    <h1>BRAND LOKAL HEBAT</h1>
                    <div class="row">
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use
                                digital design & web development services.</p>
                        </div>
                    </div>
                    @guest

                        <a href="{{ route('login') }}" class="butn butn-light mt-30">
                            <span>Gabung Dengan Kami</span>
                        </a>
                    @endguest
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="img/bg1.jpg">
                <div class="text-center v-middle caption mt-30">
                    {{-- <h4>We Are</h4> --}}
                    <h1>BRAND LOKAL HEBAT</h1>
                    <div class="row">
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use
                                digital design & web development services.</p>
                        </div>
                    </div>
                    @guest
                        <a href="{{ route('login') }}" class="butn butn-light mt-30">
                            <span>Gabung Dengan Kami</span>
                        </a>
                    @endguest
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="img/bg2.jpg">
                <div class="text-center v-middle caption mt-30">
                    {{-- <h4>We Are</h4> --}}
                    <h1>BRAND LOKAL HEBAT</h1>
                    <div class="row">
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use
                                digital design & web development services.</p>
                        </div>
                    </div>
                    @guest

                        <a href="{{ route('login') }}" class="butn butn-light mt-30">
                            <span>Gabung Dengan Kami</span>
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </header>

    <div class="item bg-img" data-background="img/wave3.svg">
        @guest
            <section class="hero" data-scroll-index="1">
                {{-- <div class="item bg-img" data-background="img/wave.svg" style="width: 100%; height:auto"> --}}
                <div class="section-padding pos-re">
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 d-flex justify-content-between">
                                <div class="col-6">
                                    <h2 class="extra-title  text-uppercase" style="font-size: 70px">Kenapa <span>Brand</span>
                                        Lokal?
                                    </h2>
                                    <label class="" style="font-size: 23px; margin-top:3rem" for="">Karena
                                        Brand Lokal itu
                                        keren, karena itu
                                        identitas kita
                                        sebagai kreator,
                                        sebagai pemilik, sebagai bangsa yang bangga akan produk dalam negeri.

                                    </label>
                                    <label class=" mt-5" style="font-size: 23px" for=""> Gekrafs kepri
                                        mendukung
                                        kamu untuk majukan marwah brand lokal agar tidak kalah
                                        bersaing di
                                        negeri sendiri.
                                    </label>

                                </div>

                                <div class="col-5">
                                    <div>
                                        <img src="{{ url('img/img.svg') }}" class=" float-end" alt="" srcset="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </section>

        @endguest

        <section class="works blog section-padding" data-scroll-index="2">
            {{-- <div class="item bg-img" data-background="img/wave2.svg"> --}}
            <div class="container">
                <div class="row">

                    <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                        <h4><span>Brand</span> Kami</h4>
                    </div>
                </div>
            </div>
            @guest
                <div class="container">
                    <div class="row">
                        <div class="clearfix"></div>
                        <!-- gallery -->
                        <div class=" gallery full-width item ">
                            @forelse ($brand as $brand)
                                <!-- gallery item -->
                                <div class="col-lg-3 col-md-6 items d-flex align-content-center post-img">

                                    <a href="{{ route('brand.show', $brand->id) }}">
                                        <div class=" column">
                                            <div class="img d-flex justify-content-center" style="width: 300px; height:auto;">
                                                <figure><img src="{{ url('Image/' . $brand->logo) }}" style="width: 200px"
                                                        alt="" class="rounded-circle" /></figure>
                                                <span><label for=""
                                                        style="color: whitesmoke; text-shadow: 2px 1px 2px rgba(0, 0, 0, 1); text-transform:capitalize">{{ $brand->name_brand }}</label></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            @empty
                                <h3 class="container-fluid d-flex justify-content-center">Brand Tidak Ada</h3>
                            @endforelse

                        </div>
                    </div>
                </div>

            @endguest
            @auth
                <div class="container-fluid">
                    <div class="row">
                        <div class="clearfix"></div>
                        <!-- gallery -->

                        <div class=" gallery full-width item ">
                            @forelse ($brands as $brand)
                                <!-- gallery item -->
                                <div class="col-lg-2 col-md-6 items  post-img">

                                    <a href="{{ route('brand.show', $brand->id) }}">
                                        <div class=" column">
                                            <div class="img d-flex justify-content-center" style="width: 300px; height:auto">
                                                <figure><img src="{{ url('Image/' . $brand->logo) }}" style="width: 200px"
                                                        alt="" class="rounded-circle" /></figure>
                                                <span><label for=""
                                                        style="color: whitesmoke; text-shadow: 2px 1px 2px rgba(0, 0, 0, 1);text-transform:capitalize">{{ $brand->name_brand }}</label></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            @empty
                                <h3 class="container-fluid d-flex justify-content-center">Brand Tidak Ada</h3>
                            @endforelse

                        </div>
                        <div class="container mt-3">
                            <span class="d-flex justify-content-end"><a href="{{ route('brand.allbrand') }}"><i
                                        class='bx bx-chevrons-right'></i> Semua Brand...</a></span>
                        </div>


                    </div>
                </div>
            @endauth
            {{-- </div> --}}
        </section>

        <section class="blog section-padding" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                        <h4>Berita <span>dan</span> Events</h4>
                        {{-- <h4><span>Berita dan</span> Events</h4> --}}

                    </div>
                    @forelse ($berita->take(12) as $berita)
                        <div class="col-lg-4">
                            <div class="item mb-md50">
                                <div class="post-img">
                                    <div class="img">
                                        <img src="{{ url('Image/' . $berita->gambar) }}" alt="">
                                    </div>
                                </div>
                                <div class="cont">
                                    <div class="info">
                                        <a href="#0">By : Admin</a>
                                        <a href="#0">{{ $berita->created_at->format('j F Y') }}</a>
                                        {{-- <a href="#0" class="tag">Kodri</a> --}}
                                    </div>
                                    <h6><a href="#0">{{ $berita->judul }}</a></h6>
                                    <p>{!! Str::limit($berita->isi, 200) !!}</p>
                                    <a href="{{ route('beritas.show', $berita->id) }}" class="more">Read More <i
                                            class='bx bx-chevrons-right'></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3 class="container-fluid d-flex justify-content-center">Berita Tidak Ada</h3>
                    @endforelse
                </div>
                <div class="container-fluid mt-3">
                    <span class="d-flex justify-content-end"><a href="/berita"><i class='bx bx-chevrons-right'></i> More
                            Berita...</a></span>
                </div>
            </div>
        </section>


        <section class="testimonials section-padding bg-img bg-fixed pos-re">
            <div class="container">
                <div class="row">

                    <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                        <h4>Apa <span>Kata</span> Mereka</h4>
                        {{-- <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p> --}}
                    </div>

                    <div class="owl-carousel owl-theme text-center col-lg-10 offset-lg-1">
                        @forelse  ($opini->take(7) as $opini)
                            <div class="item-box">
                                <span class="quote">
                                    <img src="img/quot.png" alt="">
                                </span>
                                <p class="text-black">{{ $opini->opinion }}
                                </p>
                                <div class="info">
                                    <div class="author-img">
                                        <img src="{{ url('Image/' . $opini->gambar) }}" alt="">
                                    </div>
                                    <div class="cont">
                                        <h6>{{ $opini->nama }}</h6>
                                        <span>Member</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h3 class="container-fluid d-flex justify-content-center">Tidak Ada Opini Member</h3>
                        @endforelse
                    </div>

                </div>
            </div>

        </section>

        @guest
            <section class="call-action section-padding mt-10 bg-img bg-fixed">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2 style="margin-bottom:5rem " class="text-white font-weight-bold">Kolaborasi Bersama Kami
                                </h2>
                                <a href="mailto:{{ $abouts->email }}" class="butn butn-bg">
                                    <span>Get Started</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endguest

        <section class="team section-padding" data-scroll-index="4">
            <div class="container">
                <div class="row">

                    <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                        <h4><span>Siapa</span> Kami?</h4>
                        <p class=" text-capitalize">Inkubator BASE adalah inkubasi startup pertama di Batam yang berfokus
                            pada teknologi startup pre-seed. Tujuan program kami adalah untuk mendukung pengembangan
                            ekosistem digital regional dan menciptakan solusi untuk masalah lokal melalui teknologi</p>
                    </div>

                    <div class="owl-carousel owl-theme">
                        @forelse  ($strukturs->take(7) as $value)
                            <div class="item">
                                <div class="team-img">
                                    <img src="{{ url('Image/' . $value->gambar) }}" style="height: 300px"
                                        alt="">
                                    <div class="social">
                                        <a href="{{ $value->facebook }}" class="icon">
                                            <i class="bx bxl-facebook-circle"></i>
                                        </a>
                                        <a href="{{ $value->twitter }}" class="icon">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                        <a href="{{ $value->instagram }}" class="icon">
                                            <i class="bx bxl-instagram-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h6>{{ $value->nama }}</h6>
                                    <span>{{ $value->jabatan }}</span>
                                </div>
                            </div>
                        @empty
                            <h3 class="container-fluid d-flex justify-content-center">Tidak Ada Struktur</h3>
                        @endforelse
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection

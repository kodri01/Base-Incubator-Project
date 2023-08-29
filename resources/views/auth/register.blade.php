@extends('layouts.app')

@section('content')
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: auto !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #acacae;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            /* background: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg') */
        }

        .bg-indigo {
            /* background-color: #4835d4; */
            background-color: #f7ca44d9;

        }


        @media (min-width: 992px) {
            .card-registration-2 .bg-indigo {
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-indigo {
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;

            }
        }
    </style>
    {{-- style="background-image: url('/public/images/bg_2.jpg')" --}}


    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
        @csrf
        <section class="h-100 h-custom gradient-custom-2">
            <div class="container py-5 h-85">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="container-fluid py-5">
                        <div class="card card-registration card-registration-2 pb-5"
                            style="border-radius: 15px; height:auto; margin-top:-3rem">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-4 text-center" style="color:black;">General Infomation
                                            </h3>

                                            <div class="">
                                                <div class=" mb-2 pb-2">

                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplev2">Nama Lengkap</label>
                                                        <input type="text" id="form3Examplev2"
                                                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" required
                                                            autocomplete="name" autofocus />

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="mb-2 pb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">Alamat</label>
                                                    <input type="text" id="form3Examplev4"
                                                        class="form-control form-control-lg  @error('alamat') is-invalid @enderror"
                                                        name="alamat" value="{{ old('alamat') }}" required
                                                        autocomplete="alamat" />
                                                    @error('alamat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-2 pb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">Email</label>
                                                    <input type="email" id="form3Examplev4"
                                                        class="form-control form-control-lg  @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class=" mb-2 pb-2 mb-md-0 pb-md-0">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplev5">Nomor
                                                            Handphone</label>
                                                        <input type="text" value="{{ old('phoneNumber') }}"
                                                            id="form3Examplev5"
                                                            class="form-control form-control-lg @error('phonenumber') is-invalid @enderror"
                                                            name="phonenumber" required autocomplete="phonenumber"
                                                            autofocus />
                                                    </div>
                                                </div>

                                                <div class="mb-2 pb-2">
                                                    <div class="form-outline form-white">
                                                        <label class="form-label" for="form3Examplea2">Password</label>
                                                        <input type="password" id="form3Examplea2"
                                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password" />
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="mb-2 pb-2">
                                                    <div class="form-outline form-white">
                                                        <label class="form-label" for="form3Examplea3">Confirm
                                                            Password</label>
                                                        <input type="password" id="form3Examplea3"
                                                            class="form-control form-control-lg"
                                                            name="password_confirmation" required
                                                            autocomplete="new-password" />

                                                    </div>
                                                </div>
                                                <div class="mb-2 pb-2">
                                                    <div class="form-outline form-white">
                                                        <label class="form-label" for="form3Examplea2">Link
                                                            Marketplace</label>
                                                        <input type="url" id="form3Examplea2"
                                                            class="form-control form-control-lg @error('link') is-invalid @enderror"
                                                            name="link" required />
                                                        @error('link')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-4 text-center" style="color:black;">Brand Infomation
                                            </h3>

                                            <div class="">
                                                <div class=" mb-2 pb-2">

                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplev2">Nama Brand</label>
                                                        <input type="text" id="form3Examplev2"
                                                            class="form-control form-control-lg @error('name_brand') is-invalid @enderror"
                                                            name="name_brand" value="{{ old('name_brand') }}" required
                                                            autocomplete="name_brand" autofocus />

                                                        @error('name_brand')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="mb-2 pb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">Brand Logo</label>
                                                    <input type="file" id="form3Examplev4"
                                                        class="form-control   @error('logo') is-invalid @enderror"
                                                        name="logo" value="{{ old('logo') }}" required
                                                        autocomplete="logo" />
                                                    @error('logo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class=" mb-2 pb-2 mb-md-0 pb-md-0">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev5">Kisah Brand</label>
                                                    <textarea name="cerita" class="form-control form-control-lg @error('cerita') is-invalid @enderror" required
                                                        id="" cols="2" rows="2"></textarea>

                                                </div>
                                            </div>

                                            <div class="mb-2 pb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">Domisili</label>
                                                    <input type="text" id="form3Examplev4"
                                                        class="form-control form-control-lg  @error('domisili') is-invalid @enderror"
                                                        name="domisili" value="{{ old('domisili') }}" required
                                                        autocomplete="domisili" />
                                                    @error('domisili')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="mb-2 pb-2">
                                                    <div class="form-outline form-white">
                                                        <label class="form-label" for="form3Examplea2">Tahun
                                                            Berdiri</label>
                                                        <input type="number" id="form3Examplea2"
                                                            class="form-control form-control-lg @error('tahun') is-invalid @enderror"
                                                            name="tahun" required />
                                                        @error('tahun')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>



                                                <div class="mb-2 pb-2">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplev4">Gambar
                                                            Product</label>
                                                        <small class="text-danger">*Max 5MB |</small>
                                                        <small class="text-danger">*JPG, JPEG, PNG |</small>
                                                        <small class="text-danger">*width:1920px, height:1200px</small>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <input type="file" id="form3Examplev4"
                                                                    class="form-control   @error('image') is-invalid @enderror"
                                                                    name="image" value="{{ old('image') }}" required
                                                                    autocomplete="image" />
                                                                @error('image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-4">
                                                                <input type="file" id="form3Examplev4"
                                                                    class="form-control   @error('image2') is-invalid @enderror"
                                                                    name="image2" value="{{ old('image2') }}" required
                                                                    autocomplete="image2" />
                                                                @error('image2')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-4">
                                                                <input type="file" id="form3Examplev4"
                                                                    class="form-control   @error('image3') is-invalid @enderror"
                                                                    name="image3" value="{{ old('image3') }}" required
                                                                    autocomplete="image3" />
                                                                @error('image3')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" mb-2 pb-2 mb-md-0 pb-md-0">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplev5">Deskripsi
                                                            Product</label>
                                                        <textarea name="description" class="form-control form-control-lg @error('description') is-invalid @enderror" required
                                                            id="" cols="2" rows="2"></textarea>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <button class="btn btn-primary" type="submit">register</button> --}}
                                    </div>
                                    <div class="container d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary" style="width: 30rem"
                                            data-mdb-ripple-color="success">REGISTRASI</button>
                                    </div>
                                    <div class="container" style="margin-left: 3rem; margin-top:1rem">
                                        @if (Route::has('login'))
                                            <a class=" text-black-200" style="font-size: 18px; text-decoration:none;"
                                                href="{{ route('login') }}">Already Account? {{ __('Login') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </form>
@endsection

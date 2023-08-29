@extends('layouts.app')

@section('content')
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
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
            /* background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1)); */

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            /* background: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg') */
        }

        .bg-indigo {
            /* background-color: #4835d4; */
            background-color: #0bdbb6;

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


    <form method="POST" action="{{ route('login') }}">
        @csrf
        <section class="h-100 h-custom gradient-custom-2">
            <div class="container h-90 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-8" style="background-size: ">
                        <div class="card card-registrationcard-registration-2" style="border-radius: 15px; height:550px">
                            <div class="card-body p-0">
                                <div class="col-lg-6  text-black" style="height:550px">
                                    <div class="p-5">

                                        <h3 class="fw-normal m-3 text-center text-uppercase">Base Incubator</h3>
                                        <div class=" position-absolute" style="margin-left: 24rem">
                                            <img src="img/join.svg" width="400px" alt="">
                                        </div>
                                        <div class="mb-4 pb-2" style="margin-top: 5rem">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Examplev4">Email</label>
                                                <input type="email" id="form3Examplev4"
                                                    class="form-control form-control-lg  @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                                    autofocus />
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 pb-2">
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

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class=" d-flex justify-content-center">
                                            <button type="submit" style="width: 25rem" class="btn btn-primary"
                                                data-mdb-ripple-color="success">Login</button>
                                        </div>

                                    </div>
                                    <div style="margin-left: 4.5rem; margin-top:-2.5rem">
                                        @if (Route::has('register'))
                                            <a class="nav-link" style="font-size: 18px" href="{{ '/signup' }}">Don't
                                                have an Account? {{ __('Register') }}</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </form>
@endsection




















{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

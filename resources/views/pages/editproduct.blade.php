@extends('layouts.master')

@section('content')
    <style>
        .navbar .navbar-nav .nav-link {
            color: rgb(0, 0, 0);
        }
    </style>
    <div class="container-fluid" style="padding-left:8%; margin-top:5rem">
        {{-- <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="" style="color: #08a4a7; font-weight:500">My Product</a></li>
                <li class="breadcrumb-item active text-capitalize" aria-current="page">Edit </li>
            </ol>
        </nav> --}}
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('users.updateimage', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        {{-- name --}}
                        <div class="row">
                            <div class="col-6">
                                <h3 class="fw-normal mb-4 text-center" style="color:black;">General Infomation
                                </h3>
                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" name="name"
                                            value="{{ old('name') ?? $user->name }}" />
                                    </div>
                                </div>

                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Alamat</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" name="alamat"
                                            value="{{ old('alamat') ?? $user->alamat }}" />
                                    </div>
                                </div>

                                {{-- email --}}
                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-email">Email</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                        <input type="text" id="basic-icon-default-email" class="form-control"
                                            placeholder="john.doe" aria-label="john.doe"
                                            aria-describedby="basic-icon-default-email2" name="email"
                                            value="{{ old('email') ?? $user->email }}" />
                                    </div>
                                </div>

                                {{-- phonenumber --}}
                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-phone">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                class="bx bx-phone"></i></span>
                                        <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                            placeholder="658 799 8941" aria-label="658 799 8941"
                                            aria-describedby="basic-icon-default-phone2" name="phonenumber"
                                            value="{{ old('phonenumber') ?? $user->phonenumber }}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-image">Gambar Produk</label>
                                    <small class="text-danger">*Max 5MB |</small>
                                    <small class="text-danger">*JPG, JPEG, PNG |</small>
                                    <small class="text-danger">*width:1200px, height:1200px</small>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-image" class="input-group-text"><i
                                                        class="bx bx-image"></i></span>
                                                <input type="file" id="form3Examplev4"
                                                    class="form-control   @error('image') is-invalid @enderror"
                                                    name="image" value="{{ old('image') }}" autocomplete="image" />
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-image" class="input-group-text"><i
                                                        class="bx bx-image"></i></span>
                                                <input type="file" id="form3Examplev4"
                                                    class="form-control   @error('image2') is-invalid @enderror"
                                                    name="image2" value="{{ old('image2') }}" autocomplete="image2" />
                                                @error('image2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-image" class="input-group-text"><i
                                                        class="bx bx-image"></i></span>
                                                <input type="file" id="form3Examplev4"
                                                    class="form-control   @error('image3') is-invalid @enderror"
                                                    name="image3" value="{{ old('image3') }}" autocomplete="image3" />
                                                @error('image3')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-email">Deskripsi Produk</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                        <textarea name="description" class="form-control form-control-lg @error('description') is-invalid @enderror" required
                                            id="" cols="2" rows="2">{{ old('description') ?? $user->description }}</textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h3 class="fw-normal mb-4 text-center" style="color:black;">Brand Infomation
                                </h3>
                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Nama Brand</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" name="name_brand"
                                            value="{{ old('name_brand') ?? $user->name_brand }}" />
                                    </div>
                                </div>

                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-image">Brand Logo</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-image" class="input-group-text"><i
                                                class="bx bx-image"></i></span>
                                        <input type="file" id="basic-icon-default-image"
                                            class="form-control phone-mask @error('logo') is-invalid @enderror"
                                            aria-describedby="basic-icon-default-image" name="logo"
                                            value="{{ old('logo') ?? $user->logo }}" />
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Domisili</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" name="domisili"
                                            value="{{ old('domisili') ?? $user->domisili }}" />
                                    </div>
                                </div>

                                {{-- email --}}
                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-email">Cerita Brand</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                        <textarea name="cerita" class="form-control form-control-lg @error('cerita') is-invalid @enderror" required
                                            id="" cols="2" rows="2">{{ old('cerita') ?? $user->cerita }}</textarea>

                                    </div>
                                </div>

                                {{-- phonenumber --}}
                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-phone">Tahun Berdiri</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                class="bx bx-phone"></i></span>
                                        <input type="text" id="basic-icon-default-phone"
                                            class="form-control phone-mask" placeholder="658 799 8941"
                                            aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2"
                                            name="tahun" value="{{ old('tahun') ?? $user->tahun }}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <label class="form-label" for="basic-icon-default-phone">Link Marketplace</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                class="bx bx-phone"></i></span>
                                        <input type="text" id="basic-icon-default-phone"
                                            class="form-control phone-mask" placeholder="658 799 8941"
                                            aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2"
                                            name="link" value="{{ old('link') ?? $user->link }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>

                </div>

                {{-- image --}}



                </form>
            </div>
        </div>
    </div>
@endsection

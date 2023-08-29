@extends('layouts.admin')

@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    {{-- name --}}
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Nama Perusahaan</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan Nama Perusahaan" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="name"
                                value="{{ old('name') ?? $about->name }}" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Contact</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan Nama Perusahaan" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="contact"
                                value="{{ old('contact') ?? $about->contact }}" />
                            @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">E-mail</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan Nama Perusahaan" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="email"
                                value="{{ old('email') ?? $about->email }}" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Alamat</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan Nama Perusahaan" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="alamat"
                                value="{{ old('alamat') ?? $about->alamat }}" />
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- description --}}
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-phone">Tentang</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                    class="bx bx-description"></i></span>
                            <textarea type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="description"
                                aria-label="description" aria-describedby="basic-icon-default-phone2" name="tentang" style="height: 200px">{{ old('tentang') ?? $about->tentang }}</textarea>
                            @error('tentang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-image">Logo</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-image" class="input-group-text"><i class="bx bx-image"></i></span>
                            <input type="file" id="basic-icon-default-image" class="form-control phone-mask"
                                aria-describedby="basic-icon-default-image" name="logo" />
                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Alamat Facebook</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan Nama Perusahaan" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="facebook"
                                value="{{ old('facebook') ?? $about->facebook }}" />
                            @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Alamat Instagram</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan Nama Perusahaan" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="instagram"
                                value="{{ old('instagram') ?? $about->instagram }}" />
                            @error('instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Alamat Twitter</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan Nama Perusahaan" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="twitter"
                                value="{{ old('twitter') ?? $about->twitter }}" />
                            @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

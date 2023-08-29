@extends('layouts.admin')

@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    {{-- name --}}
                    <div class="row">
                        <div class="col-6">
                            <h3 class="fw-normal mb-4 text-center" style="color:black;">General Infomation
                            </h3>
                            <div class="mb-3 col-sm-10">
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

                            <div class="mb-3 col-sm-10">
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

                            {{-- roles --}}
                            <div class="mb-3 col-sm-10">
                                <label class="form-label" for="basic-icon-default-city">Role</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-city" class="input-group-text"><i
                                            class='bx bx-id-card'></i></span>
                                    <select name="roles" id="roles" class="col-sm-3">
                                        <option value="0" {{ $user->roles == 0 ? 'selected' : '' }}>User</option>
                                        <option value="1" {{ $user->roles == 1 ? 'selected' : '' }}>Admin</option>
                                    </select>
                                </div>
                            </div>

                            {{-- email --}}
                            <div class="mb-3 col-sm-10">
                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="text" id="basic-icon-default-email" class="form-control"
                                        placeholder="john.doe" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-email2" name="email"
                                        value="{{ old('email') ?? $user->email }}" />
                                    <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>

                            {{-- phonenumber --}}
                            <div class="mb-3 col-sm-10">
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
                                <div class="row">
                                    <div class="col-4">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-image" class="input-group-text"><i
                                                    class="bx bx-image"></i></span>
                                            <input type="file" id="form3Examplev4"
                                                class="form-control   @error('image') is-invalid @enderror" name="image"
                                                value="{{ old('image') }}" autocomplete="image" />
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
                            <div class="mb-3 col-sm-10">
                                <label class="form-label" for="basic-icon-default-email">Deskripsi Product</label>
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
                            <div class="mb-3 col-sm-10">
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

                            <div class="mb-3 col-sm-10">
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

                            <div class="mb-3 col-sm-10">
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
                            <div class="mb-3 col-sm-10">
                                <label class="form-label" for="basic-icon-default-phone">Tahun Berdiri</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="bx bx-phone"></i></span>
                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                        placeholder="658 799 8941" aria-label="658 799 8941"
                                        aria-describedby="basic-icon-default-phone2" name="tahun"
                                        value="{{ old('tahun') ?? $user->tahun }}" />
                                </div>
                            </div>
                            <div class="mb-3 col-sm-10">
                                <label class="form-label" for="basic-icon-default-phone">Link Marketplace</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="bx bx-phone"></i></span>
                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                        placeholder="658 799 8941" aria-label="658 799 8941"
                                        aria-describedby="basic-icon-default-phone2" name="link"
                                        value="{{ old('link') ?? $user->link }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- image --}}



                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@extends('layouts.admin')

@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('strukturs.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2" name="nama"
                                value="{{ $struktur->nama }}" />
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-city">Jabatan</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-city" class="input-group-text"><i class='bx bx-id-card'></i></span>
                            <select name="jabatan" id="jabatan" class="col-sm-3">
                                <option value="Direksi" {{ $struktur->jabatan == 'Direksi' ? 'selected' : '' }}>Direksi
                                </option>
                                <option value="Direktur Utama"
                                    {{ $struktur->jabatan == 'Direktur Utama' ? 'selected' : '' }}>Direktur Utama
                                </option>
                                <option value="Direktur Keuangan"
                                    {{ $struktur->jabatan == 'Direktur Keuangan' ? 'selected' : '' }}>Direktur Keuangan
                                </option>
                                <option value="Manajer" {{ $struktur->jabatan == 'Manajer' ? 'selected' : '' }}>Manajer
                                </option>
                                <option value="Administrasi" {{ $struktur->jabatan == 'Administrasi' ? 'selected' : '' }}>
                                    Administrasi
                                </option>
                                <option value="Staff" {{ $struktur->jabatan == 'Staff' ? 'selected' : '' }}>Staff
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Image</label>
                        <small class="text-danger">*Max 5MB |</small>
                        <small class="text-danger">*JPG, JPEG, PNG |</small>
                        {{-- <small class="text-danger">*width:570px, height:670px</small> --}}
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text">
                                <i class="bx bx-image"></i>
                            </span>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2"
                                name="gambar" autocomplete="gambar" autocomplete="gambar" value="{{ old('gambar') }}" />
                            @error('gambar')
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
                                value="{{ old('facebook') ?? $struktur->facebook }}" />
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
                                value="{{ old('instagram') ?? $struktur->instagram }}" />
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
                                value="{{ old('twitter') ?? $struktur->twitter }}" />
                            @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary"
                        style="background-color: #f7ca44 ;border:#f7ca44">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

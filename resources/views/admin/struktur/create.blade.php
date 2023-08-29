@extends('layouts.admin')

@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('strukturs.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2" name="nama" />
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-city">Jabatan</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-city" class="input-group-text"><i class='bx bx-id-card'></i></span>
                            <select name="jabatan" id="jabatan">
                                <option selected disabled>Pilih Jabatan</option>
                                <option value="Direksi">Direksi</option>
                                <option value="Direktur Utama">Direktur Utama</option>
                                <option value="Kurikulum">Kurikulum</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Finance">Finance</option>
                            </select>
                            @error('jabatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                                value="{{ old('gambar') }}" autocomplete="gambar" name="gambar" />
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
                                aria-describedby="basic-icon-default-fullname2" name="facebook" />
                        </div>
                    </div>
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Alamat Instagram</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2" name="instagram" />
                        </div>
                    </div>
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Alamat Twitter</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2" name="twitter" />
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

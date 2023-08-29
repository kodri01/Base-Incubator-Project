@extends('layouts.admin')

@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('beritas.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    {{-- name --}}
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Judul Berita</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Input Author Name" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="judul"
                                value="{{ old('judul') ?? $berita->judul }}" />
                            @error('doner_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- description --}}
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-phone">description</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                    class="bx bx-description"></i></span>
                            <textarea type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="description"
                                aria-label="description" aria-describedby="basic-icon-default-phone2" name="isi" style="height: 200px">{{ old('isi') ?? $berita->isi }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-image">Image</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-image" class="input-group-text"><i class="bx bx-image"></i></span>
                            <input type="file" id="basic-icon-default-image" class="form-control phone-mask"
                                aria-describedby="basic-icon-default-image" name="gambar" />
                            @error('gambar')
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

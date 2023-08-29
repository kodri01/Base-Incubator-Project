@extends('layouts.admin')

@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('beritas.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Berita Title</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2" name="judul" />
                        </div>
                    </div>

                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Berita Image</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text">
                                <i class="bx bx-image"></i>
                            </span>
                            <input type="file" class="form-control" id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2" name="gambar" />
                        </div>
                    </div>

                    <div class="form-group mb-3 col-sm-7">
                        <label for="nim">Isi</label>
                        <textarea class="form-control summernote" id="summernote" name="isi" style="height: 200px">{{ old('isi') }}</textarea>
                        @error('isi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Add
                        Berita</button>
                </form>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <!-- / Content -->
@endsection

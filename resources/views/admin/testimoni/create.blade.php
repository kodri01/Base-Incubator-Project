@extends('layouts.admin')

@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('opinis.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Nama</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2" name="nama" />
                        </div>
                    </div>
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Gambar</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-image"></i></span>
                            <input type="file" class="form-control" id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2" name="gambar" />
                        </div>
                    </div>
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Testimoni</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-pen"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2" name="opinion" />
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary" style="background-color: #f7ca44 ;border:#f7ca44">Add
                        Testimoni</button>
                </form>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

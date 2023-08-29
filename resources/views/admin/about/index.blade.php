@extends('layouts.admin')

@section('content')
    {{-- @if (session()->has('pesan'))
        <div class="alert alert-success">
            {{ session()->get('pesan') }}
        </div>
    @endif --}}

    <div class="card">
        <div class="table-responsive text-nowrap">
            {{-- <a href="{{ route('about.create') }}" class="btn btn-primary">Add Berita</a> --}}
            @if (session()->has('message'))
                <div class="alert alert-success ">
                    {{ session()->get('message') }}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Logo</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Tentang</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Twitter</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"
                                    data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="{{ $data->name }}">

                                    <img src="{{ url('Image/' . $data->logo) }}" alt="Avatar" width="100px"
                                        height="100px" />

                                </ul>
                            </td>
                            <td>{{ $data->contact }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{!! Str::limit($data->tentang, 70) !!}</td>
                            <td>{{ $data->facebook }}</td>
                            <td>{{ $data->instagram }}</td>
                            <td>{{ $data->twitter }}</td>
                            <td>
                                {{-- <a class="" href=""><i class="bx bxs-edit me-2"></i></a> --}}
                                <a class="" href="{{ route('about.edit', $data->id) }}"><i
                                        class="bx bxs-edit me-2"></i></a>
                                {{-- <form action="{{ route('about.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="" name="delete" data-name=""
                                        class="text-danger border-0 bg-transparent btnAction delete-confirm" type="submit"
                                        role=""><i class="bx bx-trash "></i></button>
                                </form> --}}

                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

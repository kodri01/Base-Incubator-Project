@extends('layouts.admin')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success ">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card">
        <div class="table-responsive text-nowrap">
            <a href="{{ route('beritas.create') }}" class="btn btn-primary">Add Berita</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Judul Berita</th>
                        <th>Image</th>
                        <th>Isi Berita</th>
                        <th>Actions/items</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $data->judul }}</td>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"
                                    data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="{{ $data->judul }}">

                                    <img src="{{ url('Image/' . $data->gambar) }}" alt="Avatar" width="100px"
                                        height="100px" />

                                </ul>
                                {{-- <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title="{{ $data->judul }}">
                                        <img src="{{ url('Image/' . $data->gambar) }}" width="100px" height="100px"
                                            alt="Avatar" class="" />
                                    </li>
                                </ul> --}}
                            </td>
                            <td>{!! Str::limit($data->isi, 70) !!}</td>
                            <td>


                                <form action="{{ route('beritas.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="" href="{{ route('beritas.edit', $data->id) }}"><i
                                            class="bx bxs-edit me-2"></i></a>
                                    <button onclick="" name="delete" data-name=""
                                        class="text-danger border-0 bg-transparent btnAction delete-confirm" type="submit"
                                        role=""><i class="bx bx-trash "></i></button>
                                </form>

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

    {{-- pagination --}}
    {{-- <div class="pagination-wrapper">
        {{ $data->links('pagination::bootstrap-4') }}
    </div> --}}

    <!--/ Hoverable Table rows -->
@endsection

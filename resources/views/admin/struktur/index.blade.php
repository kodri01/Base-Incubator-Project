@extends('layouts.admin')

@section('content')
    <!-- Hoverable Table rows -->
    @if (session()->has('message'))
        <div class="alert alert-success ">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card">
        <a href="{{ route('strukturs.create') }}">
            <div class="btn btn-success mb-3 approve">Add Anggota Struktur</div>
        </a>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Gambar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($struktur as $value)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $value->nama }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $value->jabatan }}</strong>
                            </td>
                            {{-- <td><span class="badge bg-label-{{$user->roles == 0 ? 'primary': 'danger'}} me-1">{{$user->roles == 0 ? 'user': 'admin'}}</span></td> --}}
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                                    <img src="{{ url('Image/' . $value->gambar) }}" alt="Avatar" width="100px"
                                        height="100px" />

                                </ul>
                            </td>
                            <td>

                                <form action="{{ route('strukturs.destroy', $value->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="" href="{{ route('strukturs.edit', $value->id) }}">
                                        <i class="bx bx-edit-alt me-4"></i></a>
                                    <button onclick="" name="delete" data-name=""
                                        class="text-danger border-0 bg-transparent btnAction delete-confirm" type="submit"
                                        role=""><i class="bx bx-trash "></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    {{-- pagination --}}
    {{-- <div class="pagination-wrapper">
                {{ $users->links('pagination::bootstrap-4')}}
              </div> --}}

    <!--/ Hoverable Table rows -->
@endsection

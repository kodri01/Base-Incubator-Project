@extends('layouts.admin')

@section('content')
    <div class="card">
        <a href="{{ route('opinis.create') }}">
            <div class="btn btn-success mb-3 approve">Add Testimoni</div>
        </a>
        <div class="table-responsive text-nowrap">
            @if (session()->has('message'))
                <div class="alert alert-success ">
                    {{ session()->get('message') }}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gambar</th>
                        <th>Testimoni</th>
                        <th>Action</th>

                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($opinis as $opini)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $opini->nama }}</strong>
                            </td>
                            <td>
                                <ul class="list-unstyled users-list avatar-group align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title="{{ $opini->nama }}">
                                        <img src="{{ url('Image/' . $opini->gambar) }}" alt="Avatar" {{-- <img src="{{ url('Image/' . $package->image) }}/storage/{{ $user->logo }}" alt="Avatar" --}}
                                            class="rounded-circle h-px-50 w-px-50 " />
                                    </li>
                                </ul>
                            </td>
                            <td>{{ $opini->opinion }}</td>
                            <td>
                                <form action="{{ route('opinis.destroy', $opini->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
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
@endsection

@extends('layouts.admin')

@section('content')
    <!-- Hoverable Table rows -->
    @if (session()->has('message'))
        <div class="alert alert-success ">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card">
        {{-- <a href="users/approve-all">
            <div class="btn btn-success mb-3 approve">Approve All Users</div>
        </a> --}}
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Showcase Brand</th>
                        <th>Nama Pemilik</th>
                        <th>Nama Brand</th>
                        <th>Logo</th>
                        <th>Image</th>
                        <th>Tahun Berdiri</th>
                        <th>Domisili</th>
                        <th>Tentang Brand</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center">
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    @if ($user->status == 0)
                                        <a class="text-success fs-4 " href="{{ 'user/show/' . $user->id }}"><i
                                                class='bx bxs-show'>
                                            </i></a>
                                    @endif
                                    @if ($user->status == 1)
                                        <a class="text-danger fs-4 " href="{{ 'user/hide/' . $user->id }}"><i
                                                class="bx bxs-hide">
                                            </i></a>
                                    @endif
                                    {{-- <a class="" href="{{ route('users.edit', $user->id) }}"><i
                                            class="bx bxs-edit me-2"></i></a> --}}
                                    <button onclick="" name="delete" data-name=""
                                        class="text-danger border-0 bg-transparent btnAction delete-confirm" type="submit"
                                        role=""><i class="bx bx-trash "></i></button>
                                </form>

                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->name_brand }}</td>
                            <td>
                                <ul class="list-unstyled users-list avatar-group align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title="{{ $user->name_brand }}">
                                        <img src="{{ url('Image/' . $user->logo) }}" alt="Avatar" {{-- <img src="{{ url('Image/' . $package->image) }}/storage/{{ $user->logo }}" alt="Avatar" --}}
                                            class="rounded-circle h-px-50 w-px-50 " />
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-unstyled users-list avatar-group align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title="{{ $user->name_brand }}">
                                        <img src="{{ url('Image/' . $user->image) }}" alt="Avatar" {{-- <img src="{{ url('Image/' . $package->image) }}/storage/{{ $user->logo }}" alt="Avatar" --}}
                                            class="rounded-circle h-px-50 w-px-50 " />
                                    </li>
                                </ul>
                            </td>
                            <td class="text-center">{{ $user->tahun }}</td>
                            <td>{{ $user->domisili }}</td>

                            <td>{{ $user->description }}</td>

                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach

                </tbody>
            </table>

        </div>
        <div class="m-3">
            <label for="">Note:</label><br>
            <i class='bx bxs-show text-success'></i> <span>Untuk menampilkan brand di web utama</span><br>
            <i class='bx bxs-hide text-danger'></i> <span>Tidak menampilkan brand di web utama</span><br>
            <i class='bx bxs-trash text-danger'></i> <span>Delete Data Brand</span><br>
        </div>
    </div>

    {{-- pagination --}}
    <div class="pagination-wrapper">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>

    <!--/ Hoverable Table rows -->
@endsection

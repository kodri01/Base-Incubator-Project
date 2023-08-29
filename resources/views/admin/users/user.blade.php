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

                        <th>Nomor</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Nama Brand</th>
                        <th>Logo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $user->name }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->email }}</strong>
                            </td>
                            <td><span
                                    class="badge bg-label-{{ $user->roles == 0 ? 'success' : 'danger' }} me-1">{{ $user->roles == 0 ? 'user' : 'admin' }}</span>
                            </td>
                            <td>{{ $user->name_brand }}</td>
                            {{-- <td><span
                                    class="badge bg-label-{{ $user->status == 0 ? 'warning' : 'success' }} me-1">{{ $user->status == 0 ? 'Pending' : 'Approved' }}</span>
                            </td> --}}
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



                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a class="" href="{{ route('users.edit', $user->id) }}"><i
                                            class="bx bxs-edit me-2"></i></a>
                                    <button onclick="" name="delete" data-name=""
                                        class="text-danger border-0 bg-transparent btnAction delete-confirm" type="submit"
                                        role=""><i class="bx bx-trash "></i></button>
                                </form>

                                {{-- <a href="{{ route('users.destroy', $user->id) }}" class=" text-danger"
                                    onclick="event.preventDefault();
                    document.getElementById('Delete').submit();">
                                    <form id="Delete" action="{{ route('users.destroy', $user->id) }}" method="POST"
                                        class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <span class=""><i class="bx bx-trash me-2"></i></span>
                                    </form>
                                </a> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
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
    <div class="pagination-wrapper">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>

    <!--/ Hoverable Table rows -->
@endsection

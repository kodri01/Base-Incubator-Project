@extends('layouts.admin')

@section('content')
    <!-- Hoverable Table rows -->

    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                @if (session()->has('message'))
                    <div class="alert alert-success ">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $value->email }}</strong>
                            </td>
                            {{-- <td><span class="badge bg-label-{{$user->roles == 0 ? 'primary': 'danger'}} me-1">{{$user->roles == 0 ? 'user': 'admin'}}</span></td> --}}
                            <td>{{ $value->subject }}</td>
                            <td>{{ $value->message }}</td>
                            <td>



                                <form action="{{ route('messages.destroy', $value->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="" name="delete" data-name=""
                                        class="text-danger border-0 bg-transparent btnAction delete-confirm" type="submit"
                                        role=""><i class="bx bx-trash "></i></button>
                                </form>
        </div>
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

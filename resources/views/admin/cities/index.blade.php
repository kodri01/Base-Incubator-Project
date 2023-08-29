@extends('layouts.admin')

@section('content')
    <!-- Hoverable Table rows -->
    {{-- @if (session()->has('message'))
        <div class="alert alert-success ">
            {{ session()->get('message') }}
        </div>
    @endif --}}
    <div class="card">
        <div class="table-responsive text-nowrap">
            @if (session()->has('message'))
                <div class="alert alert-success ">
                    {{ session()->get('message') }}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $value->name }}</strong>
                            </td>
                            <td>
                                <form action="{{ route('cities.destroy', $value->id) }}" method="post">
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

    {{-- pagination --}}
    {{-- <div class="pagination-wrapper">
                {{ $users->links('pagination::bootstrap-4')}}
              </div> --}}

    <!--/ Hoverable Table rows -->
@endsection

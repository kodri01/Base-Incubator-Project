@extends('layouts.admin')

@section('content')
    {{-- @php
        echo '<pre>;';
          print_r($users->city);
        echo '<pre>;';
    @endphp --}}
    <!-- Hoverable Table rows -->
    @if (session()->has('message'))
        <div class="alert alert-success ">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card">
        <a href="admin/packages/approve-all">
            <div class="btn btn-success mb-3 approve">Approve All Product</div>
        </a>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Author</th>
                        <th>Product Name</th>
                        <th>Condition</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($donations as $donation)
                        <tr>
                            <td>{{ $donation->doner_name }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ substr($donation->title, 0, 40) }}</strong>
                            </td>

                            <td><span
                                    class="badge bg-label-{{ $donation->status == 0 ? 'warning' : 'success' }} me-1">{{ $donation->status == 0 ? 'Pending' : 'Approved' }}</span>
                            </td>
                            <td><span class="badge bg-label-success me-1">{{ $donation->condition }}</span></td>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title="{{ $donation->title }}">
                                        <img src="{{ url('Image/' . $donation->image) }}" alt="Avatar"
                                            class="rounded-circle h-px-30 w-px-30" />
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <form id="delete" action="{{ route('packages.destroy', $donation->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    @if ($donation->status == 0)
                                        <a class="text-success " href="{{ 'admin/package/approve/' . $donation->id }}"><i
                                                class="bx bxs-user-check me-2"></i></a>
                                    @endif
                                    <a class="" href="{{ route('packages.edit', $donation->id) }}"><i
                                            class="bx bxs-edit me-2"></i></a>
                                    <button onclick="" name="delete" data-name=""
                                        class=" text-danger border-0 bg-transparent btnAction delete-confirm" type="submit"
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
    <div class="pagination-wrapper">
        {{ $donations->links('pagination::bootstrap-4') }}
    </div>

    <!--/ Hoverable Table rows -->
@endsection

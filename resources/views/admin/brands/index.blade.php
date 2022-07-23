@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h5 class="mt-4">Brand Management</h5>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('store.index') }}"><i class="fas fa-store me-1"></i> Brand</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.home') }}"><i class="fas fa-home me-1"></i> Home</a>
        </li>
    </ol>
    <div class="row">
        <div class="card col-md-12">
            <div class="card-header light-primary">
            <i class="fas fa-table me-1"></i>
                <strong>Brand Listing</strong>
            </div>
            <div class="card-body">
            <table class="table table-bordered" id="">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Store Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($brands as $key => $brands)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $brands->name }}</td>
                        <td>{{ $brands->category->name }}</td>
                        <td>{{ $brands->status }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-outline-success">
                                <i class="fas fa-edit me-1"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash me-1"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {{ $brands->appends(request()->input())->links() }}
            </div>
            {{-- Pagination --}}
            </div>
        </div>
    </div>
</div>
@endsection

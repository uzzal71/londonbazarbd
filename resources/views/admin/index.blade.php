@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h5 class="mt-4">Brand Management</h5>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('store.index') }}"><i class="fab fa-brand"></i> Brand</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.home') }}"><i class="fas fa-home me-1"></i> Home</a>
        </li>
    </ol>
    <div class="row">
        <div class="card col-md-12">
            <div class="card-header light-primary">
                <div class="row">
                    <div class="col-md-8">
                        <p class="mt-2">
                            <i class="fas fa-table me-1"></i>
                            <strong>Brand Listing</strong>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <form class="" id="sort_categories" action="" method="GET">
                            <div class="box-inline pad-rgt pull-left">
                                <div class="" style="min-width: 200px;">
                                    <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="Type name & Enter">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <table class="table table-bordered" id="">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $key => $row)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                        <img 
                            src="{{ asset('uploads/default-image.png') }}"
                            alt="{{ $row->name }}" />
                        </td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->mobile }}</td>
                        <td>{{ $row->email }}</td>
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
                {{ $admins->appends(request()->input())->links() }}
            </div>
            {{-- Pagination --}}
            </div>
        </div>
    </div>
</div>
@endsection

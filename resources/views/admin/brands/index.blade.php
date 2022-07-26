@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h5 class="mt-4">Brand Management</h5>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('brands.index') }}"><i class="fab fa-delicious" aria-hidden="true"></i> Brand</a>
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
                        <th>Brand name</th>
                        <th>Category name</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($brands as $key => $brand)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->category->name }}</td>
                        <td><?= $brand->status == 1 ? '<span class="text-success text-bold">Active</span>' : '<span class="text-danger text-bold ">Inactive</span>'; ?></td>
                        <td>
                            <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-sm btn-outline-success">
                                <i class="fas fa-edit me-1"></i>
                            </a>
                            <a href="{{ route('brands.destroy', $brand->id) }}" class="btn btn-sm btn-outline-danger">
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

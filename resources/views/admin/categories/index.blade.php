@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h5 class="mt-4">Categories Management</h5>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('categories.index') }}"><i class="far fa-bookmark me-1"></i> Categories</a>
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
                            <strong>Categories Listing</strong>
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
            <div class="card-body overflow-auto">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>
                    @foreach($categories as $key=>$category)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->status }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-outline-success">
                                <i class="fas fa-edit me-1"></i>
                            </a>
                            <a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash me-1"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {{ $categories->appends(request()->input())->links() }}
            </div>
            {{-- Pagination --}}
            </div>
        </div>
    </div>
</div>
@endsection

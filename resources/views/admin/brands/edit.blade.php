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
                <i class="fas fa-edit me-1"></i>
                <strong>Edit Brand Create</strong>
            </div>
            <div class="card-body overflow-auto">
                <form class="form" action="#" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Brand name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Category name" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status">
                            <option value="0">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button class="btn btn-danger">Cancel</button>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

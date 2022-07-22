@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h5 class="mt-4">Customer Management</h5>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('customers.index') }}">
                <i class="fas fa-user-plus me-1"></i> Customers
            </a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.home') }}">
                <i class="fas fa-home me-1"></i> Home
            </a>
        </li>
    </ol>
    <div class="">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <p class="mt-2">
                            <i class="fas fa-table me-1"></i>
                            <strong>Customer Listing</strong>
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
                        <th>Customer Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>avatar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $key=>$customer)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->mobile }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->logo }}</td>
                        <td>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-outline-success">
                                <i class="fas fa-edit me-1"></i>
                            </a>
                            <a href="{{ route('customers.destroy', $customer->id) }}" class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash me-1"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {{ $customers->appends(request()->input())->links() }}
            </div>
            {{-- Pagination --}}
            </div>
        </div>
    </div>
</div>
@endsection

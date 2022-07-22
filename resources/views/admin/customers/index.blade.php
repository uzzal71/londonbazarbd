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
    <div class="row">
        <div class="card col-md-12">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
                <strong>Customer Listing</strong>
            </div>
            <div class="card-body">
            <table class="table table-bordered" id="datatablesSimple">
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
            </table>
            </div>
        </div>
    </div>
</div>
@endsection

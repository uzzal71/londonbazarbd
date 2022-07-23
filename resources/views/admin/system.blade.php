 @extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h5 class="mt-4">System Information</h5>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('app.system') }}"><i class="fab fa-database"></i> System</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.home') }}"><i class="fas fa-home me-1"></i> Home</a>
        </li>
    </ol>
    <div class="row">
        <div class="card">
        	<table class="table table-bordered">
        		<thead>
        			<tr>
        				<th>SL#.</th>
        				<th>Package name</th>
        				<th>Version</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td>1</td>
        				<td>PHP</td>
        				<td>7.4</td>
        			</tr>
        			<tr>
        				<td>2</td>
        				<td>Composer</td>
        				<td>1.6</td>
        			</tr>
        			<tr>
        				<td>3</td>
        				<td>Laravel</td>
        				<td>8.0</td>
        			</tr>
        			<tr>
        				<td>4</td>
        				<td>MySql</td>
        				<td>5.6</td>
        			</tr>
        		</tbody>
        	</table>
        </div>
    </div>
</div>
@endsection

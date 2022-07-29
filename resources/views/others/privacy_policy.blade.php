@extends('layouts.app')
 
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">{{ $privacy_policy->title }}</h3>
            <p style="font-size: 15px">
                <?php echo nl2br($privacy_policy->description); ?>
            </p>
        </div>
    </div>
</div>
@endsection

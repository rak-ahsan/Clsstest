@extends('frontend.head')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            @include('frontend.sidebar')
        </div>
        <div class="col-md-8">main</div>
    </div>
</div>
@include('frontend.footer')
@endsection
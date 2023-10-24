@extends('frontend.head')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            @include('frontend.sidebar')
        </div>
        <div class="col-md-6">
            <form action=" {{ route('add') }}" method="POST">
                @csrf
                <div class="mb-10">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">UserName</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="username">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
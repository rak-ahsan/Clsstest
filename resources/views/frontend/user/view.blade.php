@extends('frontend.head')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            @include('frontend.sidebar')
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                <tr>
                    <th>email</th>
                    <th>usernme</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($user as $row)
                    <tr>
                        <td>{{$row->email}}</td>
                        <td>{{$row->username}}</td>
                        <td><a href="#" class="btn btn-success">Edit</a></td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
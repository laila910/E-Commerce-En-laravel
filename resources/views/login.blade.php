@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Email">Email Address</label>
                    <input type="email" name="email" class="form-control" id="Email" placeholder="Email ">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
             </form>
        </div>
    </div>
</div>
@endsection
 


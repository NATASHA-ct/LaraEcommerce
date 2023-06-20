@extends('master')

@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-5 mx-auto">
            <form action="register" method="POST" class="row g-3">
                <div class="form-group">
                    <label for="exampleInputName">Username</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Username">
                </div>
                <div class="form-group">
                        @csrf
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit"  class="btn btn-sm btn-primary mx-auto" style="width:40%">Create Account</button>
            </form>
        </div>
    </div>
</div>
@endsection
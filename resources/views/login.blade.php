@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="background">
    <div class="row">
        <div class="col-1">
            <h1 style="font-family: poppins;"><b>Login to CampEvent</b></h1>
            <h6>Please enter your registered email and password</h6>
            <form class="card-form" method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label"><b>Username/email</b></label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your valid username/email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><b>Password</b></label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                </div>
                <button class="btn btn-2">Login</button>
            </form>
            <div>
                <a href="/forgot" class="forgot">Forgot Password</a>
                <p class="atau">Or</p>
            </div>
            <a href="/register"><button class="btn btn-3">Register</button></a>
        </div>
        <div class="col">
            <img src="/source/img/login.png" class="img-1">
        </div>
    </div>
</div>
@endsection
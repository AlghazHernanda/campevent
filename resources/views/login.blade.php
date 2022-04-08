@extends('layouts.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container" style="padding-top: 120px; padding-left: 120px;">
    <div class="col-sm-4">
        <div class="row">
            <div>
                <h1 style="font-family: poppins; padding-bottom: 10px;"><b>Login to CampEvent</b></h1>
                <p style="padding-bottom: 30px;">Please enter your registered email and password</h6>
            </div>
            <form action="/login" method="post">
                @csrf

                 {{-- menampilkan pesan berhasil registerd yang di ambil dari LoginController
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        
                    @endif

                    @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif --}}

                    @if (Session::get('loginError'))
                        <div class="alert alert-danger">
                            {{ Session::get('loginError') }}
                        </div>
                    @endif

                    @if (Session::get('info'))
                        <div class="alert alert-info">
                            {{ Session::get('info') }}
                        </div>
                    @endif

            <div class="form-login">
                <label for="username" class="form-label"><b>Username/email</b></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="username" 
                placeholder="Enter your valid username/email" 
                value="{{ Session::get('verifiedEmail') ? Session::get('verifiedEmail') : old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-login" style="padding-top: 10px;">
                <label for="password" class="form-label"><b>Password</b></label>
                <input type="password" id="inputPassword5" name="password" class="form-control" 
                placeholder="Enter your password" aria-describedby="passwordHelpBlock">
        
            </div>
        </div>
        <div class="row" style="padding-top: 30px;">
            <div class="col-sm">
                
            </div>
            <button class="btn btn-2" type="submit">Login</button>
        </form>
        
            <div class="col-sm" style="padding-left: 15px;">
                <a href="/register"><button class="btn btn-3">Register</button></a>
            </div>
            <br><br>
            <div style="padding-top: 18px;">
                <a href="/forgot" class="forgot">Forgot Password ?</a>
            </div>
        </div>
    </div>

    <div class="col-sm-8">
        <img src="/source/img/login.png" class="img-1" style="padding-left: 50px;">
    </div>
</div>
@endsection
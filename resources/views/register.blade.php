@extends('layouts.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="register">
    <div class="row">
        <div class="col-sm-6">
            <h1 style="padding-bottom: 10px;">Register your account</h1>
            <h3 style="color: #BFBFBF; padding-bottom: 30px;">Your journey will begin from <span style="color: #F7CC74;">here</span></h3>
            <form class="card-form" method="post" action="/register" >
                @csrf

                @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif   

                <div class="r1">
                    <div>
                        <label for="fullname" class="form-label"><b>Full Name</b></label>
                        <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname" placeholder="Enter your full name" value="{{ old('fullname') }}">
                        @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="r2">
                    <div>
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="r3">
                    <div>
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" id="inputPassword5" class="form-control @error('password') is-invalid @enderror" name="password" aria-describedby="passwordHelpBlock" placeholder="Insert your password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="r4">
                    <div>
                        <label for="" class="form-label"><b>Confirm Password</b></label>
                        <input type="password" id="" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" aria-describedby="passwordHelpBlock" placeholder="Confirm your password" required>
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-1"><b>Register</b></button>
            </form>
            <div style="padding-top: 17px;">
                <h4>Already have an account? <a href="/login" style="color: #F7CC74;"> login </a></h4>
            </div>
        </div>
        <div class="col-sm-6" style="text-align: center;">
            <div class="image">
                <img src="/source/img/register.png" width="440px" height="428px">
            </div>
        </div>
    </div>
</div>
@endsection
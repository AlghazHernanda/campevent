@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="background">
    <div class="row">
        <div class="col-2">
            <h1><b>Register your account</b></h1>
            <h6>Your journey will begin from here</h6>
            <br>
            <form class="card-form" method="post" action="/register">
                @csrf
                <div class="mb-3">
                    <label for="fullname" class="form-label"><b>Full Name</b></label>
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname" placeholder="Enter your full name"  value="{{ old('fullname') }}">
                    @error('fullname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email</b></label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email"  value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>
                <div class="mb-3">
                    <label for="password" class="form-label"><b>Password</b></label>
                    <input type="password" id="inputPassword5" class="form-control @error('password') is-invalid @enderror" name="password" aria-describedby="passwordHelpBlock" required >
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>
                <div class="mb-3">
                    <label for="" class="form-label"><b>Confirm Password</b></label>
                    <input type="password" id="" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" aria-describedby="passwordHelpBlock" required>
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-4"><b>Register</b></button>
            </form>
        </div>
        <div class="col">
            <img src="/source/img/register.png" class="img-2">
        </div>
    </div>
</div>
@endsection
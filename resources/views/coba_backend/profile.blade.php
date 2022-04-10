@extends('layouts.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="register">
    <div class="row">
        <div class="col-sm-6">
            
            <form class="card-form" method="post" action="/profile">
                @method('put')
                
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
                        <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname" placeholder="Enter your full name" value="{{ auth()->user()->fullname }}">
                        @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="r2">
                    <div>
                        <label for="username" class="form-label"><b>username</b></label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter your username" value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="r2">
                    <div>
                        <label for="university" class="form-label"><b>university</b></label>
                        <input type="text" class="form-control @error('university') is-invalid @enderror" id="university" name="university" placeholder="Enter your university" value="{{ old('university') }}">
                        @error('university')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="r2">
                    <div>
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ auth()->user()->email }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-1"><b>save</b></button>
            </form>
            <form action="/change" method="get">
                <button class="btn btn-1"><b>Change Password</b></button>
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
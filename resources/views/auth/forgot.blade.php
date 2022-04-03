@extends('layouts.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container">
    <div class="col-sm-5">
        <div class="row">
            <div style="padding-top: 50px">
                <h1 style="font-family: poppins;"><b>Forgot </b></h1>
                <h1 style="padding-bottom: 20px;">the Password?</h1>
                <h3 style="padding-bottom: 40px;">It’s okay mate, you can reset your password</h3>
                <p style="color: #BFBFBF;">Please enter your valid email that integrated with this account. We will send you the intructions.</p>
            </div>
            <form class="card-form" method="POST" action="{{ route('ForgetPasswordPost') }}">
                @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label"><h3>Email</h3></label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                    <button  type="submit"  class="btn btn-5"><b>Reset Password</b></button>
                </form>
            </div>
            <div style="padding-top: 60px;">
                <div>
                    <a href="/" style="text-decoration: none;"><h2 class="bi bi-arrow-left"> Back</h2></a>
                </div>
            </div>
        </div>

        <div class="col-sm-7">
            <img src="/source/img/forgot.png" class="img-reset-1">
        </div>
    </div>
</div>
@endsection
@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="background">
    <div class="row">
        <div class="col-3">
            <h1><b>Forgot</b></h1>
            <h1><b>the Password?</b></h1>
            <h4><b>It’s okay mate, you can reset your password</b></h4>
            <h6>Please enter your valid email that integrated with this account.</h6>
            <h6>We will send you the intructions.</h6>
            <form class="card-form" method="POST" action="">
                @csrf
                <br>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email</b></label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <br>
                <button class="btn btn-5"><b>Reset Password</b></button>
            </form>
        </div>
        <div class="col">
            <img src="/source/img/forgot.png" class="img-3">
        </div>
    </div>
</div>
@endsection
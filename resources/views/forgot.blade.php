@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="background">
    <h2 style="font-family: poppins;"><b>Forgot the Password?</b></h2>
    <h4><b>It’s okay mate, you can reset your password</b></h4>
    <h6>Please enter your valid email that integrated with this account. We will send you the intructions.</h6>
    <div class="row">
        <div class="col">
            <form class="card-form" method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email</b></label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <button>Reset Password</button>
            </form>
        </div>
        <div class="col">
            <img src="/source/img/forgot.png" alt="">
        </div>
    </div>
</div>
@endsection
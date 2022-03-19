@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="background">
    <h2 style="font-family: poppins;"><b>Register your account</b></h2>
    <h6>Your journey will begin from here</h6>
    <div class="row">
        <div class="col">
            <form class="card-form" method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="fullname" class="form-label"><b>Full Name</b></label>
                    <input type="text" class="form-control" id="fullname" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email</b></label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><b>Password</b></label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"><b>Confirm Password</b></label>
                    <input type="password" id="" class="form-control" aria-describedby="passwordHelpBlock" required>
                </div>
                <button>Register</button>
            </form>
        </div>
        <div class="col">
            <img src="/source/img/register.png" alt="">
        </div>
    </div>
</div>
@endsection
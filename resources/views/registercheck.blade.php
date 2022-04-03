@extends('layouts.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="registercheck">
    <div class="col-sm-12">
        <div>
            <div class="image"> <img src="/source/img/register.png" width="440px" height="428px"> </div>
        </div>
        <div class="notif shadow-lg">
            <h3 style="padding-bottom: 2px;">
                We are already send you a verification email
            </h3>
            <p>
                Please check your email to verify your registration
            </p>
        </div>
        <div class="rc-1"> 
            <p>Didn’t get the email?</p>
        </div>
        <div class="rc-2">
            <a class="btn btn-6" href="#">Resend Email</a>
        </div>
    </div>
</div>
@endsection
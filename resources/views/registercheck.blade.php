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
            {{-- @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
            @endif    --}}

        </div>
        <div class="rc-1"> 
            {{-- <p>Didn’t get the email?</p> --}}
        </div>
        <div class="rc-2">
            {{-- <form action="/login" method="get">
            <button class="btn btn-6"><b>Resend Email</b></button>
        </form> --}}
        </div>
    </div>
</div>
@endsection
@extends('layouts.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="resetcheck">
    <div class="col-sm-5" style="padding-top: 180px;">
        <div class="row">
            <div>
              <h1 style="font-family: poppins; padding-bottom: 25px;"><b>Reset your password</b></h1>
              <p style="padding-bottom: 51px;">Please remember your new password carefully</h6>
            </div>
            <div class="notif shadow-lg">
                <h3>
                  Congratulations! your password has been changed successfully 
                </h3>
            </div>
        </div>
        <div class="row" style="padding-top: 51px;">
          <div class="backtologin">
            <a href="/" style="text-decoration: none;"><h2 class="bi bi-arrow-left"> Back To Login</h2></a>
          </div>
      </div>
    </div>
    <div class="col-sm-7">
      <img src="/source/img/forgot.png" class="img-reset-1">
    </div>
</div>

@endsection
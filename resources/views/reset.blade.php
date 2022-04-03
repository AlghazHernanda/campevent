@extends('layouts.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container">
    <div class="col-sm-5">
        <div class="row">
            <div>
              <h1 style="font-family: poppins; padding-bottom: 15px;"><b>Reset your password</b></h1>
              <p style="padding-bottom: 30px;">Please remember your new password carefully</h6>
            </div>
            <div class="form-reset" style="padding-top: 20px;">
              <label for="#" class="form-label"><h3>Password</h3></label>
              <input type="text" class="form-control" name="#" id="#" placeholder="Enter your new password">
            </div>
            <div class="form-reset" style="padding-top: 16px;">
              <label for="#" class="form-label"><h3>Confirm Password</h3></label>
              <input type="password" id="#" name="#" class="form-control" placeholder="Confirm your password">
            </div>
        </div>
        <div class="row" style="padding-top: 40px;">
          <div>
            <a href="/resetcheck"><button class="btn btn-4">Reset Password</button></a>
          </div>
      </div>
    </div>
    <div class="col-sm-7">
      <img src="/source/img/forgot.png" class="img-reset-1">
    </div>
</div>
@endsection
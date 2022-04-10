@extends('layouts.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container">
    <div class="col-sm-5">
        <div class="row">
          <form action="/change" method="POST"> 

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

            
          
            <div>
              <h1 style="font-family: poppins; padding-bottom: 15px;"><b>Reset your password</b></h1>
              <p style="padding-bottom: 30px;">Please remember your new password carefully</h6>
            </div>

            <div class="form-reset" style="padding-top: 20px;">
              <label for="#" class="form-label"><h3>Old password</h3></label>
              <input type="password" id="current_password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autofocus placeholder="Enter your new password">
              @error('current_password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-reset" style="padding-top: 20px;">
              <label for="#" class="form-label"><h3>Password</h3></label>
              <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autofocus placeholder="Enter your new password">
              @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-reset" style="padding-top: 16px;">
              <label for="#" class="form-label"><h3>Confirm Password</h3></label>
              <input type="password" id="password-confirm" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autofocus placeholder="Confirm your password">
              @error('password_confirmation')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
        </div>
        <div class="row" style="padding-top: 40px;">
          <div>
            <button type="submit" class="btn btn-4">
              Reset Password
          </button>
            {{-- <a href="/resetcheck"><button class="btn btn-4">Reset Password</button></a> --}}
          </div>
        </form>
      </div>
    </div>
    <div class="col-sm-7">
      <img src="/source/img/forgot.png" class="img-reset-1">
    </div>
</div>
@endsection
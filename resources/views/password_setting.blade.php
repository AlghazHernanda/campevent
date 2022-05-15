@extends('layouts.passwordsetting') {{-- ini memanggil file main yang di dalam layout --}}
@section('password')
    <div class="psetting">
        <div>
            <div class="notif shadow-lg">
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

                    <h1 class="h1-psetting">Change Password</h1>
                    <p class="p-psetting">Your new password must be different form previous used password. Minimum length
                        is 6 Characters</p>
                    <div class="form-change">
                        <label for="#" class="form-label">
                            <h2 class="h2-psetting">Old Password</h2>
                        </label>
                        <input type="password" id="current_password"
                            class="form-control @error('current_password') is-invalid @enderror" name="current_password"
                            placeholder="Enter your previous password">
                        @error('current_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-change">
                        <label for="#" class="form-label">
                            <h2 class="h2-psetting">New Password</h2>
                        </label>
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" placeholder="Enter your new password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-change">
                        <label for="#" class="form-label">
                            <h2 class="h2-psetting">Confirm New Password</h2>
                        </label>
                        <input type="password" id="password-confirm"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" placeholder="Confirm your new password">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-psetting" data-bs-toggle="modal" data-bs-target="#myModal">
                            Change Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="image"> <img class="vector" src="/source/img/Vector.png"> </div>
                    <h2 class="h2-modal">
                        Your password has been changed
                    </h2>
                    <a href="#"><button class="btn btn-modal">Back to profile</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

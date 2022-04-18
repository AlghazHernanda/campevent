@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="header">
        <div>
            <h1 class="h1-header">Profile Setting</h1>
        </div>
        <hr class="hr">
    </div>
    <div class="profile">
        <div class="row">
            <div class="col-sm-8">
                <div class="card shadow" style="background-color: #F3F4F8; border-radius: 20px;">
                    <div class="card-left">
                        <h2 class="h2-profile">Personal Information</h2>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="rounded mb-3 mb-md-0" style="padding-top: 28px;">
                                    <div class="image"> <img class="rounded-circle" src="bariz1.png" width="120" height="120px"> </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <a href="#"><button class="btn btn-1">Upload Photo</button></a>
                                <h5 class="h5-pi">*Image files should be .png or .jpg</h5>
                            </div>
                            <div class="col-sm-2">
                                <a href="#"><button class="btn btn-2">Delete</button></a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 44px;">
                            <div class="col-sm-6">
                                <div class="form-login">
                                    <label for="#" class="form-label"><h6 class="h6-form">Full Name</h6></label>
                                    <input type="text" class="form-control" name="email" id="#" placeholder="Enter your full name">
                                </div>
                                <div class="form-login" style="padding-top: 26px;">
                                    <label for="#" class="form-label"><h6 class="h6-form">Username</h6></label>
                                    <input type="text" class="form-control" name="email" id="#" placeholder="Enter your username">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-login">
                                    <label for="#" class="form-label"><h6 class="h6-form">University</h6></label>
                                    <input type="text" class="form-control" name="email" id="#" placeholder="Enter your University">
                                </div>
                                <div class="form-login" style="padding-top: 26px;">
                                    <label for="#" class="form-label"><h6 class="h6-form">Email</h6></label>
                                    <input type="text" class="form-control" name="email" id="#" placeholder="Enter your username">
                                </div>
                            </div>
                            <div class="col-sm-12" style="text-align: center;">
                                <a href="#"><button class="btn btn-3">Save Change</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card shadow" style="background-color: #F3F4F8; border-radius: 20px;">
                    <div class="card-right">
                        <h2 class="h2-profile">Password Settings</h2>
                        <h4 class="h4-ps">You can change your previous password with your new password</h4>
                        <a href="#"><button class="btn btn-4">Change Password</button></a>
                    </div>
                </div>  
            </div>
        </div> 
        <div class="col-sm-12">
            <a href="#"><button class="btn btn-5">Logout</button></a>
        </div>
    </div>

@endsection
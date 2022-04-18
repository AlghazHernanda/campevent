@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="psetting">
        <div>
            <div class="notif shadow-lg">
                <h1 class="h1-psetting">Change Password</h1>
                <p class="p-psetting">Your new password must be different form previous used password. Minimum length is 6 Characters</p>
                <div class="form-change">
                    <label for="#" class="form-label"><h2 class="h2-psetting">Old Password</h2></label>
                    <input type="password" class="form-control" name="#" id="#" placeholder="Enter your previous password">
                </div>
                <div class="form-change">
                    <label for="#" class="form-label"><h2 class="h2-psetting">New Password</h2></label>
                    <input type="password" id="#" name="#" class="form-control" placeholder="Enter your new password">
                </div>
                <div class="form-change">
                    <label for="#" class="form-label"><h2 class="h2-psetting">Confirm New Password</h2></label>
                    <input type="password" id="#" name="#" class="form-control" placeholder="Confirm your new password">
                </div>
                <div>
                    <button type="button" class="btn btn-psetting" data-bs-toggle="modal" data-bs-target="#myModal">
                        Change Password
                    </button>
                </div>
            </div>
        </div>
    </div>
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <div class="image"> <img class="vector" src="Vector.png"> </div>
                <h2 class="h2-modal">
                    Your password has been changed
                </h2>
                <a href="#"><button class="btn btn-modal">Back to profile</button></a>
            </div>
          </div>
        </div>
      </div>
@endsection
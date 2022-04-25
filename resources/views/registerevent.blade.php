@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container-fluid">
        <div class="row">

          <div class="kiri">
              <div class="text-kiri">
                <h1 class="h1-kiri">Promote with Us!</h1>
                <center>
                  <h2 style="padding-top: 28px;">Active</h2>
                  <h2 style="padding-left: 345px;">Productive</h2>
                </center>
              </div>
              <div>
                <img src="hero.png" class="img-hero" style="">
            </div>
          </div>

          <div class="kanan">
              <div class="text-kanan"> 
                <h2 class="h2-kanan">Register your Event</h2>
                <h3 class="h3-kanan">Holla! you can promote your event with us</h3>
              </div>
              <div class="container-fluid" style="padding-top: 31px;">
                  <div class="row">
                    <!-- Section 1 -->
                      <div class="col-sm-6">
                        <div class="form-event">
                            <label for="#" class="form-label"><h2 class="h2-form">Event Title</h2></label>
                            <input type="text" class="fc-sc1 form-control" name="#" id="#" placeholder="Enter your event title">
                        </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="drop-event">
                            <h2 class="h2-form" style="padding-bottom: 10px; padding-left: 35px;">Event Theme</h2>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" style="margin-left: 35px;" data-bs-toggle="dropdown" aria-expanded="false">
                                Select Theme
                            </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Tech</a></li>
                                <li><a class="dropdown-item" href="#">Sport</a></li>
                                <li><a class="dropdown-item" href="#">Social</a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- Section 1 -->
                      <hr class="garis">
                      <!-- Section 2 -->
                      <div>
                        <h2 class="h2-form" style="padding-bottom: 10px; padding-left: 0px;">Event Theme</h2>
                      </div>
                      <div class="row">
                          <form class="col-sm-4">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="paid" name="hobby" />
                              <label class="form-check-label" for="paid">
                                  <div class="row text-card" style="margin-left: 10px;">
                                    <div class="col status-card">Paid</div>
                                    <div class="col info-card">online</div>
                                  </div>
                              </label>
                            </div>
                          </form>
                          <form class="col-sm-4">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="paid" name="hobby" />
                              <label class="form-check-label" for="paid">
                                  <div class="row text-card" style="margin-left: 10px;">
                                    <div class="col status-card">Paid</div>
                                    <div class="col info-card">offline</div>
                                  </div>
                              </label>
                            </div>
                          </form>
                      </div>
                      <div class="row">
                        <form class="col-sm-4">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="paid" name="hobby" />
                            <label class="form-check-label" for="paid">
                                <div class="row text-card" style="margin-left: 10px;">
                                  <div class="col status-card-2">Free</div>
                                  <div class="col info-card">online</div>
                                </div>
                            </label>
                          </div>
                        </form>
                        <form class="col-sm-4">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="paid" name="hobby" />
                            <label class="form-check-label" for="paid">
                                <div class="row text-card" style="margin-left: 10px;">
                                  <div class="col status-card-2">Free</div>
                                  <div class="col info-card">offline</div>
                                </div>
                            </label>
                          </div>
                        </form>
                      </div>
                      <!-- Section 2 -->
                      <hr class="garis-2">
                      <!-- Section 3 -->
                      <div class="col-sm-6">
                        <div class="form-description">
                            <label for="#" class="form-label"><h2 class="h2-form">Event Description</h2></label>
                            <textarea type="text" class="fc-sc3 form-control" name="#" id="#" placeholder="Drop the description of your event"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <h2 class="h2-form" style="padding-bottom: 9px; padding-left: 35px;">Date</h2>
                        <div class="input-group">
                          <i class="bi bi-calendar-date input-group-text"></i>
                          <input type="text" class="datepicker form-control" placeholder="DD-MM-YYYY">
                          </div>
                      </div>
                      <!-- Section 3 -->
                      <hr class="garis-2">
                      <!-- Section 4 -->
                      <div>
                        <h2 class="h2-form" style="padding-top: 19px; padding-left: 0px;">Brochure</h2>
                        <div class="row" style="padding-left: 113px;">
                          <div class="col-sm-2">
                            <a href="#"><button class="btn btn-form-1">Upload</button></a>
                          </div>
                          <div class="col-sm-2">
                            <a href="#"><button class="btn btn-form-2">Delete</button></a>
                          </div>
                        </div>
                      </div>
                      <!-- Section 4 -->
                      <hr class="garis-2" style="margin-top: 25px;">
                      <!-- Section 5 -->
                      <div class="row">
                        <div class="col-sm-7">
                          <div class="form-description">
                              <label for="#" class="form-label"><h2 class="h2-form">Speaker</h2></label>
                              <textarea type="text" class="fc-sc3 form-control" name="#" id="#" placeholder="Please insert event speaker with list"></textarea>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-event">
                            <label for="#" class="form-label"><h2 class="h2-form">Price (in rupiah)</h2></label>
                            <input type="text" class="fc-sc5 form-control" name="#" id="#" placeholder="Rp">
                          </div>
                        </div>
                      </div>
                      <!-- Section 5 -->
                      <hr class="garis-2" style="margin-bottom: 64px;">
                      <div class="col-sm-12">
                        <a href="#"><button class="btn btn-register">Register your event</button></a>
                      </div>
                  </div>
               </div>
          </div>
        </div>
      </div>
@endsection
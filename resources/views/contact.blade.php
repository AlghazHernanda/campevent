@extends('layouts.contact') {{-- ini memanggil file main yang di dalam layout --}}
@section('contact')
    <div id="Contact">
        <div class="row">
            <div class="col-sm-5">
                <h1 class="h1-kiri">Contact <span style="color :#7C684A">Us</span>!</h1>
                <h2 class="h2-kiri">Reach us and our buddies will reach you within 24 hours</h2>
                <div class="row emaul">
                    <div class="col-sm-1">
                        <p class="bi bi-envelope-fill fs-1"></p>
                    </div>
                    <div class="col-sm-11">
                        <h4 class="h4-kiri">campevent2022@gmail.com</h4>
                    </div>
                </div>
                <div class="row location">
                    <div class="col-sm-1">
                        <p class="bi bi-geo-alt-fill fs-1"></p>
                    </div>
                    <div class="col-sm-11">
                        <h6 class="h6-kiri">Casa De La Madre, Jl. Kolonel Ahmad Syam No.702, Cikeruh, Jatinangor,
                            Kabupaten Sumedang, Jawa Barat 45363</h6>
                    </div>
                </div>
                <div class="foto col-sm-12">
                    <img src="/source/img/Group.png" class="group">
                </div>
            </div>

            <div class="col-sm-7">
                <form action="/contact" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-name">
                            <label for="#" class="form-label">First Name</label>
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="#" placeholder="Enter your first name">
                            @error('firstname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6" style="padding-left: 25px;">
                        <div class="form-name">
                            <label for="#" class="form-label">Last Name</label>
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" id="#" placeholder="Enter your last name">
                            @error('lastname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 40px;">
                    <div class="col-sm-6">
                        <div class="form-email">
                            <label for="#" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="#" placeholder="Enter your email">
                            @error('lastname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6" style="padding-left: 25px;">
                        <div class="form-number">
                            <label for="#" class="form-label">Handphone Number</label>
                            <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="#"
                                placeholder="Enter your handphone number">
                                @error('message')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 40px;">
                    <div class="col-sm-12">
                        <div class="form-question">
                            <label for="#" class="form-label">Question or Message</label>
                            <textarea type="text" class="fc-q form-control @error('message') is-invalid @enderror" name="message" id="#" placeholder="Enter your question or message"></textarea>
                            @error('message')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="button col-sm-12">
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="#"><button class="btn btn-send">Send</button></a>
                        </div>
                        <div class="col-sm-2">
                           <button type="submit" class="btn btn-back">Back</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection

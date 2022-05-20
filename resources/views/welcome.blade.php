@extends('layouts.home') {{-- ini memanggil file main yang di dalam layout --}}
@section('landing')
    <div id="sectionOne">
        <div class="row">
            <div class="col-sm-7" style="padding-top: 181px;">
                <div class="searchbox">
                    <h1 class="h1-secOne">UPGRADE YOURSELF</h1>
                    <h1 class="h1-secOne" style="padding-bottom: 8px;">WITH US!</h1>
                    <h3 class="h3-secOne">Find your favorite event for upgrading your</h3>
                    <h3 class="h3-secOne" style="padding-bottom: 50px;">skill</h3>
                </div>
                <div class="row">
                    <div class="form-outline col-sm-5">
                        <form action="/listevent">
                        <input type="search" id="#" class="form-control"  name="search" value="{{ request('search') }}"  placeholder="Search your favorite event"
                            aria-label="Search" />
                    </div>
                    <div class="col-sm">
                        <button class="btn btn-1" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="padding-top: 169px;">
                <div>
                    <img src="/source/img/landing-box.png" class="img-landingbox">
                </div>
            </div>
        </div>
    </div>
    <!-- Section 1 -->

    <!-- Section 2 -->
    <div id="sectionTwo">
        <div class="caption-sectwo">
            <h2 class="h2-secTwo">We offer the best service</h2>
            <h3 class="h3-secTwo">Only serve you with best recomendation. We guarantee you that Campevent is</h3>
            <h3 class="h3-secTwo" style="padding-bottom: 33px;">the best platform for student event</h3>
        </div>
        <div class="icon-secTwo row">
            <div class="col-sm-3">
                <a href="#">
                    <button class="btn comprehensive"><img src="/source/img/component1.jpg" class="img-component"></button>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <button class="btn uptodate"><img src="/source/img/component2.jpg" class="img-component"></button>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <button class="btn trusted"><img src="/source/img/component3.jpg" class="img-component"></button>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <button class="btn hq"><img src="/source/img/component4.jpg" class="img-component"></button>
                </a>
            </div>
        </div>
        <div class="text-secTwo row">
            <div class="col-sm-3">
                <h4 class="h4-secTwo" style="padding-top: 10px; padding-bottom: 18px;">Comprehensive</h4>
                <h5 class="h5-secTwo" style="padding-bottom: 104px;">We provide many kind of event than you can join
                    for upgrading yourself</h5>
            </div>
            <div class="col-sm-3">
                <h4 class="h4-secTwo" style="padding-top: 10px; padding-bottom: 18px;">Up to date</h4>
                <h5 class="h5-secTwo" style="padding-bottom: 104px;">We always update the newest event in every
                    condition</p>
            </div>
            <div class="col-sm-3">
                <h4 class="h4-secTwo" style="padding-top: 10px; padding-bottom: 18px;">Trusted</h4>
                <h5 class="h5-secTwo" style="padding-bottom: 104px;">Don’t worry, your transaction is handled by us.
                </h5>
            </div>
            <div class="col-sm-3">
                <h4 class="h4-secTwo" style="padding-top: 10px; padding-bottom: 18px;">High Quality</h4>
                <h5 class="h5-secTwo" style="padding-bottom: 104px;">We only show high quality event for your better
                    future</h5>
            </div>
        </div>
    </div>
    <!-- Section 2 -->

    <!-- Section 3 -->
    <div id="sectionThree">
        <div class="row">
            <div class="col-sm-9">
                <h1 style="padding-bottom: 20px;">Upcoming Event</h1>
                <h3 class="h3-secThree">Don’t worry, you can attend the nearest event by our recomendations</h3>
            </div>
            <div class="col-sm-3">
                <a href="#" style="padding-right: 40px;"><button class="btn btn-1" data-bs-target="#demo"
                        data-bs-slide="prev"><i class="bi bi-arrow-left"></i></button></a>
                <a href="#"><button class="btn btn-1" data-bs-target="#demo" data-bs-slide="next"><i
                            class="bi bi-arrow-right"></i></button></a>
            </div>
        </div>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row" style="padding-top: 38px;">
                        @foreach ($events as $event)
                        <div class="col">
                            <div class="card">
                                <div class="photo">
                                    <img src="/source/img/ifest.png" class="ifest" alt=" " />
                                    <div class="row text-card">
                                        <div class="col status-card">Paid</div>
                                        <div class="col info-card">online</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="bi bi-person-circle"> Roisyal </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="#"><button class="btn btn-card">See Details</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        {{-- <div class="col">
                            <div class="card">
                                <div class="photo">
                                    <img src="/source/img/ifest.png" class="ifest" alt=" " />
                                    <div class="row text-card">
                                        <div class="col status-card">Paid</div>
                                        <div class="col info-card">online</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="bi bi-person-circle"> Roisyal </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="#"><button class="btn btn-card">See Details</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="photo">
                                    <img src="/source/img/ifest.png" class="ifest" alt=" " />
                                    <div class="row text-card">
                                        <div class="col status-card">Paid</div>
                                        <div class="col info-card">online</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="bi bi-person-circle"> Roisyal </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="#"><button class="btn btn-card">See Details</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="photo">
                                    <img src="/source/img/ifest.png" class="ifest" alt=" " />
                                    <div class="row text-card">
                                        <div class="col status-card">Paid</div>
                                        <div class="col info-card">online</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="bi bi-person-circle"> Roisyal </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="#"><button class="btn btn-card">See Details</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row" style="padding-top: 38px;">
                        <div class="col">
                            <div class="card">
                                <div class="photo">
                                    <img src="/source/img/ifest.png" class="ifest" alt=" " />
                                    <div class="row text-card">
                                        <div class="col status-card">Paid</div>
                                        <div class="col info-card">online</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="bi bi-person-circle"> Roisyal </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="#"><button class="btn btn-card">See Details</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="photo">
                                    <img src="/source/img/ifest.png" class="ifest" alt=" " />
                                    <div class="row text-card">
                                        <div class="col status-card">Paid</div>
                                        <div class="col info-card">online</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="bi bi-person-circle"> Roisyal </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="#"><button class="btn btn-card">See Details</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="photo">
                                    <img src="/source/img/ifest.png" class="ifest" alt=" " />
                                    <div class="row text-card">
                                        <div class="col status-card">Paid</div>
                                        <div class="col info-card">online</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="bi bi-person-circle"> Roisyal </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="#"><button class="btn btn-card">See Details</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="photo">
                                    <img src="/source/img/ifest.png" class="ifest" alt=" " />
                                    <div class="row text-card">
                                        <div class="col status-card">Paid</div>
                                        <div class="col info-card">online</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="bi bi-person-circle"> Roisyal </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="#"><button class="btn btn-card">See Details</button></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="padding-top: 99px;">
            <a href="/listevent"><button class="btn btn-3">Explore All Events</button></a>
        </div>
    </div>


    <!-- Section 4 -->
    <div id="sectionFour">
        <div class="row">
            <div class="col-sm-4" style="padding-top: 28px;">
                <img src="/source/img/vector-image-section4.png" class="img-section4">
            </div>
            <div class="col-sm-8">
                <h1 class="h1-secFour">Do you have an impactful event for students?</h1>
                <h3 class="h3-secFour">You can boost your event and promote with us!</h3>
                <a href="/RegisterEvent"><button class="btn btn-1">Register Your Event</button></a>
            </div>
        </div>
    </div>
    <!-- Section 4 -->

    <!-- Section 5 -->
    <div id="sectionFive">
        <div class="col-sm-12">
            <div class="notif shadow-lg">
                <div class="row">
                    <div class="capt-secFive col-sm-8">
                        <h2 class="h2-secFive">Is there any problem</h2>
                        <h2 class="h2-secFive">issue?</h2>
                        <h4 class="h4-secFive">Don’t worry, we have 24/7 customer service for you to solve your problem
                        </h4>
                        <a href="/contact"><button class="btn btn-1">Contact Us</button></a>
                    </div>
                    <div class="col-sm-4">
                        <img src="/source/img/vector-image-section5.jpg" class="img-section5">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 5 -->
@endsection

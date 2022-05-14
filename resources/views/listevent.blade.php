@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div id="section1">
    <div class="col-sm-12">
        <div class="searchbox">
            <div class="row">
                <div class="col-sm">
                    <div class="form-outline1">
                        <i class="bi bi-search fs-5"></i>
                        <input type="search" id="#" class="form-control1" placeholder="Search your favorite event" aria-label="Search"/>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-outline2">
                        <i class="bi bi-geo-alt fs-5"></i>
                        <input type="search" id="#" class="form-control2" placeholder="Event location" aria-label="Search"/>
                    </div>
                </div>
                <div class="col-sm">
                    <a href="#"><button class="btn btn-1">Search</button></a>
                </div>
                <div class="col-sm">
                    <a href="#"><button class="btn btn-2">Register your event</button></a>  
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section2">
    <div class="row">
        <div class="col-sm-3">
            <div class="filter">
                <!-- 1 -->
                <h4 style="padding-bottom: 30px;">Events</h4>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Talkshow</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Seminar</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Bootcamp</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Training</p>
                </div>
                <!-- 1 -->
                <!-- 2 -->
                <h4 style="padding-bottom: 30px; padding-top: 40px;">Theme</h4>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Tech</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Sport</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Social</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Health</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Music</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Finance</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Fashion</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Education</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Business</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Art</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Lifestyle</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Other</p>
                </div>
                <!-- 2 -->
                <!-- 3 -->
                <h4 style="padding-bottom: 30px; padding-top: 40px;">Method</h4>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Offline</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Online</p>
                </div>
                <!-- 3 -->
                <!-- 4 -->
                <h4 style="padding-bottom: 30px; padding-top: 40px;">Payment type</h4>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Paid</p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="#" name="#"/>
                    <p>Free</p>
                </div>
                <!-- 4 -->
            </div>
        </div>

        <div class="col-sm-9">
            <div class="head">
                <div class="row" style="padding-bottom: 42px;">
                    <div class="col-sm-8">
                        <h2 class="h2-head">Show 50 Events</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="drop-event">
                            <i class="bi bi-sort-down fs-2"></i>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Sort by
                            </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><label class="checkbox"><input type="checkbox"> <i class="bi bi-sort-alpha-down"></i></label></li>
                                    <li><label class="checkbox"><input type="checkbox"> <i class="bi bi-sort-alpha-down-alt"></i></label></li>
                                    <li><label class="checkbox"><input type="checkbox"> Last Updated</label></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="body">

                <div class="row" style="padding-bottom: 40px;">
                    <div class="col">
                        <div class="card">
                        <div class="photo">
                            <img src="ifest.png" class="ifest" alt=" "/>
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
                            <img src="ifest.png" class="ifest" alt=" "/>
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
                            <img src="ifest.png" class="ifest" alt=" "/>
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

                <div class="row" style="padding-bottom: 40px;">
                    <div class="col">
                        <div class="card">
                        <div class="photo">
                            <img src="ifest.png" class="ifest" alt=" "/>
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
                            <img src="ifest.png" class="ifest" alt=" "/>
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
                            <img src="ifest.png" class="ifest" alt=" "/>
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

                <div class="row" style="padding-bottom: 40px;">
                    <div class="col">
                        <div class="card">
                        <div class="photo">
                            <img src="ifest.png" class="ifest" alt=" "/>
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
                            <img src="ifest.png" class="ifest" alt=" "/>
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
                            <img src="ifest.png" class="ifest" alt=" "/>
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

            <div class="col-sm-12">
                <a href="#"><button class="btn btn-3">Load more events</button></a>  
            </div>

        </div>
    </div>
</div>
@endsection
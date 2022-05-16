@extends('layouts.eventdetail')
@section('container')
    <div class="header">
        <div>
            <h1 class="h1-header">Event Details</h1>
        </div>
        <hr class="hr">

        <div class="photo">
            <img src="/source/img/ifest.png" class="ifest" alt=" " />
        </div>

        <div class="techno">
            <div>
                <h2 class="h2-text" style="padding-top: 25px; padding-bottom: 25px;">{{ $event->title }}</h2>
                <div class="row desc">
                    <div class="col-sm">
                        <div class="row text">
                            <div class="col status">Paid</div>
                            <div class="col info">online</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="event">
                            <div class="status-event">Free</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <a href="#"><button class="btn btn-love"><i class="bi bi-heart-fill fs-4"></i></button></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="about">
            <h3>About the event :</h3>
            <h4 class="h4-about">
                {!! $event->desc !!}
            </h4>
            <h3>Date and Time :</h3>
            <p class="bi bi-calendar2-week-fill"> Tuesday, 12 Januari 2021</p>
            <h3 style="padding-top: 40px;">Place :</h3>
            <p class="bi bi-geo-alt-fill"> Zoom Meeting</p>
            <h3 style="padding-top: 40px;">Speaker :</h3>
            <ul class="speaker">
                <li>Roisyal Bariz (CEO Lebahganteng)</li>
                <li>Hadyan Almer (Founder Freeyork.id)</li>
                <li>Many more</li>
            </ul>

            <!-- Ticket -->
            <div class="ticket">
                <p class="bi bi-ticket-fill"> Ticket Price :</p>
                <h2 class="h2-price">Rp 25.000,00</h2>
                <div class="col-sm-12">
                    <!-- Quantity -->
                    {{-- <div class="d-flex">
                        <button class="btn btn-minus"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="bi bi-dash"></i>
                        </button>

                        <div class="form-outline">
                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                        </div>

                        <button class="btn btn-plus"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div> --}}
                    <h6 style="padding-top: 10px;">You can pay with gopay and dana :</h6>
                    <h4 style="padding-top: 10px;">08732122349</h4>
                </div>
            </div>
            <!-- Ticket -->

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="image"> <img class="vector" src="/source/img/Vector.png"> </div>
                            <h2 class="h2-modal">
                                Success
                            </h2>
                            <h3 class="h3-modal">
                                Pay the bill in myEvent page if the event is paid event
                            </h3>
                            <a href="/listevent"><button class="btn btn-modal">Back to list event</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

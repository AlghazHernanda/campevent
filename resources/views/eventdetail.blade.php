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
                <h2 class="h2-text" style="padding-top: 25px; padding-bottom: 25px;">TECHNOPRENEUR 2021</h2>
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
                        <i class="bi bi-heart-fill fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <div id="about">
            <h3>About the event :</h3>
            <h4 class="h4-about">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lacus faucibus amet cursus cursus risus
                faucibus. Pulvinar nulla faucibus orci nisi lacus ullamcorper nascetur. A, scelerisque felis erat
                consectetur sem urna egestas ac. Adipiscing nec nec gravida elit, proin elementum et. Fermentum est vitae at
                ornare erat eget. Ante quis vulputate ut et blandit elit id eget suspendisse. Placerat curabitur proin lorem
                tortor aenean dolor nullam mattis. Commodo ipsum amet, velit, enim mauris. At velit dolor nunc lorem
                ullamcorper. Vitae felis, velit, a, ac, congue sit morbi. Convallis id gravida non nisl, eleifend ipsum
                volutpat purus nisi.
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
                    <div class="d-flex">
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
                    </div>
                    <a href="#"><button class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#myModal">Buy
                            Ticket</button></a>
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

@extends('layouts.eventadmin')
@section('eventadmin')
    <div class="dashboard">
        <div class="header">
            <div>
                <h1 class="h1-header">Event Details</h1>
            </div>
            <hr class="hr">

            <div class="photo">
                <img src="ifest.png" class="ifest" alt=" " />
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

            <div class="about">
                <h3>About the event :</h3>
                <h4 class="h4-about">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lacus faucibus amet cursus cursus risus
                    faucibus. Pulvinar nulla faucibus orci nisi lacus ullamcorper nascetur. A, scelerisque felis erat
                    consectetur sem urna egestas ac. Adipiscing nec nec gravida elit, proin elementum et. Fermentum est
                    vitae at ornare erat eget. Ante quis vulputate ut et blandit elit id eget suspendisse. Placerat
                    curabitur proin lorem tortor aenean dolor nullam mattis. Commodo ipsum amet, velit, enim mauris. At
                    velit dolor nunc lorem ullamcorper. Vitae felis, velit, a, ac, congue sit morbi. Convallis id gravida
                    non nisl, eleifend ipsum volutpat purus nisi.
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
            </div>
        </div>

        <div class="row" style="padding-bottom: 101px;">
            <div class="col-sm-2">
                <a href="#"><button class="btn btn-acc">Accept</button></a>
            </div>
            <div class="col-sm">
                <a href="#"><button class="btn btn-del">Delete</button></a>
            </div>
        </div>
    </div>
@endsection

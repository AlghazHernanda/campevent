@extends('layouts.eventdetail')
@section('container')
@php
function convertDateDBtoIndo($string){
    // contoh : 2019-01-30
    
    $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];
 
    $tanggal = explode("-", $string)[2];
    $bulan = explode("-", $string)[1];
    $tahun = explode("-", $string)[0];
 
    return $tanggal . " " . $bulanIndo[abs($bulan)] . " " . $tahun;
}
@endphp
    <div class="header">
        <div>
            <h1 class="h1-header">Event Details</h1>
        </div>
        <hr class="hr">

        <div class="photo">
            <img src="{{ $event->image }}" class="ifest" alt=" " />
        </div>

        <div class="techno">
            <div>
                <h2 class="h2-text" style="padding-top: 25px; padding-bottom: 25px;">{{ $event->title }}</h2>
                <div class="row desc">
                    <div class="col-sm">
                        <div class="row text">
                            @for ($i = 0; $i < 2; $i++)
                            <div class="col status">{{ $event->eventTheme[$i] }}</div>
                            @endfor
                            
                            {{-- <div class="col info">online</div> --}}
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="event">
                            <div class="status-event">Free</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <form action="/eventdetail/{{ $event->id }}" method="post">
                        @csrf
                        <button class="btn btn-love"><i class="bi bi-heart-fill fs-4"></i></button>
                        </form>
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
            <p class="bi bi-calendar2-week-fill">{{ convertDateDBtoIndo($event->date)}}</p>
            <h3 style="padding-top: 40px;">Place :</h3>
            <p class="bi bi-geo-alt-fill"> Zoom Meeting</p>
            <h3 style="padding-top: 40px;">Speaker :</h3>
            <ul class="speaker">
                <li>{{ $event->speaker }}</li>
                {{-- <li>Hadyan Almer (Founder Freeyork.id)</li>
                <li>Many more</li> --}}
            </ul>

            <!-- Ticket -->
            <div class="ticket">
                <p class="bi bi-ticket-fill"> Ticket Price :</p>
                <h2 class="h2-price">Rp.{{ format_uang($event->price) }}</h2>
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
                    <h4 style="padding-top: 10px;">{{ $event->no_hp }}</h4>
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

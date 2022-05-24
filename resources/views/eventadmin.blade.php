@extends('layouts.eventadmin')
@section('eventadmin')
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
                    <h2 class="h2-text" style="padding-top: 25px; padding-bottom: 25px;">{{ $event->title }}</h2>
                    <div class="row desc">
                        <div class="col-sm">
                            <div class="row text">
                                @for ($i = 0; $i < 2; $i++)
                                <div class="col status">{{ $event->eventTheme[$i] }}</div>
                                @endfor
                            </div>
                        </div>
                        <div class="col-sm">
                            {{-- <div class="event">
                                <div class="status-event">Free</div>
                            </div> --}}
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
                    {!! $event->desc !!}
                </h4>
                <h3>Date and Time :</h3>
                <p class="bi bi-calendar2-week-fill">{{ convertDateDBtoIndo($event->date)}}</p>
                <h3 style="padding-top: 40px;">Speaker :</h3>
                <ul class="speaker">
                    <li>{{ $event->speaker }}</li>
                   
                </ul>
            </div>
        </div>

        <div class="row" style="padding-bottom: 101px;">
            <div class="col-sm-2">
                <a href="/admin/accept/{{ $event->id }}"><button class="btn btn-acc">Accept</button></a>
            </div>
            <div class="col-sm">
                <form action="/deleteEvent/{{ $event->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
               <button class="btn btn-del" type="submit" onclick="return confirm('are you sure?')">Delete</button>
            </form>
            </div>
        </div>
    </div>
@endsection

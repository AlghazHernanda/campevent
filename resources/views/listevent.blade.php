@extends('layouts.listevent') {{-- ini memanggil file main yang di dalam layout --}}
@section('listevent')
    @php
    function convertDateDBtoIndo($string)
    {
        // contoh : 2019-01-30

        $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $tanggal = explode('-', $string)[2];
        $bulan = explode('-', $string)[1];
        $tahun = explode('-', $string)[0];

        return $tanggal . ' ' . $bulanIndo[abs($bulan)] . ' ' . $tahun;
    }
    @endphp
    <div id="section1">
        <div class="col-sm-12">
            <div class="searchbox">
                <div class="row">
                    <div class="col-sm">
                        <div class="form-outline1">
                            <i class="bi bi-search fs-5"></i>
                            <form action="/listevent">
                                <input type="search" id="#" class="form-control1" name="search"
                                    value="{{ request('search') }}" placeholder="Search your favorite event"
                                    aria-label="Search" />
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-outline2">
                            <i class="bi bi-geo-alt fs-5"></i>
                            <input type="search" id="#" class="form-control2" placeholder="Event location"
                                aria-label="Search" />
                        </div>
                    </div>
                    <div class="col-sm">
                        <button class="btn btn-1" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-sm">
                        <a href="/RegisterEvent"><button class="btn btn-2">Register your event</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="section2">
        <div class="row">
            <div class="col-sm-3">
                <div class="filter">
                    <h4 style="padding-bottom: 30px; padding-top: 40px;">Theme</h4>
                    @foreach ($eventTypes as $eventType)
                        <div class="form-check">
                            {{-- <input type="checkbox"  class="form-check-input" id="#" name="eventType" /> --}}
                            <a href="/listevent/{{ $eventType->id }}"><button class="btn btn-info"></button></a>
                            <p>{{ $eventType->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-sm-9">
                <div class="head">
                    <div class="row" style="padding-bottom: 42px;">
                        <div class="col-sm-8">
                            <h2 class="h2-head">Show {{ $events->count() }} Events</h2>
                        </div>
                    </div>
                </div>

                <div class="body">
                    <div class="row" style="padding-bottom: 40px;">
                        @foreach ($events as $event)
                            @if ($event->status === 'accepted')
                                <div class="col">
                                    <div class="card">
                                        <div class="photo">
                                            <img src="{{ asset('storage/' . $event->image) }}" class=""
                                                alt=" " />
                                            <div class="row text-card">
                                                @for ($i = 0; $i < 2; $i++)
                                                    <div class="col status-card">{{ $event->eventTheme[$i] }}</div>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <p class="bi bi-calendar-date">{{ convertDateDBtoIndo($event->date) }}
                                                    </p>
                                                </div>
                                                <div class="col-sm">
                                                    <p class="bi bi-person-circle">{{ $event->author->fullname }}</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <a href="/eventdetail/{{ $event->id }}"><button
                                                        class="btn btn-card">See Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="center" style="padding-top: 63px; padding-bottom: 64px;">
                    <div class="pagination">
                        {{ $events->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

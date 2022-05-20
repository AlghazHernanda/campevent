@extends('layouts.dashboard')
@section('dashboard')
    <div class="side-bar col-auto">
        <div class="min-vh-100">
            <div class="logo">
                <span class="d-none d-sm-inline"><img src="/source/img/logo.png" class="logo" alt=" " /></span>
            </div>
            <div class="admin-name">
                <span class="d-none d-sm-inline">Roisyal Bariz</span>
            </div>
            <div class="p-admin">
                <span class=" d-none d-sm-inline">CampEvent Staff</span>
            </div>
            <div class="p-menu">
                <span class=" d-none d-sm-inline">Menu</span>
            </div>
            <ul class="nav" id="menu">
                <li class="nav-item">
                    <a href="#" class="nav-link"><button class="btn">
                            <p class="bi bi-house fs-4"></p>
                        </button>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><button class="btn">
                            <p class="bi bi-calendar-week fs-4"></p>
                        </button>Requested Event</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><button class="btn">
                            <p class="bi bi-door-open fs-4"></p>
                        </button>Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="dashboard col container">
        <h4-dashboard>Welcome Roisyal Bariz</h4-dashboard>

        <div class="info container">
            <div class="row d-flex">
                <div class="col-sm-8" style="padding-top: 13px;">
                    <h2 class="h2-info">Build our company for the best future</h2>
                    <h3 class="h3-info">Give our customers the best services. Active, productive!</h3>
                </div>
                <div class="col-sm-4">
                    <img src="source/img/Success.png" class="success" alt=" " />
                </div>
            </div>
        </div>

        <div class="notif container">
            <div class="row">
                <div class="faq col-sm-4">
                    <div class="row">
                        <div class="col-sm-9">
                            <h5 class="h5-notif" style="padding-top: 12px;">FAQ Content</h5>
                        </div>
                        <div class="col-sm-3">
                            <i class="bi bi-question-circle-fill fs-3"></i>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h3 class="h3-notif">6</h3>
                        <h5 class="h5-notif">Question</h5>
                    </div>
                </div>
                <div class="event col-sm-4">
                    <div class="row">
                        <div class="col-sm-9">
                            <h5 class="h5-notif" style="padding-top: 12px;">FAQ Content</h5>
                        </div>
                        <div class="col-sm-3">
                            <i class="bi bi-calendar-week fs-3"></i>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h3 class="h3-notif">17</h3>
                        <h5 class="h5-notif">Event</h5>
                    </div>
                </div>
            </div>
        </div>

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
        <table class="table table-bordered">
            <thead class="reservation">
                <tr>
                    <th>No</th>
                    <th>Event</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($events as $event)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->status }}</td>
                        <td>Rp.{{ format_uang($event->price) }}</td>
                        <td>{{ convertDateDBtoIndo($event->date) }}</td>
                        <td>
                            <div class="action row">
                                <div class="col-sm">
                                    <a href="/admin/accept/{{ $event->id }}" class="accept">Accept<a></a>
                                </div>
                                <div class="col-sm">
                                    <form action="/deleteEvent/{{ $event->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="delete" onclick="return confirm('are you sure?')"><span
                                                data-feather="x-circle">Delete</span></button>
                                    </form>
                                    {{-- <a href="#" class="delete">Delete<a></a> --}}
                                </div>
                                <div class="col-sm">
                                    <a href="/eventdetail/{{ $event->id }}" class="details">Details<a></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    @endsection

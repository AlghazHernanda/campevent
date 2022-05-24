@extends('layouts.requestevent')
@section('event')
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
    <div class="dashboard col container">
        <div class="dashboard">
            <h2 class="h2-dashboard">Requested Event</h2>
            <p class="p-dashboard">You can accept or decline the event. The event whick you accept will appear in the
                website</p>
            <table class="table table-bordered">
                <thead class="reservation">
                    <tr>
                        <th>No</th>
                        <th>Event</th>
                        <th>status</th>
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
                        <td><a href="/eventadmin/{{ $event->id }}"><button class="btn btn-details">See Details</button></a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>

        </div>
    </div>
@endsection

@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="reservationlist">
        <div class="container">
            <h3 style="padding-bottom: 17px;">Reservation List</h3>       
            <table class="table table-bordered">
              <thead class="reservation">
                <tr>
                  <th>No</th>
                  <th>Event</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Date</th>
                  <th>Payment Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Technopreneur 2021</td>
                  <td>2</td>
                  <td>Rp 25.000,00</td>
                  <td>12/01/2021</td>
                  <td><div class="paymentstatus">Free</div></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container">
            <h3 style="padding-bottom: 17px; padding-top: 122px;">My Event List</h3> 
                 
            <table class="table table-bordered">
              <thead class="eventlist">
                <tr>
                  <th>No</th>
                  <th>Event</th>
                  <th>Price</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach ($events as $event) 
              <tbody>
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $event->title }}</td>
                  <td>{{ $event->price }}</td>
                  <td>{{ $event->date }}</td>
                  <td><div class="paymentstatus">{{ $event->status }}</div></td>
                  <td><div class="row">
                      <div class="col">
                        <a href="/editEvent/{{ $event->id }}"><button class="btn btn-update">Update</button></a>
                      </div>
                      <div class="col">
                        <form action="/deleteEvent/{{ $event->id }}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="btn btn-delete" onclick="return confirm('are you sure?')"><span data-feather="x-circle">Delete</span></button>
                        </form>
                      </div>
                  </div></td>
                </tr>
              </tbody>
              @endforeach
        
            </table>
           
          </div>
    </div>
@endsection
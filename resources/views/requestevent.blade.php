@extends('layouts.requestevent')
@section('event')
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
                        <th>Description</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Technopreneur 2021</td>
                        <td>2</td>
                        <td>Rp 25.000,00</td>
                        <td>12/01/2021</td>
                        <td><a href="#"><button class="btn btn-details">See Details</button></a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection

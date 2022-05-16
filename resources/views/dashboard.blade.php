@extends('layouts.dashboard')
@section('dashboard')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="dashboard col container">
                <h4-dashboard>Welcome Roisyal Bariz</h4-dashboard>

                <div class="info container">
                    <div class="row d-flex">
                        <div class="col-sm-8" style="padding-top: 13px;">
                            <h2 class="h2-info">Build our company for the best future</h2>
                            <h3 class="h3-info">Give our customers the best services. Active, productive!</h3>
                        </div>
                        <div class="col-sm-4">
                            <img src="Success.png" class="success" alt=" " />
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
                            <td>
                                <div class="action row">
                                    <div class="col-sm">
                                        <a href="#" class="accept">Accept<a></a>
                                    </div>
                                    <div class="col-sm">
                                        <a href="#" class="delete">Delete<a></a>
                                    </div>
                                    <div class="col-sm">
                                        <a href="#" class="details">Details<a></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="center container">
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

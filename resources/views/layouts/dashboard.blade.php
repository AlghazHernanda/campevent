<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    {{-- Google Font --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

    {{-- my stylse --}}
    <link rel="stylesheet" href="{{ asset('source/css/dashboard.css') }}">

    <title>CampEvent</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            @yield('dashboard')

        </div>
    </div>
    {{-- <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <img src="/source/img/logo.png" alt=""
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <h4-dashboard>Welcome Roisyal Bariz</h4-dashboard>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link" aria-current="page">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" aria-current="page">
                    Request Event
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" aria-current="page">
                    Logout
                </a>
            </li>
        </ul>

    </div> --}}

    {{-- <div class="container-fluid">
        <div class="row">
            <nav class="sidebar-menu">
                <div class="position-sticky pt-3"></div>
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
                                <h3 class="h3-notif">{{ $contact->count() }}</h3>
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
                                <h3 class="h3-notif">{{ $events->count() }}</h3>
                                <h5 class="h5-notif">Event</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            @yield('container') 

        </div>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>

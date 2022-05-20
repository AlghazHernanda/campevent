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
            <div class="side-bar col-auto">
                <div class="min-vh-100">
                    <div class="logo">
                        <span class="d-none d-sm-inline"><img src="/source/img/logo.png" class="logo"
                                alt=" " /></span>
                    </div>
                    <div class="admin-name">
                        <span class="d-none d-sm-inline">{{ auth()->user()->fullname }}</span>
                    </div>
                    <div class="p-admin">
                        <span class=" d-none d-sm-inline">CampEvent Staff</span>
                    </div>
                    <div class="p-menu">
                        <span class=" d-none d-sm-inline">Menu</span>
                    </div>
                    <ul class="nav" id="menu">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link"><button class="btn">
                                    <p class="bi bi-house fs-4"></p>
                                </button>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="/requestevent" class="nav-link"><button class="btn">
                                    <p class="bi bi-calendar-week fs-4"></p>
                                </button>Requested Event</a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link"><button class="btn">
                                    <p class="bi bi-door-open fs-4"></p>
                                </button>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('dashboard')

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>

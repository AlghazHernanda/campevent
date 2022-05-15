<nav class="navbar navbar-expand-lg" id="Navbar">
    <div class="col-md-6">
        <a class="navbar-brand" href="/"><img class="logo" src="/source/img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                {{-- di bawah ini memakai operator ternary, jadi jika title = home, maka tambahkan kelas active, kalau engga kasih string kosong --}}
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/event">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/faq">FAQ</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            {{-- kalo udah login, tampilin ini --}}
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false" id="navbarDropdownMenuLink">
                        <img class="rounded-circle" src="/source/img/bariz1.png" width="40" height="40px">
                        {{ auth()->user()->fullname }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item profile" href="/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="/myevent">My Event</a></li>
                        <li><a class="dropdown-item" href="/wishlist">Wishlist</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="btn-logout"><i class="bi bi-door-open"></i>Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>

                {{-- kalo belum login, tampilkan logo login --}}
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login"><button class="btn">Login</button></a>
                </li>
            @endauth
        </ul>

    </div>
</nav>

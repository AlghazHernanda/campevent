<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="/source/img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item-1">
          {{-- di bawah ini memakai operator ternary, jadi jika title = home, maka tambahkan kelas active, kalau engga kasih string kosong --}}
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item-2">
          <a class="nav-link" href="/about">Event</a>
        </li>
        <li class="nav-item-3">
          <a class="nav-link" href="/posts">About Us</a>
        </li>
        <li class="nav-item-4">
          <a class="nav-link" href="/categories">FAQ</a>
        </li>
      </ul>


      <ul class="navbar-nav ms-auto">
        {{-- kalo udah login, tampilin ini --}}
        @auth
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Welcom Back, </a> --}}
          {{-- {{ auth()->user()->name }} --}}
          {{-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="/logout" method="post"> --}}

                @csrf
                {{-- <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>

              </form>
            </li>
          </ul>
        </li> --}}

        {{-- kalo belum login, tampilkan logo login --}}
        @else
        {{-- <li class="nav-item-5">
          <a href="/login" class="nav-link"><button class="btn btn-1">Login</button></a>
        </li> --}}
        @endauth
      </ul>


    </div>
  </div>
</nav>
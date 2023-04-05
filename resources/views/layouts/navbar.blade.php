<nav class="navbar navbar-dark shadow-5-strong fixed-top navbar-expand-sm">
    <div class="container-fluid">
        {{--  From her the Login and profile header start  --}}
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </button>
        <ul class="dropdown-menu">
        <a class="nav-link text-dark" href="#"><li class="nav-item"></a>
            @auth
                <li class="nav-item">
                    <a class="nav-link text-dark ms-2" href="#"><i class="bi bi-person-circle"></i>{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link text-dark"><i class="bi bi-door-closed"></i>Logout</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}"><i class="bi bi-door-open"></i>Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}"><i class="bi bi-card-checklist"></i>Register</a>
                    </li>
               
                @endif
            @endauth
        </ul>
    </div>
        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end shadow-5-strong" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-5" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-house listicons"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-5" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-house-heart listicons"></i>About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-5" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-book listicons"></i>Contact US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-5" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-headset listicons"></i>Support</a>
                    </li>
                    {{-- <li class="nav-item">
                         @auth
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link text-white"><i class="bi bi-door-closed"></i>Logout</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}"><i class="bi bi-door-open"></i>Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}"><i class="bi bi-card-checklist"></i>Register</a>
                                </li>
                            @endif
                        @endauth  --}}
                 
                </ul>
              
            </div>
        </div>
    </div>
</nav>

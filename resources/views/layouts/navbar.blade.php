<nav class="navbar navbar-dark shadow-5-strong">
    <div class="container-fluid">
        {{--  From her the Login and profile header start  --}}
        <ul class=""><i class="bi bi-person-circle"></i>
        <a class="nav-link text-dark" href="#"><li class="nav-item"></a>
            @auth
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link text-dark"><i class="bi bi-door-closed"></i>Logout</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('login') }}"><i class="bi bi-door-open"></i>Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('register') }}"><i class="bi bi-card-checklist"></i>Register</a>
                    </li>
                </ul>
                @endif
            @endauth
        </ul>
        
        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end shadow-5-strong" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>
                <button type="button" class="btn-close bg-primary" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-house"></i>Home</a>
                    </li>
                    {{--  Here the login credentialswould be in the hamburger menu
                        
                        <li class="nav-item">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link text-dark"><i class="bi bi-door-closed"></i>Logout</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('login') }}"><i class="bi bi-door-open"></i>Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('register') }}"><i class="bi bi-card-checklist"></i>Register</a>
                                </li>
                            @endif
                        @endauth  --}}
                 
                </ul>
              
            </div>
        </div>
    </div>
</nav>

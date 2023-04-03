<nav class="navbar navbar-dark shadow-5-strong">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{asset('images/justDumplingLogo.png') }}" alt="dumpling blog logo" width="150" height="70"></a>
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
                    <li class="nav-item">
                        @auth
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('login') }}"><i class="bi bi-door-open"></i>Login</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="nav-link text-dark" href="{{ route('register') }}"><i class="bi bi-card-checklist"></i>Register</a>
                        @endif
                    </li>
                    @else
                    @endauth
                 
                </ul>
              
            </div>
        </div>
    </div>
</nav>

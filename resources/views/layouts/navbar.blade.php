<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{asset('images/justDumplingLogo.png') }}" alt="dumpling blog logo" width="150" height="70"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-house"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-door-open"></i>Login</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}"><i class="bi bi-card-checklist"></i>Register</a>
                        @endif
                    </li>
                    @else
                    @endauth
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""><i class="bi bi-calendar-event"></i></i>General Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""><i class="bi bi-cup-straw"></i>Food & Drink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""><i class="bi bi-file-earmark-richtext"></i>Blogs</a>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>

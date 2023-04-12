<nav class="navbar navbar-dark shadow-5-strong fixed-top">
    <div class="container-fluid">
        {{-- From her the Login and profile header start  --}}
        <div class="dropend">
            @auth
            @if(Auth::user()->foto == NULL)
            <img class="image rounded-circle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="/images/DefaultFoto.jpg" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
            @else
            <img class="image rounded-circle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="/DB_Img/post/{{Auth::user()->foto }}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
            @endif
            @endauth
            @guest
            <img class="image rounded-circle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="/images/DefaultFoto.jpg" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
            @endguest
            <ul class="dropdown-menu">
                <a class="nav-link text-white" href="#">
                    <li class="nav-item">
                </a>
                @auth
                <li class="nav-item">
                    <a class="nav-link text-white ms-2" href="#"><i class="bi bi-person-circle"></i>{{ Auth::user()->name }}</a>
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
                @endauth
            </ul>
        </div>
        <a class="navtext card-title text-white fw-bold fs-3" href="/General_Events">GENERAL EVENTS</a>
        <a class="navtext card-title text-white fw-bold fs-3" href="Food_Events">EAT & DRINK</a>
        <a class="navtext card-title text-white fw-bold fs-3" href="Pub_Events">CLUBs</a>
        <a class="navtext card-title text-white fw-bold fs-3" href="/blog">BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="offcanvas offcanvas-end shadow-5-strong" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-1 ms-4 mt-5">
                    {{--   Extramenu  --}}
                    <li class="nav-item dropdown navtextside">
                        <img class="special btn dropdown-toggle mt-5" role="button" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="/images/justDumplingLogo.svg" alt="ddmenu">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item text-white ms-0 col fw-bold" href="/General_Events"><i class="bi bi-calendar-event"></i>General Events</a></li>
                          <li><a class="dropdown-item text-white ms-0 col fw-bold" href="Food_Events"><i class="bi bi-cup-straw"></i>Eat &amp; Drink</a></li>
                          <li><a class="dropdown-item text-white ms-0 col fw-bold" href="Pub_Events"><i class="bi bi-suit-club"></i>Clubs</a></li>
                          <li><a class="dropdown-item text-white ms-0 col fw-bold" href="Smalls_Events"><i class="bi bi-flower1"></i>Blog</a></li>
                        </ul>
                      </li>
                    <li class="nav-item firstclass">
                        <a class="nav-link active text-white col ms-2" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-house listicons"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-2" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-house-heart listicons"></i>About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-2" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-book listicons"></i>Contact US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-2" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-headset listicons"></i>Support</a>
                    </li>
                   
                  </ul>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-dark z-3">
    <div class="container-fluid z-3">
        {{-- From her the Login and profile header start  --}}
        <div class="dropend">
            <div class="cont-navLogo w-100 d-flex">
                @auth
                    @if(Auth::user()->foto == NULL)
                        <img class="image rounded-circle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="/images/DefaultFoto.jpg" alt="profile_image" style="width: 50px;height: 50px; margin: 0.2rem; ">
                    @else
                        <img class="image rounded-circle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="/DB_Img/post/{{Auth::user()->foto }}" alt="profile_image" style="width: 50px;height: 50px; margin: 0.2rem; ">
                    @endif
                @endauth
                @guest
                    <img class="image rounded-circle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="/images/DefaultFoto.jpg" alt="profile_image" style="width: 50px;height: 50px; margin: 0.2rem; ">
                @endguest
                    <ul class="dropdown-menu bg-black bg-opacity-75">
                        @auth
                        <li class="nav-item ms-2">
                            <p class="nav-link text-white ms-2 mb-2"></i>{{ Auth::user()->name }}</a>
                        </li>
                        <hr class="border-white my-0">
                        <li class="ms-2 mt-2">
                            <a class="nav-link text-white ms-2" href="/profile"></i>Profile</a>
                        </li>
                        <li class="nav-item ms-2 mt-2">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="text-white ms-2 "></i>Logout</button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item mb-2 ms-2">
                            <a class="nav-link text-white ms-2" href="{{ route('login') }}"></i>Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item ms-2">
                            <a class="nav-link text-white ms-2" href="{{ route('register') }}"></i>Register</a>
                        </li>
                        @endif
                        @endauth
                    </ul>
            </div>
        </div>
        @if(Request::path() !== "homePage" )
            <div class="navtext w-50 d-flex justify-content-around">
                <a class="fw-bold fs-3" href="/General_Events">GENERAL EVENTS</a>
                <a class="fw-bold fs-3" href="Food_Events">EAT & DRINK</a>
                <a class="fw-bold fs-3" href="Pub_Events">CLUBs</a>
                <a class="fw-bold fs-3" href="Smalls_Events">BLOG</a>
            </div>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="offcanvas offcanvas-end text-bg-dark bg-black" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body w-100">
                <ul class="navbar-nav ">
                    {{--   Extramenu  --}}
                    <li class="nav-item dropdown navtextside">
                        <img class="special btn dropdown-toggle p-0 w-75" role="button" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="/images/Event_Dropdown.png" alt="ddmenu">
                        </a>
                        <ul class="dropdown-menu bg-white bg-opacity-25" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item text-white ms-3 fs-5 p-0 fw-bold" href="/General_Events">General Events</a></li>
                          <li><a class="dropdown-item text-white ms-3 fs-5 p-0 fw-bold" href="/Food_Events">Food & Drink</a></li>
                          <li><a class="dropdown-item text-white ms-3 fs-5 p-0 fw-bold" href="/Pub_Events">Clubs</a></li>
                          <li><a class="dropdown-item text-white ms-3 fs-5 p-0 fw-bold" href="/Smalls_Events">Blog</a></li>
                        </ul>
                      </li>
                    <li class="nav-item firstclass">
                        <a class="nav-link active text-white col ms-2 fs-4 d-flex align-items-center" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-house listicons fs-2 me-3"></i>HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-2 fs-4 d-flex align-items-center" aria-current="page" href="{{ url('/aboutPage') }}"><i class="bi bi-house-heart listicons fs-2 me-3"></i>ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-2 fs-4 d-flex align-items-center" aria-current="page" href="{{ url('/contactPage') }}"><i class="bi bi-book listicons fs-2 me-3"></i>CONTACT US</a>
                    </li>
                    <li>
                        <hr class="border-2">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white col ms-2 fs-4 d-flex align-items-center" aria-current="page" href="{{ url('/homePage') }}"><i class="bi bi-headset listicons fs-2 me-3"></i>SUPPORT</a>
                    </li>
                   
                  </ul>
            </div>
        </div>
    </div>
</nav>
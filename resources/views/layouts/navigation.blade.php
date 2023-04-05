<style>
  .navbar{
    z-index: 2;
  }
  .logo{
    width:25%;
  }
  .navbar{
    box-shadow: 0px 2px 2px rgba(255, 255, 255, 0.25);
  }
</style>

<nav class="navbar navbar-dark bg-black py-3 opacity-75">
  <div class="container-fluid">
    <div class="cont-logo w-25 ps-4">
        <a class="navbar-brand p-0 m-0" href="/">
          <img class="logo" src="/images/justDumplingLogo.svg" alt="">
        </a>
    </div>
    <div class="cont-links w-75 d-flex justify-content-end align-items-center">
        <a href="/home" class="text-decoration-none me-5 text-white fs-4">
            Home
        </a>
        <a href="/about" class="text-decoration-none me-5 text-white fs-4">
            About us
        </a>
        <a href="/contact" class="text-decoration-none me-5 text-white fs-4">
            Contact us
        </a>
        <a href="/yourEvents" class="text-decoration-none me-5 text-white fs-4">
            Your Events
        </a>

        <div class="btn-group dropstart d-flex justify-content-end w-10 me-3 text-white">
          <button
            type="button"
            class="btn-group dropdown-toggle text-end"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            @auth
                @if(Auth::user()->foto === NULL)
                    <img src="/images/DefaultFoto.jpg" class="rounded-circle" alt="">

                @else
                <img src="/DB_Img/post/{{Auth::user()->foto}}" class="rounded-circle" alt="">
                @endif
                </button>
                <ul class="dropdown-menu text-bg-dark" style="">
                  <li><a class="dropdown-item text-white bg-dark" href="#">{{Auth::user()->name}}</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-white bg-dark" href="/profile">Profile</a></li>
                  <li>
                          <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <a class="dropdown-item text-white bg-dark" href="route('logout')"
                                      onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </a>
                          </form>
                  </li>
                </ul>
            @endauth

            @guest
                <img src="/images/DefaultFoto.jpg" class="rounded-circle" alt="">

                </button>
                <ul class="dropdown-menu text-bg-dark" style="">
                  <li><a class="dropdown-item text-white bg-dark" href="#">Anonymous</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-white bg-dark" href="/login">Log In</a></li>
                  <li><a class="dropdown-item text-white bg-dark" href="/register">Register</a></li>
                </ul>
            @endguest
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="offcanvas offcanvas-end text-bg-dark bg-black" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">YOUR LOGO HERE</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Etwas zum Schreiben</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Etwas zum Schreiben</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              EVENTS
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">General Events</a></li>
              <li><a class="dropdown-item" href="#">Food Events</a></li>
              <li><a class="dropdown-item" href="#">Pub Events</a></li>
              <li><a class="dropdown-item" href="#">Small Events</a></li>
            </ul>
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
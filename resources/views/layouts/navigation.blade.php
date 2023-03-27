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
        <a href="home" class="text-decoration-none me-5 text-white fs-4">
            Home
        </a>
        <a href="about" class="text-decoration-none me-5 text-white fs-4">
            About us
        </a>
        <a href="contact" class="text-decoration-none me-5 text-white fs-4">
            Contact us
        </a>
        <a href="yourEvent" class="text-decoration-none me-5 text-white fs-4">
            Your Events
        </a>

<<<<<<< HEAD
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
=======
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('homePage')" :active="request()->routeIs('homePage')">
                        {{ __('HOME') }}
                    </x-nav-link>
                    <x-nav-link :href="route('aboutPage')" :active="request()->routeIs('aboutPage')">
                        {{ __('ABOUT US') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contactPage')" :active="request()->routeIs('contactPage')">
                        {{ __('CONTACT US') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    @auth
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                            @guest
                                <div>Invitado</div>
                            @endguest

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    @endauth

                    @guest
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>Invitado</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    @endguest

                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            @auth
                                <div>{{ Auth::user()->name }}</div>
                            @endauth
                            @guest
                                <div>Invitado</div>
                            @endguest

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    @auth
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    @endauth

                    @guest
                        <x-slot name="content">
                            <x-dropdown-link :href="route('login')">
                                {{ __('Log In') }}
                            </x-dropdown-link>
    
                            <x-dropdown-link :href="route('register')">
                                {{ __('Register') }}
                            </x-dropdown-link>
                        </x-slot>
                    @endguest
                
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
>>>>>>> da57728 (Fuktionen (Users / Besucher))
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
<<<<<<< HEAD
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
=======

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                    @auth
                        {{ Auth::user()->name }}
                    @endauth
                    @guest
                        Invitado
                    @endguest
                </div>
                <div class="font-medium text-sm text-gray-500">
                     @auth
                        {{ Auth::user()->email }}
                    @endauth
                    @guest
                        Invitado
                    @endguest
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
>>>>>>> da57728 (Fuktionen (Users / Besucher))
    </div>
  </div>
</nav>
@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
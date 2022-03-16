<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <title>Shaif's Cuisine</title>
    @production
   <link rel="stylesheet" href="{{ URL::secure_asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ URL::secure_asset('css/globalStyles.css') }}">
    <link rel="stylesheet" href="{{ URL::secure_asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ URL::secure_asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ URL::secure_asset('css/sendConfirm.css') }}">

    @endproduction


    <!-- aos library css  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Add your custom css -->
    <link rel="stylesheet" href="{{ URL::secure_asset('css/style.css') }}">
</head>

<body>

    <div class="nav">
        <div class="container">
            <div class="nav__wrapper">
                <a href="./index.html" class="logo">
                    <img src="{{ URL::secure_asset('images/logo.svg') }}" alt="shaif's cuisine">
                </a>
                <nav>
                    <div class="nav__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                    </div>
                    <div class="nav__bgOverlay"></div>
                    <ul class="nav__list">
                        <div class="nav__close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </div>
                        <div class="nav__list__wrapper">
                            @if (Route::has('login'))
                                <li><a class="nav__link" href={{ route('home') }}>Home</a></li>
                                <li><a class="nav__link" href={{ route('menu') }}>Menu</a></li>
                                <li><a class="nav__link" href={{ route('about') }}>About</a></li>
                                <li><a class="nav__link" href={{ route('contact') }}>Contact</a></li>
                                @auth
                                    <li><a class="btn primary-btn" href={{ route('bookings.create') }}>Book Table</a>
                                    </li>
                                    {{-- <li>
                                        <div>{{ Auth::user()->name }}</div>
                                    </li> --}}
                                    <li>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>

                                        {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                                            <x-dropdown align="right" width="48">
                                                <x-slot name="trigger">
                                                    <button
                                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                        <div>{{ Auth::user()->name }}</div>

                                                        <div class="ml-1">
                                                            <svg class="fill-current h-4 w-4"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </x-slot>

                                                <x-slot name="content">
                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </x-slot>
                                            </x-dropdown>
                                        </div> --}}
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}" class="btn primary-btn">Log in</a>

                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" class="btn primary-btn">Register</a>
                                        </li>

                                    @endauth
                                @endif
                            @endif

                            {{-- <li><a href="/bookings/create"  class="btn primary-btn">Book Table</a></li> --}}
                            {{-- <x-nav-link :href="route('bookings.create')" :active="request()->routeIs('dashboard')"
                                class="btn primary-btn">
                                {{ __('Book Table') }}
                            </x-nav-link> --}}

                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__col1">
                    <div class="footer__logo">
                        <img src="./images/logo.svg" alt="shaif's cuisine">
                    </div>
                    <p class="footer__desc">
                        Fresh and delicious traditional Bangladeshi food to delight the whole family.
                    </p>
                    <div class="footer__socials">
                        <h4 class="footer__socials__title">Follow us</h4>
                        <ol class="footer__socials__list">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-twitter">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="footer__col2">
                    <h3 class="footer__text__title">
                        Links
                    </h3>
                    <ol class="footer__text">
                        <li>
                            <a href={{ route('home') }}>Home</a>
                        </li>
                        <li>
                            <a href={{ route('menu') }}>Menu</a>
                        </li>
                        <li>
                            <a href=>Book Table</a>
                        </li>
                        <li>
                            <a href={{ route('about') }}>About Us</a>
                        </li>
                        <li>
                            <a href={{ route('contact') }}>contact Us</a>
                        </li>
                        <li>
                            <a>Privacy Policy</a>
                        </li>
                    </ol>
                </div>
                <div class="footer__col3">
                    <h3 class="footer__text__title">
                        Support
                    </h3>
                    <ol class="footer__text">
                        <li>
                            <a href={{ route('contact') }}>Contact</a>
                        </li>
                        <li>
                            <a>Support Center</a>
                        </li>
                        <li>
                            <a>Feedback</a>
                        </li>
                    </ol>
                </div>
                <div class="footer__col4">
                    <h3 class="footer__text__title">
                        Contact
                    </h3>
                    <ol class="footer__text">
                        <li>
                            <a href="#">+880123</a>
                        </li>
                        <li>
                            <a href="#">amira@gmail.com</a>
                        </li>
                        <li>
                            <a href="#">GEC Circle, Chittagong, Bangladesh</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer -->

    <!-- aos script -->
    <script type="text/javascript" src="https://unpkg.com/aos@next/dist/aos.js" defer></script>
    <!-- custom script -->
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}" defer></script>
</body>

</html>

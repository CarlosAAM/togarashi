<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('assets/pato/images/icons/logo.png') }}" alt="IMG-LOGO" data-logofixed="{{ asset('assets/pato/images/icons/logo2.png') }}">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="{{ route('guest.index') }}">Inicio</a>
                            </li>

                            <li>
                                <a href="{{ route('guest.menu') }}">Menú</a>
                            </li>

                            <li>
                                <a href="{{ route('guest.gallery') }}">Galeria</a>
                            </li>

                            <li>
                                <a href="{{ route('guest.index') }}#contacto">Contáctanos</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">
                    <a href="https://www.facebook.com/Togarashi-Japanese-Food-354601284626002/" target="_blank"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>

                    <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                </div>
            </div>
        </div>
    </div>
</header>
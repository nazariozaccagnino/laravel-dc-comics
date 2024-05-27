<header class="bg-white container d-flex justify-content-between align-items-center">
    <div id="logo" class="text-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
    </div>
    <div id="main-menu">
        <nav class="navbar-nav container navbar-light">
        <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        Home
                    </a>
                </li>
                <li>
                <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
                        href="{{route('comics.index')}}">
                        Show all cards
                    </a>
                </li>
                <li>
                <a class="nav-link {{ Route::currentRouteName() == 'comics.create' ? 'active' : '' }}"
                        href="{{route('comics.create')}}">
                        Add new Item
                    </a>
                </li>
            </ul>
                    
        </nav>
    </div>
</header>

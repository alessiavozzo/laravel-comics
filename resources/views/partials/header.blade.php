<!-- header -->
<header>
    <nav>

        <div class="nav-top bg-primary">
            <div class="container">
                <div class="credits-right d-flex justify-content-end text-white">
                    <div class="visa px-3">Lorem</div>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Additional DC Sites
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Lorem</a></li>
                        <li><a class="dropdown-item" href="#">Lorem</a></li>
                        <li><a class="dropdown-item" href="#">Lorem</a></li>
                        <li><a class="dropdown-item" href="#">Lorem</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="nav links justify-content-center align-items-center">
            <a href="{{route('homepage')}}" class="navbar-brand">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc-logo">
            </a>
            <a class="nav-link text-dark text-uppercase" href="#">Characters</a>
            <a class="nav-link text-uppercase {{Route::currentRouteName() === 'homepage' ? 'active-link text-primary' : 'text-dark'}}" href="{{route('homepage')}}" aria-current="page">Comics</a>
            <a class="nav-link text-uppercase {{Route::currentRouteName() === 'movies' ? 'active-link text-primary' : 'text-dark'}}" href="{{route('movies')}}">Movies</a>
            <a class="nav-link text-uppercase {{Route::currentRouteName() === 'tv' ? 'active-link text-primary' : 'text-dark'}}" href="{{route('tv')}}">Tv</a>
            <a class="nav-link text-dark text-uppercase" href="#">Games</a>
            <a class="nav-link text-dark text-uppercase" href="#">Collectibles</a>
            <a class="nav-link text-dark text-uppercase" href="#">Videos</a>
            <a class="nav-link text-dark text-uppercase" href="#">Fans</a>
            <a class="nav-link text-dark text-uppercase" href="#">News</a>
            <a class="nav-link text-dark text-uppercase dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Shop
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Lorem</a></li>
                <li><a class="dropdown-item" href="#">Lorem</a></li>
                <li><a class="dropdown-item" href="#">Lorem</a></li>
                <li><a class="dropdown-item" href="#">Lorem</a></li>
            </ul>

            <div class="searchbar">Searchbar DA FARE</div>

        </div>
    </nav>

</header>
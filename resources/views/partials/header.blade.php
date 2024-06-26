<!-- header -->
<header>
    <nav>

        <div class="nav-top bg-primary">
            <div class="container">
                <div class="credits-right d-flex justify-content-end text-white">
                    <div class="visa px-3 text-end">DC POWER VISA</div>
                    <a class="nav-link dropdown-toggle text-end text-uppercare" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

        <div class="container d-flex links justify-content-between align-items-center py-3">

            <!-- logo -->
            <a href="{{route('homepage')}}" class="navbar-brand pe-3">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc-logo">
            </a>

            <!-- links list -->
            <a class="nav-link text-uppercase {{Route::currentRouteName() === 'comic_books' ? 'active-link text-primary' : 'text-dark'}}" href="{{route('comic_books')}}">Comic books</a>
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

            <!-- searchbar -->
            <div class="searchbar ps-3">
                <form class="d-flex search-input" role="search">
                    <div class="input-group">
                        <input type="search" class="border-0 text-end" placeholder="Search">
                        <span class="input-group-text border-0 bg-white"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </form>


            </div>



        </div>
    </nav>

</header>
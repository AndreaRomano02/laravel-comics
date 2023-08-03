<div id="header-menu" class="container">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
    <nav>
        <ul>
            <li>
                <a href="{{ Route('characters') }}" @if (Route::is('characters')) class="active" @endif>
                    CHARACTERS
                </a>
            </li>
            <li>
                <a href="{{ Route('comics') }}" @if (Route::is('comics')) class="active" @endif>
                    COMICS
                </a>
            </li>
            <li>
                <a href="{{ Route('movie') }}" @if (Route::is('movie')) class="active" @endif>
                    MOVIES
                </a>
            </li>
            <li>
                <a href="{{ Route('tv') }}" @if (Route::is('tv')) class="active" @endif>
                    TV
                </a>
            </li>
            <li>
                <a href="{{ Route('games') }}" @if (Route::is('games')) class="active" @endif>
                    GAMES
                </a>
            </li>
            <li>
                <a href="{{ Route('collectibles') }}" @if (Route::is('collectibles')) class="active" @endif>
                    COLLECTIBLES
                </a>
            </li>
            <li>
                <a href="{{ Route('videos') }}" @if (Route::is('videos')) class="active" @endif>
                    VIDEOS
                </a>
            </li>
            <li>
                <a href="{{ Route('fans') }}" @if (Route::is('fans')) class="active" @endif>
                    FANS
                </a>
            </li>
            <li>
                <a href="{{ Route('news') }}" @if (Route::is('news')) class="active" @endif>
                    NEWS
                </a>
            </li>
            <li>
                <a href="{{ Route('shop') }}" @if (Route::is('shop')) class="active" @endif>
                    SHOP
                </a>
            </li>
        </ul>
    </nav>

    <div class="search-bar">
        <input type="text" placeholder="Search">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
</div>

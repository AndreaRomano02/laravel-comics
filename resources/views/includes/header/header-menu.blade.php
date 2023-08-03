<div id="header-menu" class="container">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
    <nav>
        <ul>
            <li>
                <a href="{{ Route('characters') }}">CHARACTERS</a>
            </li>
            <li>
                <a href="{{ Route('comics') }}">COMICS</a>
            </li>
            <li>
                <a href="{{ Route('movie') }}">MOVIES</a>
            </li>
            <li>
                <a href="{{ Route('tv') }}">TV</a>
            </li>
            <li>
                <a href="{{ Route('games') }}">GAMES</a>
            </li>
            <li>
                <a href="{{ Route('collectibles') }}">COLLECTIBLES</a>
            </li>
            <li>
                <a href="{{ Route('videos') }}">VIDEOS</a>
            </li>
            <li>
                <a href="{{ Route('fans') }}">FANS</a>
            </li>
            <li>
                <a href="{{ Route('news') }}">NEWS</a>
            </li>
            <li>
                <a href="{{ Route('shop') }}">SHOP</a>
            </li>
        </ul>
    </nav>

    <div class="search-bar">
        <input type="text" placeholder="Search">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
</div>

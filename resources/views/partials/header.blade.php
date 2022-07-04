<header class="">
    <div class="container ">
        <div class="logo">
            <img src="{{ asset('/img/dc-logo.png') }}" alt="">
        </div>
        <div class="nav">
            <ul>
                <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                    <a href="/"> HOME </a>
                </li>
                <li class="{{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}">
                    <a href=" {{ route('comics.index') }} "> COMICS </a>
                </li>
            </ul>
        </div>
    </div>
</header>
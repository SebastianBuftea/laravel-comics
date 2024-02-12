<header>
    <header>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc_logo">
        <nav>
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="{{ $link['page'] }}">{{ $link['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
</header>

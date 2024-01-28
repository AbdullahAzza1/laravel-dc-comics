<header class="p-3">
    <h1>ciao</h1>

    @foreach ($links as $link)
    <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
    @endforeach
</header>
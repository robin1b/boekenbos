<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Welkom' }} - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=lora:600,700" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bb-pagina">
    <div class="bb-container">
        <nav class="bb-nav">
            <a href="{{ route('home') }}" class="bb-nav-logo">
                <img src="{{ asset('images/logo.svg') }}" alt="">
                {{ config('app.name') }}
            </a>

            <div class="bb-nav-links">
                <a href="{{ route('books.index') }}" @if (request()->routeIs('books.*')) aria-current="page" @endif>Boeken</a>
                <a href="{{ route('over') }}" @if (request()->routeIs('over')) aria-current="page" @endif>Over</a>
            </div>
        </nav>
    </div>

    @isset($header)
        <header class="bb-header">
            <div class="bb-container">
                {{ $header }}
            </div>
        </header>
    @endisset

    <main class="bb-container py-10">
        {{ $slot }}
    </main>

    <footer class="bb-container">
        <p class="bb-voet">{{ config('app.name') }} · gemaakt met Laravel</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Welkom' }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-stone-50 text-stone-800">
    <header class="bg-bos text-white">
        <nav class="mx-auto flex max-w-5xl items-center gap-6 px-4 py-4 sm:px-8">
            <a href="{{ route('home') }}" class="text-lg font-bold">{{ config('app.name') }}</a>
            <a href="{{ route('books.index') }}" class="text-white/80 transition hover:text-lantaarn">Boeken</a>
            <a href="{{ route('over') }}" class="text-white/80 transition hover:text-lantaarn">Over</a>
        </nav>
    </header>

    <main class="mx-auto max-w-5xl px-4 py-8 sm:px-8">
        {{ $slot }}
    </main>
</body>
</html>

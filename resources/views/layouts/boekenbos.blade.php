<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Welkom' }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-stone-50 text-stone-800">
    <header class="border-b border-stone-200 bg-white">
        <nav class="mx-auto flex max-w-3xl items-center gap-6 px-8 py-4">
            <a href="{{ route('home') }}" class="font-bold">{{ config('app.name') }}</a>
            <a href="{{ route('books.index') }}" class="text-stone-600">Boeken</a>
            <a href="{{ route('over') }}" class="text-stone-600">Over</a>
        </nav>
    </header>

    <main class="mx-auto max-w-3xl p-8">
        {{ $slot }}
    </main>
</body>
</html>

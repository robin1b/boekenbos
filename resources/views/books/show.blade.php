<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $book['title'] }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-stone-50 text-stone-800">
    <main class="mx-auto max-w-3xl p-8">
        <a href="{{ route('books.index') }}" class="text-sm text-amber-700 underline">← Alle boeken</a>

        <article class="mt-4 rounded-xl border border-stone-200 bg-white p-8 shadow-sm">
            {{-- Nieuw = verschenen in 2023 of later --}}
            @if ($book['year'] >= 2023)
                <span class="inline-block rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">Nieuw</span>
            @endif

            <h1 class="mt-2 text-3xl font-bold">{{ $book['title'] }}</h1>
            <p class="mt-2 text-stone-600">door {{ $book['author'] }}</p>

            @isset($book['summary'])
                <p class="mt-4 leading-relaxed">{{ $book['summary'] }}</p>
            @else
                <p class="mt-4 italic text-stone-400">Nog geen samenvatting.</p>
            @endisset

            <p class="mt-4 inline-block rounded-full bg-amber-100 px-3 py-1 text-sm font-semibold text-amber-800">Verschenen in {{ $book['year'] }}</p>
        </article>
    </main>
</body>
</html>

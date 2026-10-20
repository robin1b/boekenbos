<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $book['title'] }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-stone-50 text-stone-800">
    <main class="mx-auto max-w-2xl p-8">
        <h1 class="text-3xl font-bold">{{ $book['title'] }}</h1>

        <p class="mt-2 text-stone-600">door {{ $book['author'] }} · {{ $book['year'] }}</p>

        <a href="{{ route('books.index') }}" class="mt-8 inline-block text-amber-700 underline">Terug naar alle boeken</a>
    </main>
</body>
</html>

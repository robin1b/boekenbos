<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alle boeken - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-stone-50 text-stone-800">
    <main class="mx-auto max-w-2xl p-8">
        <h1 class="text-3xl font-bold">Alle boeken</h1>

        <ul class="mt-6 space-y-2">
            @foreach ($books as $book)
                <li>{{ $book['title'] }} <span class="text-stone-500">door {{ $book['author'] }}</span></li>
            @endforeach
        </ul>
    </main>
</body>
</html>

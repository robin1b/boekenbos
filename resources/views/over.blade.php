<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Over {{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-stone-50 text-stone-800">
    <main class="mx-auto max-w-2xl p-8">
        <h1 class="text-3xl font-bold">Over {{ config('app.name') }}</h1>

        <p class="mt-4">Hier hou ik bij welke boeken ik lees en wat ik ervan vind.</p>

        <ul class="mt-4 list-disc pl-6">
            <li>Boeken bijhouden met een titel en een auteur</li>
            <li>Reviews schrijven met sterren</li>
            <li>Een eigen leeslijst</li>
        </ul>

        <a href="{{ route('books.index') }}" class="mt-8 inline-block text-amber-700 underline">Bekijk de boeken</a>
        <a href="{{ route('home') }}" class="ml-4 mt-8 inline-block text-amber-700 underline">Terug naar de start</a>
    </main>
</body>
</html>

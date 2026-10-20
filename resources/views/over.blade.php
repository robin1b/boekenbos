<x-layouts::boekenbos>
    <x-slot:title>Over</x-slot>

    <h1 class="text-3xl font-bold">Over {{ config('app.name') }}</h1>

    <p class="mt-4">Hier hou ik bij welke boeken ik lees en wat ik ervan vind.</p>

    <ul class="mt-4 list-disc pl-6">
        <li>Boeken bijhouden met een titel en een auteur</li>
        <li>Reviews schrijven met sterren</li>
        <li>Een eigen leeslijst</li>
    </ul>

    <a href="{{ route('books.index') }}" class="mt-8 inline-block text-amber-700 underline">Bekijk de boeken</a>
</x-layouts::boekenbos>

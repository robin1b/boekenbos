<x-layouts::boekenbos>
    <x-slot:title>Over</x-slot>

    <div class="bb-kaart max-w-2xl">
        <h1 class="bb-titel bb-titel-l">Over {{ config('app.name') }}</h1>

        <p class="mt-4">Hier hou ik bij welke boeken ik lees en wat ik ervan vind.</p>

        <ul class="mt-4 list-disc pl-6">
            <li>Boeken bijhouden met een titel en een auteur</li>
            <li>Reviews schrijven met sterren</li>
            <li>Een eigen leeslijst</li>
        </ul>

        <a href="{{ route('books.index') }}" class="bb-knop bb-knop-hoofd mt-6">Bekijk de boeken</a>
    </div>
</x-layouts::boekenbos>

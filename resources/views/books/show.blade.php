<x-layouts::boekenbos>
    <x-slot:title>{{ $book['title'] }}</x-slot>

    <a href="{{ route('books.index') }}" class="text-sm font-semibold text-bos underline">← Alle boeken</a>

    <article class="bb-detail mt-6">
        <img src="{{ asset($book['cover'] ?? 'images/geen-cover.svg') }}" alt="Cover van {{ $book['title'] }}" class="bb-cover">

        <div>
            {{-- Nieuw = verschenen in 2023 of later --}}
            @if ($book['year'] >= 2023)
                <span class="bb-label bb-label-amber">Nieuw</span>
            @endif

            <h1 class="bb-titel bb-titel-l mt-3">{{ $book['title'] }}</h1>
            <p class="bb-tekst-zacht mt-2">door {{ $book['author'] }} · {{ $book['year'] }}</p>

            @isset($book['summary'])
                <p class="mt-6 text-lg leading-relaxed">{{ $book['summary'] }}</p>
            @else
                <p class="bb-tekst-zacht mt-6 italic">Nog geen samenvatting.</p>
            @endisset
        </div>
    </article>
</x-layouts::boekenbos>

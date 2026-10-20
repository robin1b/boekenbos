<x-layouts::boekenbos>
    <x-slot:title>Alle boeken</x-slot>

    <x-slot:header>
        <h1 class="bb-titel bb-titel-xl">Alle boeken</h1>
        <p>{{ count($books) }} boeken in het bos</p>
    </x-slot>

    <div class="bb-boeken">
        @forelse ($books as $id => $book)
            <x-book-card :book="$book" :id="$id" />
        @empty
            <div class="bb-leeg col-span-full">
                <img src="{{ asset('images/lege-boekenplank.svg') }}" alt="">
                <p>Er staan nog geen boeken in het bos.</p>
            </div>
        @endforelse
    </div>
</x-layouts::boekenbos>

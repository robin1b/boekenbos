<x-layouts::boekenbos>
    <x-slot:title>Alle boeken</x-slot>

    <h1 class="text-3xl font-bold">Alle boeken</h1>
    <p class="mt-1 text-stone-500">{{ count($books) }} boeken in het bos</p>

    <div class="mt-6 grid gap-4 sm:grid-cols-2">
        @forelse ($books as $id => $book)
            <x-book-card :book="$book" :id="$id" @class(['sm:col-span-2' => $loop->first]) />
        @empty
            <p class="text-stone-500 sm:col-span-2">Er staan nog geen boeken in het bos.</p>
        @endforelse
    </div>
</x-layouts::boekenbos>

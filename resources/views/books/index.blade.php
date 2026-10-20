<x-layouts::boekenbos>
    <x-slot:title>Alle boeken</x-slot>

    <h1 class="text-3xl font-bold">Alle boeken</h1>
    <p class="mt-1 text-stone-500">{{ count($books) }} boeken in het bos</p>

    <div class="mt-6 grid gap-4 sm:grid-cols-2">
        @forelse ($books as $id => $book)
            <a href="{{ route('books.show', $id) }}" @class([
                'block rounded-xl border border-stone-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md',
                'sm:col-span-2' => $loop->first,
            ])>
                <span class="block text-lg font-semibold">{{ $book['title'] }}</span>
                <span class="mt-1 block text-stone-500">{{ $book['author'] }} · {{ $book['year'] }}</span>
            </a>
        @empty
            <p class="text-stone-500 sm:col-span-2">Er staan nog geen boeken in het bos.</p>
        @endforelse
    </div>
</x-layouts::boekenbos>

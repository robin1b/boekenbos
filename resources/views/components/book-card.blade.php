@props(['book', 'id'])

<a href="{{ route('books.show', $id) }}" {{ $attributes->merge(['class' => 'block rounded-xl border border-stone-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-lantaarn hover:shadow-md']) }}>
    <span class="block text-lg font-semibold">{{ $book['title'] }}</span>
    <span class="mt-1 block text-stone-500">{{ $book['author'] }} · {{ $book['year'] }}</span>
</a>

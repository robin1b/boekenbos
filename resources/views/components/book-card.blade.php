@props(['book', 'id'])

<a href="{{ route('books.show', $id) }}" {{ $attributes->merge(['class' => 'bb-boek']) }}>
    <img src="{{ asset($book['cover'] ?? 'images/geen-cover.svg') }}" alt="Cover van {{ $book['title'] }}" class="bb-cover">
    <span class="bb-boek-titel">{{ $book['title'] }}</span>
    <span class="bb-boek-auteur">{{ $book['author'] }}</span>
</a>

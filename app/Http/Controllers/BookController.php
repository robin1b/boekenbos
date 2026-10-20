<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class BookController extends Controller
{
    /**
     * Alle boeken.
     */
    public function index(): View
    {
        return view('books.index', ['books' => $this->books()]);
    }

    /**
     * Eén boek. Bestaat het niet, dan krijg je een 404-pagina.
     */
    public function show(int $id): View
    {
        $book = $this->books()[$id] ?? abort(404);

        return view('books.show', ['book' => $book]);
    }

    /**
     * Voorlopig nepdata. In unit 4 komen de boeken uit de database.
     *
     * @return array<int, array{title: string, author: string, year: int}>
     */
    private function books(): array
    {
        return [
            1 => ['title' => 'Het Lantaarnbos', 'author' => 'Lotte Verbeke', 'year' => 2021],
            2 => ['title' => 'De Stille Rivier', 'author' => 'Jens Maes', 'year' => 2018],
            3 => ['title' => 'Sterren boven Gent', 'author' => 'Amira El Idrissi', 'year' => 2023],
            4 => ['title' => 'Code in de Nacht', 'author' => 'Noor Janssens', 'year' => 2024],
        ];
    }
}

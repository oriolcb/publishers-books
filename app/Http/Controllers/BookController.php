<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $publishers = Publisher::all();
        return view('books.create', compact('publishers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'publisher_id' => 'required|exists:publishers,id',
        ]);

        Book::create($validatedData);

        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        $publishers = Publisher::all();
        return view('books.edit', compact('book', 'publishers'));
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'publisher_id' => 'required|exists:publishers,id',
        ]);

        $book->update($validatedData);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}

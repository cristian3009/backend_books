<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveBookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function store(SaveBookRequest $request)
    {
        return Book::create($request->validated());
    }

    public function show(Book $book)
    {
        return $book;
    }

    public function update(SaveBookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return $book;
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->noContent();
    }
}

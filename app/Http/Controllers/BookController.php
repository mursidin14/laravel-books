<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function books()
    {
        return view('books', [
            'title' => 'Books',
            'books' => Books::all()
        ]);
    }

    public function bookId(Books $book)
    {
        return view('book', [
                'title' => 'Books',
                'books' => $book
        ]);
    }
}

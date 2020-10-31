<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(3);

        return view(
            'books.index',  
            compact('books')
        );
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view(
            'books.show', 
            compact('book')
        );
    }

    public function create()
    {
        return view(
            'books.create'
        );
    }
}


// $books = Book::select('title', 'desc')->get();
// $books = Book::where('id', '>=', 2)->get();
// $books = Book::select('title', 'desc')->where('id', '>=', 2)->orderBy('id', 'DESC')->get();

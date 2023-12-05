<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show()
    {
        return view(
            "components.book.index",
            [
                'books' => Book::with('media')->get()
            ]
        );
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        if ($books->isEmpty()) {
            return json_encode([
                'message' => 'Sorry, an error ocurred :/'
            ]);
        }

        return json_encode($books);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return json_encode($book);
    }

    private function checkBooks(Collection $book)
    {
        if ($book->empty()) {
            return false;
        }
    }
}

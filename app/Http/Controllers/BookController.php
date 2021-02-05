<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    function index(){
        $books = Book::all();
        return view("books.index", compact("books"));
    }
}

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
    
     function show(Book $book){
         return view("books.show", compact("book"));
     }
     
    public function create(){
    	return view("books.create");
    }
    
    public function store(Request $request){
        
        $book = new Book();
        $book->fill($request->all());
        $book->save();
        
        return redirect()->route('books.show', $book);
    }
    
    public function edit(Book $book){
        return view("books.edit", compact("book"));
    }
    
    public function update(Request $request, Book $book){

        $book->fill($request->all());
        $book->save();
        
        return redirect()->route('books.show', $book);
    }
    
    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('books.index');
    }
}

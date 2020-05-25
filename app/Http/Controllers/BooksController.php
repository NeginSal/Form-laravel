<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index()
    {
        $books=book::all();
        return view('books.index',compact('books'));
    }

    public function show($id)
    {
        $book=book::find($id);
        return view('books.show',compact('books'));
    }
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:posts|max:256',
            'page' => 'required',
            'ISBN' => 'required|max:10',
            'price' => 'required',
            'date' => 'required |date']);


        $book = book::create($request->except('token'));

        $book = Book::create($request->except(key('_token')));
        dd($request->get(key('price')));
        dd($book);

    }

















}

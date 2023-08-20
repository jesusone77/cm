<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use PhpParser\Node\Stmt\Return_;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Hello Word';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create: El método "create" en un controlador 
        // generalmente se utiliza para mostrar un formulario 
        // de creación de un nuevo recurso. En otras palabras, 
        // es responsable de mostrar la vista que contiene el 
        // formulario HTML donde los usuarios pueden ingresar 
        // los datos necesarios para crear un nuevo registro 
        // en la base de datos.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
       $book = new Book;
       $now = Carbon::now();
       $book->title = $request->title;
       $book->no_pages = $request->no_pages;
       $book->save();
       return redirect('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
    //    dd('adios');
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}

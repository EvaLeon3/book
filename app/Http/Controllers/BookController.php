<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Autor;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Book::get();
        return view('book.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Book $libro)
    {
        $autors = Autor::select('id', 'nombre', 'apellido')->get();

        return view('book.create',  
        [
            'autor'=>$autors,
            'libro' => $libro,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'titulo' => 'required',
            'autors_id' =>'required',
            'precio' => 'required'
        ]);

        Book::create(
            [
                'titulo' => $request->titulo,
                'autors_id'  => $request->autors_id,
                'precio' => $request->precio,
               

            ]);

            return redirect('/libro');         
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $libro)
    {
        $autors = Autor::select('id', 'nombre', 'apellido')->get();

        return view('book.edit',  
        [
            'autor'=>$autors,
            'libro' => $libro,
        ]);
       /*  return view('book.edit', compact('libro')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $libro)
    {
        $libro ->update($request->all());

        return redirect('/libro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $libro)
    {
        $libro -> delete();
        return back()->with('status', 'Eliminado con exito');;
    }
}

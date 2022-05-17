<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class bookController extends Controller
{
     public function __construct(){
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::all();
        return view('book.index')->with('books',$books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $books = new book();

        $books->Titel = $request->get('Titel');
        $books->ISBN = $request->get('ISBN');
        $books->Total_copies = $request->get('Total_copies');
        $books->Available_copies = $request->get('Available_copies');

        $books->save();

        return redirect('/books');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::find($id);
        return view('book.edit')->with('book',$book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = book::find($id);

        $book->codigo = $request->get('codigo');
        $book->descripcion = $request->get('descripcion');
        $book->cantidad = $request->get('cantidad');
        $book->precio = $request->get('precio');

        $book->save();

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = book::find($id);
        $book->delete();
        return redirect('/books');
    }
}

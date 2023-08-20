<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Autor.autor', [
            'records' => Autor::All()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutorRequest $request)
    {
        $autor = new Autor;

        $autor->name = $request->name;
        $autor->email = $request->email;
        $autor->save();
        return redirect('/autors');

    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        dd('here');
        // foreach (Autor::all() as $flight) {
        //     echo $flight->name.' '.$flight->email."<br>";
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        //
        dd('here');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutorRequest $request, Autor $autor)
    {
        //
        dd('here');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        $flight = Autor::find($autor->id);
        $flight->delete();
        return redirect('/autors');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use App\Providers\RouteServiceProvider;
class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('autor', [
            'records' => Autor::All()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect('/agregarAutorForm');
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
        dd('hereSDFSDF');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        $autor = Autor::find($autor->id);
        return view('components.forms.dataAutor', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutorRequest $request, Autor $autor)
    {
        $autor->name = $request->name;
        $autor->email = $request->email;
        $autor->save();
        return redirect('/autors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        $autor = Autor::find($autor->id);
        $autor->delete();
        return redirect('/autors');

    }
}

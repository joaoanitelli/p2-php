<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piloto;

class PilotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pilotos = Piloto::all();
        return view("piloto.index",compact('pilotos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostrar formulário de cadastro do piloto
        //Método Get
        return view('piloto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Piloto::create([
            'piloto' => $request->input('piloto'),
            'equipe' => $request->input('equipe'),
            'ponto' => $request->input('ponto')
        ]);
        return redirect('/pilotos');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $piloto = Piloto::findOrFail($id);
        return view("piloto.edit",compact('piloto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $piloto = Piloto::findOrFail($id);
        $piloto->update([
            'piloto' => $request->input('piloto'),
            'equipe' => $request->input('equipe'),
            'ponto' => $request->input('ponto')
        ]);
        return redirect('/pilotos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $piloto = Piloto::findOrFail($id);
        $piloto->delete();
        return redirect('/pilotos');
    }

    public function delete(string $id) {
        //Método Get
        //Mostrar o formulário com os dados antes de excluir

        $piloto = Piloto::findOrFail($id);
        return view("piloto.delete",compact('piloto'));
    }
}

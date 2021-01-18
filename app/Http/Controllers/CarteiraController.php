<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carteira;
use App\Http\Requests\CarteiraRequest;

class CarteiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carteiras = Carteira::where('excluido', 0)->get();
        
        return view('carteira.index', [
            'carteiras' => $carteiras,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carteira.create', [
            'carteira' => new Carteira,
        ]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarteiraRequest $request)
    {
        $validated = $request->validated();   

        $carteira = new Carteira;
        $carteira->descricao = $request->descricao;
        $carteira->sigla = $request->sigla;
        $carteira->save($validated);        
        request()->session()->flash('alert-info', 'Carteira cadastrada com sucesso.');
        
        return redirect("/carteira/{$carteira->idCarteira}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('carteira.edit', [
            'carteira' => Carteira::findOrFail($id)
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarteiraRequest $request, $id)
    {        
        $validated = $request->validated();

        $carteira = Carteira::find($id);
        $carteira->descricao = $request->descricao;
        $carteira->sigla = $request->sigla;
        $carteira->update($validated);
        request()->session()->flash('alert-info', 'Carteira atualizada com sucesso.');
        
        return redirect("/carteira");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carteira = Carteira::find($id);        
        $carteira->excluido = true;
        $carteira->deleted_at = now();
        $carteira->update();

        return redirect("/carteira");
    }
}
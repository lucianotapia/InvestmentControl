<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;
use App\Http\Requests\TipoRequest;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::where('excluido', 0)->get();
        
        return view('tipo.index', [
            'tipos' => $tipos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo.create', [
            'tipo' => new Tipo,
        ]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoRequest $request)
    {
        $validated = $request->validated(); 

        $tipo = new Tipo;
        $tipo->descricao = $request->descricao;
        $tipo->sigla = $request->sigla;
        $tipo->save($validated);
        request()->session()->flash('alert-info', 'Tipo cadastrado com sucesso.');
        return redirect("/tipo");
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
        return view('tipo.edit', [
            'tipo' => Tipo::findOrFail($id)
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoRequest $request, $id)
    {     

        $validated = $request->validated();        
        //dd($validated);
        $tipo = Tipo::find($id);
        $tipo->descricao = $request->descricao;
        $tipo->sigla = $request->sigla;
        $tipo->update($validated);
        request()->session()->flash('alert-info', 'Tipo atualizado com sucesso.');
        
        return redirect("/tipo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = Tipo::find($id);        
        $tipo->excluido = true;
        $tipo->deleted_at = now();
        $tipo->update();

        return redirect("/tipo");
    }
}

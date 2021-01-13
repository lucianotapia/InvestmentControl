<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aporte;
use App\Http\Requests\AporteRequest;

class AporteController extends Controller      
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aportes = Aporte::where('excluido', 0)->get();        
        return view('aporte.index', [
            'aportes' => $aportes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aporte.create', [
            'aporte' => new Aporte,
        ]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AporteRequest $request)
    {
        //$validated = $request->validated();
        $validated = $request->validated();

        $aporte = new Aporte;
        $aporte->carteira_id = $request->carteira_id;
        $aporte->conta_id = $request->conta_id;
        $aporte->data = $request->data;
        $aporte->valor = $request->valor;
        $aporte->create($validated);
        
        request()->session()->flash('alert-info', 'Aporte cadastrado com sucesso.');

        return redirect("/aporte/{$aporte->idAporte}");
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
        return view('aporte.edit', [
            'aporte' => Aporte::findOrFail($id)
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AporteRequest $request, $id)
    {        
        $validated = $request->validated();

        $aporte = Aporte::find($id);
        $aporte->carteira_id = $request->carteira_id;
        $aporte->conta_id = $request->conta_id;
        $aporte->data = $request->data;
        $aporte->valor = $request->valor;
        $aporte->update($validated);

        request()->session()->flash('alert-info', 'Aporte atualizado com sucesso.');
        
        return redirect("/aporte");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aporte = Aporte::find($id);        
        $aporte->excluido = true;
        $aporte->deleted_at = now();
        $aporte->update();

        return redirect("/aporte");
    }
}

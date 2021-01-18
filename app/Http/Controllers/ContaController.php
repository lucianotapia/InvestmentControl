<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;
use App\Http\Requests\ContaRequest;

class ContaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contas = Conta::where('excluido', 0)->get();
        
        return view('conta.index', [
            'contas' => $contas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conta.create', [
            'conta' => new Conta,
        ]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContaRequest $request)
    {
        $validated = $request->validated();
        $conta = new Conta;
        $conta->corretora = $request->corretora;
        $conta->conta = $request->conta;
        $conta->save($validated);
        request()->session()->flash('alert-info', 'Conta cadastrada com sucesso.');
        
        return redirect("/conta");
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
        return view('conta.edit', [
            'conta' => Conta::findOrFail($id)
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContaRequest $request, $id)
    {        
        $validated = $request->validated();

        $conta = Conta::find($id);
        $conta->corretora = $request->corretora;
        $conta->conta = $request->conta;        
        $conta->update($validated);
        request()->session()->flash('alert-info', 'Conta atualizada com sucesso.');
        
        return redirect("/conta");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conta = Conta::find($id);
        $conta->excluido = true;
        $conta->deleted_at = now();
        $conta->update();

        return redirect("/conta");
    }
}

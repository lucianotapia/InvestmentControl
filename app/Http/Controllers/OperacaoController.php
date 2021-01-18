<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operacao;

class OperacaoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operacoes = Operacao::where('excluido', 0)->get();
        
        return view('operacao.index', [
            'operacoes' => $operacoes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operacao.create', [
            'operacao' => new Operacao,
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
        $operacao = new Operacao;
        $operacao->ticker = $request->ticker;
        $operacao->operacao = $request->operacao;
        $operacao->data = $request->data;
        $operacao->valor = $request->valor;
        $operacao->qtde = $request->qtde;
        $operacao->save();
        
        return redirect("/operacao/{$operacao->idOperacao}");
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
        return view('operacao.edit', [
            'operacao' => Operacao::findOrFail($id)
       ]);
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
        $operacao = Operacao::find($id);
        $operacao->ticker = $request->ticker;
        $operacao->operacao = $request->operacao;
        $operacao->data = $request->data;
        $operacao->qtde = $request->qtde;
        $operacao->valor = $request->valor;
        $operacao->update();
        
        return redirect("/operacao");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operacao = Operacao::find($id);        
        $operacao->excluido = true;
        $operacao->deleted_at = now();
        $operacao->update();

        return redirect("/operacao");
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OperacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'ticker' => "CVCB3",
            'operacao'  => "C",
            'data' => "2019-12-03",
            'qtde' => "100",
            'valor'  => "43.84"
        ];        
        \App\Models\Operacao::create($dados);

        $dados = [
            'ticker' => "ITSA4",
            'operacao'  => "C",
            'data' => "2020-03-03",
            'qtde' => "100",
            'valor'  => "12.00",
        ];        
        \App\Models\Operacao::create($dados);
    }
}
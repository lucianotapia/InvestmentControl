<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'descricao' => "Fundos Imobiliários",
            'sigla'  => "FII"
        ];        
        \App\Models\Tipo::create($dados);

        $dados = [
            'descricao' => "Ações",
            'sigla'  => "AÇÕES"
        ];    
        \App\Models\Tipo::create($dados);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarteiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'descricao' => "Carteira 1",
            'sigla'  => "CART1"            
        ];        
        \App\Models\Carteira::create($dados);
        
        $dados = [
            'descricao' => "Carteira 2",
            'sigla'  => "CART2"
        ];        
        \App\Models\Carteira::create($dados);
    }    
}
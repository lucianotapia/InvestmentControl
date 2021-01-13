<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'corretora' => "Clear",
            'conta'  => "9999999"
        ];        
        \App\Models\Conta::create($dados);

        $dados = [
            'corretora' => "XP",
            'conta'  => "XXXXXX"
        ];    
        \App\Models\Conta::create($dados);
    }
}

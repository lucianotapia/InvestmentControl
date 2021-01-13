<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'carteira_id' => 1,
            'conta_id'    => 1,
            'data'        => '2021-01-04',
            'valor'       => 1230.75
        ];        
        \App\Models\Aporte::create($dados);

        $dados = [
            'carteira_id' => 1,
            'conta_id'    => 2,
            'data'        => '2020-05-31',
            'valor'       => 2000.23
        ];        
        \App\Models\Aporte::create($dados);
    }
}

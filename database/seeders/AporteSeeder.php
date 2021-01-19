<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

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
            'data' => Carbon::CreateFromFormat('Y-m-d', '2021-01-04')->format('d/m/Y'),
            'valor'       => 1230.75
        ];        
        \App\Models\Aporte::create($dados);

        $dados = [
            'carteira_id' => 1,
            'conta_id'    => 2,            
            'data' => Carbon::CreateFromFormat('Y-m-d', '2020-05-31')->format('d/m/Y'),
            'valor'       => 2000.23
        ];        
        \App\Models\Aporte::create($dados);
    }
}

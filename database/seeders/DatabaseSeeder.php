<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            # Vou deixar comentando de quem fez a parte 4 
            # para não quebrar a migration de quem ainda no replicado
            CarteiraSeeder::class,
            ContaSeeder::class,
            OperacaoSeeder::class,
            TipoSeeder::class,
            AporteSeeder::class,
            UserSeeder::class,
        ]);
    }
}

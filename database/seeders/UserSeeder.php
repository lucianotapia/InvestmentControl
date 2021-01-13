<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => "Administrador",
            'email'  => "teste@gmail.com",
            'password' => "teste"
        ];        
        \App\Models\User::create($dados);
    }
}

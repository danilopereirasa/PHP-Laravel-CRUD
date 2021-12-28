<?php

namespace Database\Seeders;

use App\Models\tipoUsuario;
use Illuminate\Database\Seeder;

class TipoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipoUsuario::create([
            'tipo' => 'Empresas',
            'idSituacao' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        tipoUsuario::create([
            'tipo' => 'Empregados',
            'idSituacao' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

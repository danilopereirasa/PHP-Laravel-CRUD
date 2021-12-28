<?php

namespace Database\Seeders;

use App\Models\empresas;
use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empresas::create([
            'nome' => 'B2W - Americanas',
            'endereco' => 'Rua Sacadura Cabral, 102 - Rio de Janeiro, RJ - 20081-902',
            'logotipo' => '',
            'website' => 'https://www.americanas.com.br/',
            'idSituacao' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        empresas::create([
            'nome' => 'B2W - Submarino',
            'endereco' => 'Rua Sacadura Cabral, 102 - Rio de Janeiro, RJ - 20081-902',
            'logotipo' => '',
            'website' => 'https://www.submarino.com.br/',
            'idSituacao' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

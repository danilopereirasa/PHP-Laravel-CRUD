<?php

namespace Database\Seeders;

use App\Models\empregados;
use Illuminate\Database\Seeder;

class EmpregadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empregados::create([
            'nome' => 'Danilo',
            'sobrenome' => 'Pereira Sá',
            'prontuario' => '45824878548',
            'idEmpresa' => 1,
            'email' => 'danilo@productweb.com.br',
            'email_verified_at' => now(),
            'telefone' => '11957090510',
            'idSituacao' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        empregados::create([
            'nome' => 'Ione',
            'sobrenome' => 'Karine Sá',
            'prontuario' => '65824587854',
            'idEmpresa' => 2,
            'email' => 'ione@gmail.com.br',
            'email_verified_at' => now(),
            'telefone' => '11980808588',
            'idSituacao' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

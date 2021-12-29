<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'idTipoUsuario' => 1,
            'idRelacao' => 1,
            'name' => 'Danilo Pereira Sá',
            'email' => 'danilo@productweb.com.br',
            'password' => bcrypt('123456'),
            'idSituacao' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'idTipoUsuario' => 2,
            'idRelacao' => 1,
            'name' => 'B2W - Americanas',
            'email' => 'b2wamericanas@gmail.com',
            'password' => bcrypt('123456'),
            'idSituacao' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'idTipoUsuario' => 2,
            'idRelacao' => 2,
            'name' => 'B2W - Submarino',
            'email' => 'b2wsubmarino@gmail.com',
            'password' => bcrypt('123456'),
            'idSituacao' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

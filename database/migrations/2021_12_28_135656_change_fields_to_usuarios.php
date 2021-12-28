<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldsToUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropUnique('usuarios_idtipousuario_unique');
            $table->dropUnique('usuarios_id_unique');

            $table->bigInteger('idTipoUsuario')->change();
            $table->bigInteger('id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->bigInteger('idTipoUsuario')->unique()->change();
            $table->bigInteger('id')->unique()->change();
        });
    }
}

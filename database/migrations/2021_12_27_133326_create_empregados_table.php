<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpregadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empregados', function (Blueprint $table) {
            $table->bigIncrements('idEmpregado');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('prontuario');
            $table->bigInteger('idEmpresa');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('telefone')->nullable();
            $table->boolean('idSituacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empregados');
    }
}

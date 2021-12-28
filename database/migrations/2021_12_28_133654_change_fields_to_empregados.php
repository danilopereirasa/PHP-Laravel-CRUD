<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldsToEmpregados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empregados', function (Blueprint $table) {
            $table->string('telefone')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empregados', function (Blueprint $table) {
            Schema::table('empregados', function (Blueprint $table) {
                $table->timestamp('telefone')->nullable()->change();
            });
        });
    }
}

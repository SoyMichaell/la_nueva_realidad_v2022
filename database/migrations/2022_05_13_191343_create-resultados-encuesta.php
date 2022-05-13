<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados-encuesta', function (Blueprint $table) {
            $table->id();
            $table->string('nit_empresa');
            $table->integer('perspectiva_c_d');
            $table->integer('perspectiva_c');
            $table->integer('perspectiva_p_i');
            $table->integer('perspectiva_f');
            $table->integer('total');
            $table->string('ciiu');
            $table->date('fecha_registro_resultado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

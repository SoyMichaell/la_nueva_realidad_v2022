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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('organizacion');
            $table->string('categoria');
            $table->string('razon_social');
            $table->string('identificacion');
            $table->string('nit');
            $table->date('fecha_matricula');
            $table->date('fecha_renovacion');
            $table->string('direccion');
            $table->string('municipio');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('telefono3');
            $table->string('correo');
            $table->text('ciiu_1');
            $table->text('ciiu_2');
            $table->text('ciiu_3');
            $table->text('ciiu_4');
            $table->integer('numero_persona');
            $table->string('activo_total');
            $table->string('tamano');
            $table->string('propietario');
            $table->string('representante');
            $table->string('autorizacion');
            $table->string('year');
            $table->string('estado');
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
        Schema::dropIfExists('empresas');
    }
};

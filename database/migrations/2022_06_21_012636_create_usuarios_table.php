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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("TipoDoc");
            $table->string("NumDoc");
            $table->string("PrimerNom");
            $table->string("SegundoNom");
            $table->string("PrimerApe");
            $table->string("SegundoApe");
            $table->string("Direccion_Residencia");
            $table->string("Telefono");
            $table->string("Genero");
            $table->datetime("Fecha_Naci");
            $table->string("Estado_Civil");
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
        Schema::dropIfExists('usuarios');
    }
};

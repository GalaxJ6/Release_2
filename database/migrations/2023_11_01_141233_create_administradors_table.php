<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->id()->comment("Cédula del Administrador");
            $table->string("name")->comment("Nombre del Administrador");
            $table->string("last_name")->comment("Apellido del Administrador");

            $table->unsignedBigInteger("sede_id")->comment("ID de la sede");
            $table->foreign("sede_id")->references("id")->on("sedes");

            $table->unsignedBigInteger("deporte_id")->comment("ID del deporte");
            $table->foreign("deporte_id")->references("id")->on("deportes");

            $table->string("password")->comment("Contraseña del Administrador");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradors');
    }
};

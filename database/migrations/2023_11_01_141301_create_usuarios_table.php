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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id()->comment("Cédula del Usuario");
            $table->string("name")->comment("Nombre del Usuario");
            $table->string("last_name")->comment("Apellido del Usuario");
            $table->string("cel_num")->comment("Número Telefónico del Usuario");
            $table->date("birthdate")->comment("Fecha de Nacimiento del Usuario");
            $table->string("lug_res")->comment("Lugar de Residencia del Usuario");
            $table->string("gender")->comment("Género del Usuario");
            $table->string("email")->comment("Email del Usuario");

            $table->unsignedBigInteger("sede_id")->comment("ID de la sede");
            $table->foreign("sede_id")->references("id")->on("sedes");

            $table->unsignedBigInteger("deporte_id")->comment("ID del deporte");
            $table->foreign("deporte_id")->references("id")->on("deportes");

            $table->string("password")->comment("Contraseña del Usuario");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

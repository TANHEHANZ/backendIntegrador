<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamientosTable extends Migration
{

    public function up()
    {
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pacientes')->constrained('pacientes')->cascadeOnUpdate()->cascadeOnDelete();
            $table ->foreignId('id_doctores')->constrained('doctores')->cascadeOnDelete()->cascadeOnDelete();
            $table ->foreignId('id_tipotratamientos')->constrained('tipotratamientos')->cascadeOnDelete()->cascadeOnDelete();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table ->string('observaciones');
            $table ->string('estadotratamiento');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tratamiento');
    }
}

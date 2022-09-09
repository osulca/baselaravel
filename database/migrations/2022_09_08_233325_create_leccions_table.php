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
        Schema::create('leccions', function (Blueprint $table) {
            $table->id();
            $table->integer("numero");
            $table->string("status");
            $table->string("comentario_profesor");
            $table->string("comentario_estudiante");
            $table->foreignId("programacion_id")->constrained();
            $table->foreignId("estudiante_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leccions');
    }
};

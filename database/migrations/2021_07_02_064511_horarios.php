<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_ambiente');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_hora');
            $table->unsignedBigInteger('id_dia');
            $table->unsignedBigInteger('id_semestre');
             $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');
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
         Schema::dropIfExists('horarios');
    }
}

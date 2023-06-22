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
        Schema::create('salaries', function (Blueprint $table) {
            $table->bigIncrements('id_salarié');
            $table->string('nom');
            $table->string('prénom');
            $table->string('sexe');
            $table->string('entité');
            $table->string('email');
            $table->string('poste_actuel');
            $table->string('poste_occupe');
            $table->string('capacité');
            $table->string('performance');
            $table->integer('id_poste')->unsigned();
            $table->foreign('id_poste')
                  ->references('id')
                  ->on('postes')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->timestamps('creer_le');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
};

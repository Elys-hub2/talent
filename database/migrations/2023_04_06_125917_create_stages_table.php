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
        Schema::create('stages', function (Blueprint $table) {
            $table->bigIncrements('id_stage');
            $table->string('nom');
            $table->string('prénom');
            $table->string('sexe');
            $table->integer('age');
            $table->string('session');
            $table->integer('h_présence');
            $table->integer('heures');
            $table->date('date_debut');
            $table->date('date_fin');
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
        Schema::dropIfExists('stages');
    }
};

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
        Schema::create('formations', function (Blueprint $table) {
            $table->bigIncrements('id_formation');
            $table->string('nom');
            $table->string('prénom');
            $table->string('sexe');
            $table->integer('age');
            $table->string('lieu_formaton');
            $table->string('cours');
            $table->integer('prix');
            $table->integer('h_présence');
            $table->integer('heures');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->enum('reussi', ['oui','non']);
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
        Schema::dropIfExists('formations');
    }
};

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
        Schema::create('demandeinscriptions', function (Blueprint $table) {
            $table->id('id_demande');
            $table->string('nom');
            $table->string('prénom');
            $table->string('poste');
            $table->string('diplôme');
            $table->enum('sujet', ['formation', 'stage']);
            $table->string('email');
            $table->string('telephone');
            $table->text('contenu');
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
        Schema::dropIfExists('demandeinscriptions');
    }
};

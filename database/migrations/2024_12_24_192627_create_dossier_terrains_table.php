<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dossier_terrains', function (Blueprint $table) {
            $table->id('iddossier');
            $table->date('date_ouverture');
            $table->date('date_cloture')->nullable();
            $table->foreignId('numter')->constrained('terrains', 'numter');
            $table->foreignId('numnotaire')->constrained('notaires', 'numn');
            $table->string('etat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dossier_terrains');
    }
};


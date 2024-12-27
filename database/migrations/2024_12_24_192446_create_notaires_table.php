<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('notaires', function (Blueprint $table) {
            $table->id('numn');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('tel');
            $table->string('email');
            $table->foreignId('id_cab')->constrained('cabinets', 'id_cab');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notaires');
    }
};


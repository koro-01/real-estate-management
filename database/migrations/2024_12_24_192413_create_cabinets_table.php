<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cabinets', function (Blueprint $table) {
            $table->id('id_cab');
            $table->string('nom');
            $table->string('adresse');
            $table->string('tel');
            $table->string('ville');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cabinets');
    }
};


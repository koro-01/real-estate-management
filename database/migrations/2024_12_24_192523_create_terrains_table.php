<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('terrains', function (Blueprint $table) {
            $table->id('numter');
            $table->string('typeTerrain');
            $table->decimal('prixvente', 10, 2);
            $table->string('cinv');
            $table->foreign('cinv')->references('cinv')->on('vendeurs');
            $table->string('titre_foncier');
            $table->string('adresse');
            $table->string('ville');
            $table->decimal('superficie', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('terrains');
    }
};


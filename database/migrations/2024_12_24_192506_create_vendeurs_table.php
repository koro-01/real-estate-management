<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vendeurs', function (Blueprint $table) {
            $table->string('cinv')->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->date('ddn');
            $table->string('tel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendeurs');
    }
};


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('screening_symptoms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('screening_id')->constrained()->onDelete('cascade');
            $table->boolean('batuk');
            $table->boolean('bb');
            $table->boolean('demam');
            $table->boolean('lemas');
            $table->boolean('keringat');
            $table->boolean('sesak');
            $table->boolean('getah');
            $table->boolean('jangkit');
            $table->string('lainnya')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('screening_symptoms');
    }
};

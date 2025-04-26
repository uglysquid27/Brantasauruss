<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('screenings', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('alamat');
            $table->string('phone');
            $table->string('nik');
            $table->string('work');
            $table->date('born'); // maybe better as a DATE, not string
            $table->enum('gender', ['male', 'female']); // optional: you can also use string
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('screenings');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('titleone')->nullable();
            $table->string('titletwo')->nullable();
            $table->string('titlethree')->nullable();

            $table->string('imageone')->nullable();
            $table->string('imagetwo')->nullable();
            $table->string('imagethree')->nullable();

            $table->longText('descriptionone')->nullable();
            $table->longText('descriptiontwo')->nullable();
            $table->longText('descriptionthree')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
